<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Events\Frontend\Auth\UserRegistered;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Auth\RegisterRequest;
use App\Repositories\Frontend\Access\User\UserRepository;
use Exception;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;
use Twilio\Exceptions\TwilioException;
use Validator;

/**
 * Class RegisterController.
 */
class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * @var UserRepository
     */
    protected $user;

    /**
     * RegisterController constructor.
     *
     * @param UserRepository $user
     */
    public function __construct(UserRepository $user)
    {
        // Where to redirect users after registering
        $this->redirectTo = route('frontend.index');

        $this->user = $user;
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $routeName = \Route::current()->uri;

        // $this->sendOTP('8081433959');

        return view('frontend.auth.register', compact('routeName'));
    }

    public function showuserRegistrationForm()
    {
        $routeName = \Route::current()->uri;

        

        return view('frontend.auth.passwords.user-register', compact('routeName'));
    }

    /**
     * @param RegisterRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function register(RegisterRequest $request)
    {
    
            //    dd($request->all());
            //     die();
        /*if (config('access.users.confirm_email')) {
        $user = $this->user->create($request->all());
        event(new UserRegistered($user));

        return redirect($this->redirectPath())->withFlashSuccess(trans('exceptions.frontend.auth.confirmation.created_confirm'));
        } else {
        access()->login($this->user->create($request->all()));
        event(new UserRegistered(access()->user()));

        return redirect($this->redirectPath());
        }*/
        // var_dump($request->otp_sent);

        // if(strpos($request->email, '.com') == true && is_numeric ($request->mobile)){
        //     return ['success' => true,'status' =>"success"];

        // }

        //  if(strpos($request->email, '.com') == true){

        // }

        if ($request->mobile == "" && $request->email == "") {
            return response()->json([
                'success' => false,
                'sent' => false,
                'verified' => false,
                'created' => false,
                'errors' => ['Invalid' => ['Email or Mobile Number is required.']],
                'message' => "Email or Mobile Number is required.",
            ], 412);
        } 

        if (is_numeric($request->mobile) && $request->email == "") {

            if ($request->verification_code != "" && $request->isVerified == "") {
                try {
                    $response = $this->verifyOTP($request);
                    if ($response['success']) {
                        return response()->json([
                            'success' => true,
                            'sent' => true,
                            'verified' => true,
                            'created' => false,
                        ], 200);
                    } else {
                        return response()->json([
                            'success' => false,
                            'sent' => false,
                            'verified' => false,
                            'created' => false,
                            'errors' => ['otp' => ['something went wrong. Please try again.']],
                            'message' => "Enter valid OTP",
                        ], 412);
                    }
                    // dd($response);
                } catch (\Throwable $th) {
                    return response()->json([
                        'success' => false,
                        'sent' => false,
                        'created' => false,
                        'errors' => [$th->getMessage()],
                        'message' => "Enter valid OTP",
                    ], 412);
                }
            }
            
            if (config('access.users.confirm_otp') && $request->verification_code == "") {
                $response = $this->sendOTP($request->mobile);
                // return redirect()->back()->withErrors("OTP Sent");
                return response()->json([
                    'success' => true,
                    'sent' => true,
                    'verified' => false,
                    'created' => false,
                ], 200);
            }  else {
                
                access()->login($this->user->create($request->only('first_name', 'last_name', 'email', 'password', 'is_term_accept', 'mobile', 'isAdvocate')));
                event(new UserRegistered(access()->user()));
                return response()->json([
                    'success' => true,
                    'sent' => true,
                    'created' => true,
                    'redirect' => true,
                    'message' => 'You are logged in successfully.',
                ], 200);
            }
        }
        
        if (is_numeric($request->mobile) || $request->email) {
            return $this->CreateNewUser($request);
        }  
    }

    private function CreateNewUser($request)
    {
        $user = $this->user->create($request->only('first_name', 'last_name', 'email', 'password', 'is_term_accept', 'mobile', 'isAdvocate'));
        event(new UserRegistered($user));
        return response()->json([
            'success' => true,
            'sent' => true,
            'created' => true,
            'message' => config('access.users.requires_approval') ? trans('exceptions.frontend.auth.confirmation.created_pending') : trans('exceptions.frontend.auth.confirmation.created_confirm'),
        ], 200);
    }

    public function sendOTP($number)
    {
        // $sid    = env( 'TWILIO_SID' );
        // $token  = env( 'TWILIO_AUTH_TOKEN' );
        // // dd("token",$sid,$token);
        // $client = new Client( $sid, $token );

        $otp = Str::random(6);

        try {
            $endpoint = 'http://smsw.co.in/API/WebSMS/Http/v1.0a/index.php';
            $OTP = $this->generateNumericOTP(6);
            $params = [
                'username' => env( 'SMS_USERNAME' ),
                'password' => env( 'SMS_PASSWORD' ),
                'sender' => env( 'SMS_SENDERID' ),
                'to' => $number,

                'username' => 'kanoonwala',
                'password' => 'kanoon123',
                'sender' => 'KNVALA',
                'to' => $number,
                'message' => 'Your Kanoonvala verification code is: ' . $OTP,
                'format' => 'json',
                'reqid' => '1',
                'unique' => '0',
                'sendondate' => '',
            ];

            $cURLConnection = curl_init();

            curl_setopt($cURLConnection, CURLOPT_URL, $endpoint . '?' . $this->build_http_query($params));
            curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

            $phoneList = curl_exec($cURLConnection);
            curl_close($cURLConnection);
            session_start();

            Session::put('userOTP', $OTP);

            // $apiResponse - available data from the API request
            $jsonArrayResponse = json_decode($phoneList);
            return $jsonArrayResponse;
        } catch (TwilioException $e) {
            throw new Exception('Enter valid number.');
        }
    }
    public function generateNumericOTP($n)
    {

        // Take a generator string which consist of
        // all numeric digits
        $generator = "1357902468";

        // Iterate for n-times and pick a single character
        // from generator and append it to $result

        // Login for generating a random character from generator
        //     ---generate a random number
        //     ---take modulus of same with length of generator (say i)
        //     ---append the character at place (i) from generator to result

        $result = "";

        for ($i = 1; $i <= $n; $i++) {
            $result .= substr($generator, (rand() % (strlen($generator))), 1);
        }

        // Return result
        return $result;
    }
    public function build_http_query($query)
    {

        $query_array = array();

        foreach ($query as $key => $key_value) {

            $query_array[] = urlencode($key) . '=' . urlencode($key_value);

        }

        return implode('&', $query_array);

    }
    public function verifyOTP($request)
    {

        // dd($request->all());

        $validation = Validator::make($request->all(), [
            'verification_code' => 'required',
            'mobile' => 'required',
        ]);

        if ($validation->fails()) {
            return $this->throwValidation($validation->messages()->first());
        }

        // $sid    = env( 'TWILIO_SID' );
        // $token  = env( 'TWILIO_AUTH_TOKEN' );
        // $client = new Client( $sid, $token );
        try {
            // $verification_check = $client->verify->v2->services(env('TWILIO_VERIFY_SID'))
            //             ->verificationChecks
            //             ->create($request->verification_code, // code
            //             ["to" => $request->mobile ]
            //         );
            if (Session::get('userOTP') == $request->verification_code) {
                return ['success' => true, 'status' => "success"];
            } else {
                throw new Exception("Error Processing Request", 1);
            }

            // dd($verification_check->status);

        } catch (TwilioException $e) {
            return ['success' => false];
        }

    }

}
