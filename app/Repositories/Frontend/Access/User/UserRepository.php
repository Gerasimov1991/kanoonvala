<?php

namespace App\Repositories\Frontend\Access\User;

use App\Events\Frontend\Auth\UserConfirmed;
use App\Exceptions\GeneralException;
use App\Models\Access\User\SocialLogin;
use App\Models\Access\User\User;
use App\Notifications\Frontend\Auth\UserChangedPassword;
use App\Notifications\Frontend\Auth\UserNeedsConfirmation;
use App\Repositories\Backend\Access\Role\RoleRepository;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\Subscription;
/**
 * Class UserRepository.
 */
class UserRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = User::class;

    /**
     * @var RoleRepository
     */
    protected $role;

    /**
     * @param RoleRepository $role
     */
    public function __construct(RoleRepository $role)
    {
        $this->role = $role;
    }

    /**
     * @param $email
     *
     * @return bool
     */
    public function findByEmail($email)
    {
        return $this->query()->where('email', $email)->first();
    }

    /**
     * @param $token
     *
     * @throws GeneralException
     *
     * @return mixed
     */
    public function findByToken($token)
    {
        return $this->query()->where('confirmation_code', $token)->first();
    }

    /**
     * @param $token
     *
     * @throws GeneralException
     *
     * @return mixed
     */
    public function getEmailForPasswordToken($token)
    {
        $rows = DB::table(config('auth.passwords.users.table'))->get();

        foreach ($rows as $row) {
            if (password_verify($token, $row->token)) {
                return $row->email;
            }
        }

        throw new GeneralException(trans('auth.unknown'));
    }

    /**
     * Create User.
     *
     * @param array $data
     * @param bool  $provider
     *
     * @return static
     */
    public function create(array $data, $provider = false)
    {
        $user = self::MODEL;
        $user = new $user();
        $user->first_name = $data['first_name'];
        $user->last_name = $data['last_name'];
        $user->email = $data['email'];
        $user->mobile = $data['mobile'];
        $user->confirmation_code = md5(uniqid(mt_rand(), true));
        if($data['isAdvocate'] == 'advocate-signup'){
            $user->status = 1;
        }else{
            $user->status = 1;
        }
        $user->password = $provider ? null : Hash::make($data['password']);
        $user->is_term_accept = $data['is_term_accept'];

        // If users require approval, confirmed is false regardless of account type
        if (config('access.users.requires_approval')) {
            $user->confirmed = 0; // No confirm e-mail sent, that defeats the purpose of manual approval
        } elseif (config('access.users.confirm_email')) { // If user must confirm email
            // If user is from social, already confirmed
            if ($provider) {
                $user->confirmed = 1; // E-mails are validated through the social platform
            } else {
                // Otherwise needs confirmation
                $user->confirmed = 0;
                $confirm = true;
            }
        } else {
            // Otherwise both are off and confirmed is default
            $user->confirmed = 1;
        }

        $user->url_slug = UrlSlug($data['first_name'].' '.$data['last_name'],'users','url_slug');

        DB::transaction(function () use ($user, $provider, $data) {
            if ($user->save()) {
                
                /*
                 * Add the default site role to the new user
                 */
                $defaultRole = $this->role->getDefaultUserRole();
                if($data['isAdvocate'] == 'advocate-signup'){
                    $defaultRole = 4;
                    // Subscription
                    // $subscriptInsertArray = [
                    //     'user_id' => $user->id,
                    //     'plan_id' => '4',
                    //     'duration' => '30',
                    //     'subscription_date' => \carbon\Carbon::now(),
                    //     'transaction_id' => $this->randID(10),
                    //     'subscription_status' => 'active',
                    // ];
                    // Subscription::create($subscriptInsertArray);
                }
                $user->attachRole($defaultRole);
                /*
                 * Fetch the permissions of role attached to this user
                */
                $permissions = $user->roles->first()->permissions->pluck('id');
                /*
                 * Assigned permissions to user
                */
                $user->permissions()->sync($permissions);

                /*
                 * If users have to confirm their email and this is not a social account,
                 * send the confirmation email
                 *
                 * If this is a social account they are confirmed through the social provider by default
                 */
                if (config('access.users.confirm_email') && $provider === false) {
                    $user->notify(new UserNeedsConfirmation($user->confirmation_code));
                }
            }
        });

        /*
         * Return the user object
         */
        return $user;
    }

    public function randID($length) {
        $vowels = 'AEUY';
        $consonants = '0123456789BCDFGHJKLMNPQRSTVWXZ';
        $idnumber = '';
        $alt = time() % 2;
        for ($i = 0;$i < $length;$i++) {
            if ($alt == 1) {
                $idnumber.= $consonants[(rand() % strlen($consonants)) ];
                $alt = 0;
            } else {
                $idnumber.= $vowels[(rand() % strlen($vowels)) ];
                $alt = 1;
            }
        }
        
        return $idnumber;
    }
    /**
     * @param $data
     * @param $provider
     *
     * @throws GeneralException
     *
     * @return UserRepository|bool
     */
    public function findOrCreateSocial($data, $provider)
    {
        // User email may not provided.
        $user_email = $data->email ?: "{$data->id}@{$provider}.com";

        // Check to see if there is a user with this email first.
        $user = $this->findByEmail($user_email);

        /*
         * If the user does not exist create them
         * The true flag indicate that it is a social account
         * Which triggers the script to use some default values in the create method
         */
        if (!$user) {
            // Registration is not enabled
            if (!config('access.users.registration')) {
                throw new GeneralException(trans('exceptions.frontend.auth.registration_disabled'));
            }

            $user = $this->create([
                'name'  => $data->name,
                'email' => $user_email,
            ], true);
        }

        // See if the user has logged in with this social account before
        if (!$user->hasProvider($provider)) {
            // Gather the provider data for saving and associate it with the user
            $user->providers()->save(new SocialLogin([
                'provider'    => $provider,
                'provider_id' => $data->id,
                'token'       => $data->token,
                'avatar'      => $data->avatar,
            ]));
        } else {
            // Update the users information, token and avatar can be updated.
            $user->providers()->update([
                'token'  => $data->token,
                'avatar' => $data->avatar,
            ]);
        }

        // Return the user object
        return $user;
    }

    /**
     * @param $token
     *
     * @throws GeneralException
     *
     * @return bool
     */
    public function confirmAccount($token)
    {
        $user = $this->findByToken($token);

        if ($user->confirmed == 1) {
            throw new GeneralException(trans('exceptions.frontend.auth.confirmation.already_confirmed'));
        }

        if ($user->confirmation_code == $token) {
            $user->confirmed = 1;

            event(new UserConfirmed($user));

            return $user->save();
        }

        throw new GeneralException(trans('exceptions.frontend.auth.confirmation.mismatch'));
    }

    /**
     * @param $id
     * @param $input
     *
     * @throws GeneralException
     *
     * @return mixed
     */
    public function updateProfile($id, $input)
    {
        
        $user = $this->find($id);
        $user->first_name       = ($input['first_name'])?$input['first_name']:$user->first_name;
        $user->last_name        = ($input['last_name'])?$input['last_name']:$user->last_name;
        $user->city             = ($input['city'])?$input['city']:$user->city;
        $user->state            = ($input['state'])?$input['state']:$user->state;
        $user->postal_code      = ($input['postal_code'])?$input['postal_code']:$user->postal_code;
        $user->address          = ($input['address'])?$input['address']:$user->address;
        $user->about_me         = ($input['about_me'])?$input['about_me']:$user->about_me;
        $user->bar_council_no   = ($input['bar_council_no'])?$input['bar_council_no']:$user->bar_council_no;
        $user->aor_number       = ($input['aor_number'])?$input['aor_number']:$user->aor_number;
        $user->locality       = ($input['locality'])?$input['locality']:$user->locality;

        if(isset($input['specialization'])){
            $user->specialization   = ($input['specialization'])?$input['specialization']:$user->specialization;
            $user->experience       = ($input['experience'])?$input['experience']:$user->experience;
            $user->court_in         = ($input['court_in'])?$input['court_in']:$user->court_in;
            $user->adv_fee         = ($input['adv_fee'])?$input['adv_fee']:$user->adv_fee;
        }
        if ($user->canChangeMobile())
            $user->mobile           = ($input['mobile'])?$input['mobile']:$user->mobile;
        
        if(isset($input['license_image'])){
            $licenseImage = rand(99,999).''.time().'.'.$input['license_image']->extension();  
            if($input['license_image']->move(public_path('uploads/license'), $licenseImage)){
                if($user->license_image && file_exists(public_path('uploads/license/'.$user->license_image))) {
                    unlink(public_path('uploads/license/').''.$user->license_image);
                }
                $user->license_image    = $licenseImage;
            }

        }
        

        if(isset($input['profile_image'])){
            $profileImage = rand(99,999).''.time().'.'.$input['profile_image']->extension();  
            if($input['profile_image']->move(public_path('uploads/profile'), $profileImage)){
                if($user->profile_image && file_exists(public_path('uploads/profile/'.$user->profile_image))){
                    unlink(public_path('uploads/profile/').''.$user->profile_image);
                }
                $user->profile_image    = $profileImage;
            }
        }
        $user->updated_by = access()->user()->id;

        if ($user->canChangeEmail()) {
            //Address is not current address
            if ($user->email != $input['email']) {
                //Emails have to be unique
                if ($this->findByEmail($input['email'])) {
                    throw new GeneralException(trans('exceptions.frontend.auth.email_taken'));
                }

                // Force the user to re-verify his email address
                $user->confirmation_code = md5(uniqid(mt_rand(), true));
                $user->confirmed = 0;
                $user->email = $input['email'];
                $updated = $user->save();

                // Send the new confirmation e-mail
                $user->notify(new UserNeedsConfirmation($user->confirmation_code));

                return [
                    'success'       => $updated,
                    'email_changed' => true,
                ];
            }
        }

        return $user->save();
    }

    /**
     * @param $input
     *
     * @throws GeneralException
     *
     * @return mixed
     */
    public function changePassword($input)
    {
        $user = $this->find(access()->id());

        if (Hash::check($input['old_password'], $user->password)) {
            $user->password = Hash::make($input['password']);

            if ($user->save()) {
                $user->notify(new UserChangedPassword($input['password']));

                return true;
            }
        }

        throw new GeneralException(trans('exceptions.frontend.auth.password.change_mismatch'));
    }

    /**
     * Create a new token for the user.
     *
     * @return string
     */
    public function saveToken()
    {
        $token = hash_hmac('sha256', Str::random(40), 'hashKey');

        \DB::table('password_resets')->insert([
            'email' => request('email'),
            'token' => $token,
        ]);

        return $token;
    }

    /**
     * @param $token
     *
     * @return mixed
     */
    public function findByPasswordResetToken($token)
    {
        foreach (DB::table(config('auth.passwords.users.table'))->get() as $row) {
            if (password_verify($token, $row->token)) {
                return $this->findByEmail($row->email);
            }
        }

        return false;
    }
}
