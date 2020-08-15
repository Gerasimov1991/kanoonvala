<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Settings\Setting;
use App\Repositories\Frontend\Pages\PagesRepository;
use App\Models\Access\User\User;
use App\Models\Specialization;
use App\Models\Enquiry;
use Validator;
use Illuminate\Http\Request;
use App\Notifications\Frontend\Auth\ContactUsEmail;
use Mail;
use DB;
use App\Mail\Welcome;
// use Illuminate\Support\Facades\Mail;
/**
 * Class FrontendController.
 */
class FrontendController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $settingData = Setting::first();
        $google_analytics = @$settingData->google_analytics;
        $topLawyers = User::select('users.*','cities.city')->join('role_user', 'role_user.user_id', '=', 'users.id')
        ->join('roles', 'role_user.role_id', '=', 'roles.id')
        ->join('cities', 'cities.id', '=', 'users.city')
        ->where('roles.id','4')
        ->where('users.status','1')
        ->where('users.confirmed','1')
        ->inRandomOrder()
        ->limit(4)
        ->get();
        $specialization = Specialization::get()->pluck('name','id');
        // $mail = 'winczewskittom@gmail.com';
        // $username = "test";
                
        // Mail::to($mail)->send(new Welcome($username));

        // Mail::to($user)->send(new Welcome($username));
        $data['username'] = "This is Test Mail Tuts Make";
        $mail = 'winczewskittom@gmail.com';
        Mail::send('emails.welcome', $data, function($message,$mail) {
 
            $message->to($mail, 'Receiver Name')
 
                    ->subject('Tuts Make Mail');
        });  

        return view('frontend.index', compact('google_analytics', 'topLawyers','specialization'));
    }

    /**
     * show page by $page_slug.
     */
    public function show($slug, PagesRepository $pages)
    {
        $result = $pages->findBySlug($slug);

        return view('frontend.pages.index')
            ->withpage($result);
    }
    public function showPage( $main , $slug)
    {
        try 
		{

			return view( 'frontend.static-pages.'. $main . '.' . $slug );
		
		}

		catch( \Exception $e)
		{

			return view( 'frontend.404.index' );
 
        }
    }
    public function contactUs()
    {
        return view('frontend.contactus.index');
    } 
    public function contactUSPost(Request $request) 
    {
        // dd($request->all());
        // $this->validate($request, [ 'name' => 'required', 'email' => 'required|email', 'message' => 'required' ]);
        
        // ContactUS::create($request->all()); 

        \Mail::send('emails.contact-us',
        array(
           'name' => $request->get('name'),
           'email' => $request->get('email'),
           'user_message' => $request->get('message')
        ), function($message) use ($request)
           {
            $message->from($request->get('email'), $request->get('name'));
            $message->to('contact@kanoonvala.com', 'kanoonvala Support Team')
            ->bcc('business.sunilgautam@gmail.com')
            ->subject('Contact Us | '. $request->get('subject'). ' | '.app_name());
            });

        // send email to customer 

        \Mail::send('emails.thank-you',
        array(
           'name' => $request->get('name')
        ), function($message) use ($request)
            {
            $message->from('contact@kanoonvala.com', 'kanoonvala Support Team');
            $message->to($request->get('email'), $request->get('name'))
            ->bcc('business.sunilgautam@gmail.com')
            ->subject('Thank you | '.app_name());
            });
            
        return response()->json(['errors' => [],'status'=>200],200);
    }

    public function enquiryForm()
    {
        return view('frontend.contactus.index');
    } 
    public function enquiryFormSubmit(Request $request) 
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email:rfc,dns',
            'mobile' => 'required',
            'reason_for' => 'required',
            'enquiry_statement' => 'nullable',
        ]);
        if($validator->fails()) {
            return response()->json(['errors' => [$validator->errors()],'status'=>201]);
        }

        $insertArray[] = [
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'reason_for' => $request->reason_for,
            'enquiry_statement' => $request->enquiry_statement

        ];
        if(Enquiry::insert($insertArray)){
            \Mail::send('emails.enquiry',
            array(
               'name' => $request->get('name'),
               'email' => $request->get('email'),
               'mobile' => $request->get('mobile'),
               'reason_for' => $request->get('reason_for'),
               'user_message' => $request->get('enquiry_statement')
            ), function($message) use($request)
            {
                $message->from($request->get('email'), $request->get('name'));
                $message->to('contact@kanoonvala.com', 'kanoonvala Support Team')->bcc('business.sunilgautam@gmail.com')->subject('Enquiry | '. $request->reason_for. ' | '.app_name());
            });
            
            // Thank youo email to customer
            \Mail::send('emails.thank-you',
            array(
            'name' => $request->get('name')
            ), function($message) use ($request)
                {
                $message->from('contact@kanoonvala.com', 'kanoonvala Support Team');
                $message->to($request->get('email'), $request->get('name'))
                ->bcc('business.sunilgautam@gmail.com')
                ->subject('Thank you | '.app_name());
                });
        } 

        return response()->json(['errors' => [],'status'=>200],200);
    }
}
