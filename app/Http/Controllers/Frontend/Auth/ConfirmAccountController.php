<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Models\Access\User\User;
use App\Notifications\Frontend\Auth\UserNeedsConfirmation;
use App\Repositories\Frontend\Access\User\UserRepository;
use App\Mail\Welcome;
use Illuminate\Support\Facades\Mail;
use DB;
/**
 * Class ConfirmAccountController.
 */
class ConfirmAccountController extends Controller
{
    /**
     * @var UserRepository
     */
    protected $user;

    /**
     * ConfirmAccountController constructor.
     *
     * @param UserRepository $user
     */
    public function __construct(UserRepository $user)
    {
        $this->user = $user;
        $mail = "";
    }

    /**
     * @param $token
     *
     * @return mixed
     */
    public function confirm($token)
    {
        $user = $this->user->confirmAccount($token);            
        $data['username'] = $user['first_name']." ".$user['last_name']; 
        $this->mail = $user['email'];
        Mail::send('emails.welcome', $data, function($message) {
 
            $message->to($this->mail, 'Receiver Name')
 
                    ->subject('Account has been approved!');
        });  

        return redirect()->route('frontend.auth.login')->withFlashSuccess(trans('exceptions.frontend.auth.confirmation.success'));
    }

    /**
     * @param $user
     *
     * @return mixed
     */
    public function sendConfirmationEmail(User $user)
    {
        $user->notify(new UserNeedsConfirmation($user->confirmation_code));

        return redirect()->route('frontend.auth.login')->withFlashSuccess(trans('exceptions.frontend.auth.confirmation.resent'));
    }
}
