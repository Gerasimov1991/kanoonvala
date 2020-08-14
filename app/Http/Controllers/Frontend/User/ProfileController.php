<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\User\UpdateProfileRequest;
use App\Repositories\Frontend\Access\User\UserRepository;
use Illuminate\Http\Request;
use App\Models\Appointment;

/**
 * Class ProfileController.
 */
class ProfileController extends Controller
{
    /**
     * @var UserRepository
     */
    protected $user;

    /**
     * ProfileController constructor.
     *
     * @param UserRepository $user
     */
    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    /**
     * @param UpdateProfileRequest $request
     *
     * @return mixed
     */
    public function update(UpdateProfileRequest $request)
    {
        if(isset($request['specialization'])){
            $request['specialization'] = implode(',',$request['specialization']);
        }  
        if(isset($request['court_in'])){
            $request['court_in'] = implode(',',$request['court_in']);
        }        
        $output = $this->user->updateProfile(access()->id(), $request->all());

        // E-mail address was updated, user has to reconfirm
        if (is_array($output) && $output['email_changed']) {
            access()->logout();

            return redirect()->route('frontend.auth.login')->withFlashInfo(trans('strings.frontend.user.email_changed_notice'));
        }

        return redirect()->route('frontend.user.account')->withFlashSuccess(trans('strings.frontend.user.profile_updated'));
    }

    public function appointment()
    {
        if(\Auth::user()->roles()->first()->name == 'Advocate'){
            $appointments = Appointment::select('*')
                            ->join('users', 'users.id', '=', 'appointments.client_id')
                            ->where('lawyer_id',auth()->id())->get();
        }else{
            $appointments = Appointment::select('appointments.slot_date', 'appointments.slot_time','users.first_name','users.last_name')
                            ->join('users', 'users.id', '=', 'appointments.lawyer_id')
                            ->where('client_id',auth()->id())->get();
        }
        // dd(auth()->id(), $appointments);
        
        return view('frontend.user.appointment', compact('appointments'));
    }

    public function saveappointment(Request $request)
    {
        $error = 'Error while processing request.';
        $isSuccess = false;
        $errorCode = 402;
        $todayDate = date('Y-m-d');
        if(\Auth::user()->roles()->first()->id !== 4){
            $Appointment = Appointment::create([
                'lawyer_id' => base64_decode($request->lawyer_id),
                'client_id' => auth()->id(),
                'slot_date' => $todayDate,
                'slot_time' => $request->selectedSlot,
            ]);
            if($Appointment->save()){
                $errorCode = 200;
                $isSuccess = true;
                $error = "Appointment booked successfuly.";
            }
        }else{
            $error = 'unauthorised';
        }
        
        return response()->json(["success"=>$isSuccess, "error" => $error],$errorCode);
    }
}
