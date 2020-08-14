<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Access\User\User;
use App\Models\Specialization;
use App\Models\Availability;
use App\Models\Appointment;
class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request->all());
        $lawyerId = base64_decode($request->lawyer_id);
        $slot = $request->selectedSlot;
        $lawyerDetails = User::select('users.*')->where('users.id',$lawyerId)->first();
        $consultationFee = $lawyerDetails->adv_fee;
        // dd($lawyerDetails);
        return view('frontend.booking.index',compact('lawyerDetails','slot','consultationFee'));
    }

}
