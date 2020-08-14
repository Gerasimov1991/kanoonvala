<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Availability;
use App\Models\Appointment;
use Validator;
use App\Models\Access\User\User;
class AvailabilityController extends Controller
{
    //
    public function saveAvailability(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(),[
            'from_time' => 'required|date_format:H:i',
            'to_time' => 'required|date_format:H:i|after:from_time',
            'lunch_from_time' => 'nullable',
            'lunch_to_time' => 'nullable|after:lunch_from_time',
        ],[
            'from_time.required'    => 'Working Time From is required.',
            'from_time.date_format' => 'Invalid time format.',
            'to_time.required'    => 'Working Time To is required.',
            'to_time.date_format' => 'Invalid time format.',
            'to_time.after'         => 'Working Time From must precede Working Time To',
        ]);
        if($validator->fails()) {
            return response()->json(['errors' => [$validator->errors()],'status'=>201]);
        }

        $insertArray = [];
        if(count($request->week_day) > 0){
            foreach ($request->week_day as $day){
                $existingAvailability = Availability::where('lawyer_id',\Auth::user()->id)->where('avail_day',$day);
                if($existingAvailability)
                    $existingAvailability->delete();
                    
                $insertArray[] = [
                    'avail_day' => $day,
                    'lawyer_id' => \Auth::user()->id,
                    'time_from' => $request->from_time,
                    'time_to' => $request->to_time,
                    'break_from' => $request->lunch_from_time,
                    'break_to' => $request->lunch_to_time
    
                ];
            }
            try {
                Availability::insert($insertArray);
                return response()->json(['success' => true, 'status' => 200],200);
                //code...
            } catch (\Exception $exception) {
                //throw $th;
                // dd($exception);
                return response()->json(['errors' => ['general-error'=>'Please try after sometime.'],'status'=>400],400);
            }
        }
        return response()->json(['errors' => [],'status'=> 200]);
    }
    
    public function getAvailabilitySlots(Request $request){
        $lawyerId = base64_decode($request->lawyer_id);
        if(!$lawyerId){
            return false;
        }
        $currentDayNum = date('w');
        
        $availability = Availability::where('lawyer_id',$lawyerId)->where('avail_day', $currentDayNum)->first();

        $bookedAppointment = Appointment::where('lawyer_id',$lawyerId)->where('slot_date', date('Y-m-d'))->get()->pluck('slot_time')->toArray();
        // dd($lawyerId,$availability,$currentDayNum);

        $starttime = $availability->time_from;  // your start time
        $endtime = $availability->time_to;  // End time
        $duration = '30';  // split by 30 mins
        
        $array_of_time = array ();
        $start_time    = strtotime ($starttime); //change to strtotime
        $end_time      = strtotime ($endtime); //change to strtotime
        
        $add_mins  = $duration * 60;
        
        while ($start_time <= $end_time) // loop between time
        {
            $availClass = 'available';
            if(in_array(date("H:i", $start_time), $bookedAppointment)){
                $availClass = 'disabled';
            }
            $array_of_time[] = [
                "time"              => date ("H:i", $start_time),
                "class"             => $availClass
            ];
            $start_time += $add_mins; // to check endtie=me
        }
        return response()->json($array_of_time);
    }

    public function getAvailabilitySlotsByPrahar(Request $request){
        $lawyerId = base64_decode($request->lawyer_id);
        if(!$lawyerId){
            return false;
        }
        $currentDayNum = $request->num_day ? $request->num_day : date('w');
        
        $availability = Availability::where('lawyer_id',$lawyerId)->where('avail_day', $currentDayNum)->first();

        $bookedAppointment = Appointment::where('lawyer_id',$lawyerId)->where('slot_date', date('Y-m-d'))->get()->pluck('slot_time')->toArray();
        // dd($lawyerId,$availability,$currentDayNum);

        $starttime = $availability->time_from;  // your start time
        $endtime = $availability->time_to;  // End time
        $duration = '30';  // split by 30 mins
        
        $array_of_time = array ();
        $start_time    = strtotime ($starttime); //change to strtotime
        $end_time      = strtotime ($endtime); //change to strtotime
        
        $add_mins  = $duration * 60;
        
        while ($start_time <= $end_time) // loop between time
        {
            $availClass = 'available';
            if(in_array(date("H:i A", $start_time), $bookedAppointment)){
                $availClass = 'disabled';
            }

            if(date("H:i", $start_time) < date('H:i')){
                $availClass = 'disabled';
            }

            $dayTime = "Morning";
            if(date ("H", $start_time) >= 12 && date ("H", $start_time) < 16){
                $dayTime = "Afternoon";
            }
            if(date ("H", $start_time) >= 16){
                $dayTime = "Evening";
            }
            $array_of_time[$dayTime][] = [  
                "time"              => date ("H:i A", $start_time),
                "class"             => $availClass
            ];
            $start_time += $add_mins; // to check endtie=me
        }
        return response()->json($array_of_time);
    }
    public function saveappointment(Request $request)
    {
        $error = 'Error while processing request.';
        $isSuccess = false;
        $errorCode = 402;
        $todayDate = date('Y-m-d');
        
        // dd($request->all());

        if(1){
            $lawyerId = base64_decode($request->lawyer_id);
            $lawyerDetails = User::where('id', $lawyerId)->first();
            $Appointment = Appointment::create([
                'lawyer_id' => base64_decode($request->lawyer_id),
                'client_id' => auth()->id(),
                'slot_date' => $todayDate,
                'slot_time' => $request->selectedSlot,
                'name' => $request->customer_name,
                'email' => $request->customer_email,
                'contact_number' => $request->contact_number,
                'meeting_type' => $request->meeting_type,
                'meeting_purpose' => $request->meeting_purpose,
            ]);
            if($Appointment->save()){
                try {
                    \Mail::send('emails.appointment',
                array(
                   'name' => $request->get('customer_name'),
                   'email' => $request->get('customer_email'),
                   'mobile' => $request->get('contact_number'),
                   'reason_for' => $request->get('meeting_purpose'),
                   'user_message' => $request->get('meeting_purpose')
                ), function($message) use($request, $lawyerDetails)
                {
                    $message->from($request->get('customer_email'), $request->get('customer_name'));
                    $message->to($lawyerDetails->email, $lawyerDetails->first_name . ' '. $lawyerDetails->last_name)
                    ->cc('contact@kanoonvala.com', 'Admin')
                    ->bcc('business.sunilgautam@gmail.com')->subject($request->meeting_type. ' appointment  | '. $request->meeting_purpose. ' | '.app_name());
                });
                
                // Thank youo email to customer
                \Mail::send('emails.appointment-customer',
                array(
                    'name' => $request->get('customer_name'),
                    'email' => $request->get('customer_email'),
                    'mobile' => $request->get('contact_number'),
                   'lawyer' => $lawyerDetails->first_name . ' '. $lawyerDetails->last_name,
                   'slot' => $request->selectedSlot
                ), function($message) use ($request, $lawyerDetails)
                    {
                    $message->from('contact@kanoonvala.com', 'Admin');
                    $message->to($request->get('customer_email'), $request->get('customer_name'))
                    ->bcc('business.sunilgautam@gmail.com')
                    ->subject('Thank you for booking appointment with '. $lawyerDetails->first_name . ' '. $lawyerDetails->last_name . ' | '.app_name());
                    });
                } catch (\Throwable $th) {
                    //throw $th;
                }
                $errorCode = 200;
                $isSuccess = true;
                $error = "Appointment booked successfuly.";
            }
        }else{
            $error = 'unauthorised';
        }
        
        return response()->json(["success"=>$isSuccess, "error" => $error],$errorCode);
    }


    public function getUserDetails($id){
        $userId = base64_decode($id);
        $lawyerDetails = User::select('adv_fee')->where('id', $userId)->first();

        return response()->json(['data' => $lawyerDetails,  'errors' => [],'status'=>200],200);
    }
}
