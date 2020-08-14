<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Access\User\User;
use App\Models\Specialization;
use DB;
use App\Models\Availability;
use App\Models\Appointment;
class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $recordPerPage = 3;
    public function index($specialization = "")
    {
        // dd($specializaiont);
        
        date_default_timezone_set('Asia/Kolkata');
       
        $cityList = DB::table('cities')->select(DB::raw('CONCAT(cities.city,", ",states.name) as city_name'),'cities.id')->join('states','states.id','=','cities.state_id')->get();

        // $courtList = DB::table('court_lists')->select(DB::raw('CONCAT(cities.city,", ",court_lists.name) as court_name'),'court_lists.id')->join('cities','cities.id','=','court_lists.city_id')->get();

        $lawyerListQuery = User::select('users.*')->leftJoin('role_user', 'role_user.user_id', '=', 'users.id')
        ->leftJoin('roles', 'role_user.role_id', '=', 'roles.id')
        ->where('roles.id','4')
        ->where('users.id', '!=', auth()->id());
        $specializationList = Specialization::select('name','id','slug')->get();
        if($specialization){
            // dd($specializationList);
    
            $specializationBySlug = Specialization::where('slug', $specialization)->first()->toArray();
    
            $lawyerListQuery->whereRaw('FIND_IN_SET('.$specializationBySlug['id'].',users.specialization)');
        }
        $lawyerList = $lawyerListQuery->paginate($this->recordPerPage);
        $specializationKeyPair = [];
        foreach ($specializationList as $key => $value) {
            $specializationKeyPair[$value->id] = $value->name;
        }
        $courtList = DB::table('court_lists')->select(DB::raw('CONCAT(cities.city," ",court_lists.name) as court_name'),'court_lists.id')->join('cities','cities.id','=','court_lists.city_id')->get()->pluck('court_name','id');

        return view('frontend.search.index', compact('lawyerList','specializationList', 'specialization', 'cityList','courtList','specializationKeyPair','courtList'));
    }

    public function searchUser(Request $request){
         // dd($specializaiont);
        
         date_default_timezone_set('Asia/Kolkata');

        //  dd($request->all());
        if($request->ajax()){
         $specializationList = Specialization::select('name','id','slug')->get()->pluck('name','id');
        //  // dd($specializationList);
        
        $specialization = $request->specialization;
        $cities = $request->cities;
        $court = $request->court;
        $lawyers_data_text = $request->lawyers_data_text;

        //  $specializationBySlug = Specialization::where('slug', $specialization)->first()->toArray();
 
         $cityList = DB::table('cities')->select(DB::raw('CONCAT(cities.city,", ",states.name) as city_name'),'cities.id')->join('states','states.id','=','cities.state_id')->get();
  
         $lawyerListQuery = User::select('users.*')->leftJoin('role_user', 'role_user.user_id', '=', 'users.id')
         ->leftJoin('roles', 'role_user.role_id', '=', 'roles.id')
         ->where('roles.id','4')
         ->where('users.id', '!=', auth()->id());

         if($specialization){
             
            $lawyerListQuery->where(function($q) use($specialization) {
                foreach ($specialization as $key => $value) {
                    $q->orWhereRaw('FIND_IN_SET("'.$value.'" ,users.specialization)');
                }
            });
         }
         if($cities){
            $lawyerListQuery->whereRaw('FIND_IN_SET(users.city, "'.implode(',',$cities).'")');
         }
         if($lawyers_data_text){
            $lawyerListQuery->where(function($q) use($lawyers_data_text) {
                $q->where('users.first_name','LIKE','%'.$lawyers_data_text.'%');
                $q->orWhere('users.last_name','LIKE','%'.$lawyers_data_text.'%');
            });
         }

         if($court){
             
            $lawyerListQuery->where(function($q) use($court) {
                foreach ($court as $key => $value) {
                    $q->orWhereRaw('FIND_IN_SET("'.$value.'" ,users.court_in)');
                }
            });
         }

         $lawyerList = $lawyerListQuery->paginate($this->recordPerPage);

        //  dd($lawyerList);

         $specializationKeyPair = $specializationList;

         $courtList = DB::table('court_lists')->select(DB::raw('CONCAT(cities.city," ",court_lists.name) as court_name'),'court_lists.id')->join('cities','cities.id','=','court_lists.city_id')->get()->pluck('court_name','id');
 
         return view('frontend.search.filter', compact('lawyerList','specializationList', 'specialization', 'cityList','courtList','specializationKeyPair','courtList'));
        }
    }
    public function advocateProfile($slug){
        $userDetails = User::select('users.*','cities.city as city_name','states.name as state_name')
                    ->leftjoin('cities','cities.id','=','users.city')
                    ->leftjoin('states','states.id','=','users.state')
                    ->where('url_slug',$slug)
                    ->first();

        $availability = Availability::where('lawyer_id',$userDetails->id)->orderBy('avail_day','ASC')->get();
        // dd($availability);

        $specialization = DB::table('specializations')->get()->pluck('name','id');
        $courtList = DB::table('court_lists')->select(DB::raw('CONCAT(cities.city," ",court_lists.name) as court_name'),'court_lists.id')->join('cities','cities.id','=','court_lists.city_id')->get()->pluck('court_name','id');
        
        // dd($userDetails);
        setProfileViewCount($userDetails->id);
        return view('frontend.search.profile-detail', compact('userDetails', 'courtList','specialization','availability'));
    }

    public function bookMeeting(Request $request){
        $lawyerId = base64_decode($request->lawyer_id);
        $type = base64_decode($request->type);

        $lawyerDetails = User::where('id', $lawyerId)->first();

        $error = 'Error while processing request.';
        $isSuccess = false;
        $errorCode = 200;
        $todayDate = date('Y-m-d');
        $slot = date("H:i",strtotime('+1 hour'));
        if(\Auth::user()->roles()->first()->id !== 4){
            $Appointment = Appointment::create([
                'lawyer_id' => base64_decode($request->lawyer_id),
                'client_id' => auth()->id(),
                'slot_date' => $todayDate,
                'slot_time' => $slot,
            ]);
            if($Appointment->save()){

                $subjectTitle = $type == 'meeting'? 'Meeting':'Call';
                $name = \Auth::user()->first_name .' '.\Auth::user()->last_name;
                \Mail::send('emails.contact-us',
                array(
                'name' => $name,
                'email' => \Auth::user()->email,
                'user_message' => $request->get('message')
                ), function($message) use ($lawyerDetails, $name, $subjectTitle, $todayDate, $slot)
                {
                    $message->from(\Auth::user()->email, $name);
                    $message->to($lawyerDetails->email, $lawyerDetails->first_name . ' '. $lawyerDetails->last_name)
                    ->bcc('business.sunilgautam@gmail.com')
                    ->subject($subjectTitle.' Appointment on '.$todayDate.' @ '.$slot. ' | '.app_name());
                    });

                // send email to customer 

                \Mail::send('emails.thank-you',
                array(
                'name' => $request->get('name')
                ), function($message) use ($request)
                    {
                    $message->from('contact@kanoonvala.com', 'Admin');
                    $message->to(\Auth::user()->email)
                    ->bcc('business.sunilgautam@gmail.com')
                    ->subject('Thank you | '.app_name());
                    });
                    
                $errorCode = 200;
                $isSuccess = true;
                $error = "Thanks for the booking. Advocate will contact you soon.";
            }
        }else{
            $error = 'unauthorised';
        }
        
        return response()->json(["success"=>$isSuccess, "error" => $error],$errorCode);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
