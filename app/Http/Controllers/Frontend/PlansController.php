<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Access\User\User;
use App\Models\Plans;
use App\Services\Eazypay\Eazypay;
use App\Models\Subscription;

class PlansController extends Controller
{
    public function __construct(){
        
    }
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $isSubscribed = \Auth::user()->subscriptions()->count();
        
        $userRole = \Auth::user()->roles()->first()->name;
        if($userRole != 'Advocate'){
            return  redirect('account');
        }elseif($userRole == 'Advocate' && $isSubscribed > 0 ){
           return  redirect('account');
        }
        
        $planData = Plans::get()->where('is_front','1');
        return view('frontend.plans.index', compact('planData'));
    }

    public function makepayment(Request $request, Eazypay $paymentObject){

        $url = $paymentObject->getPaymentUrl('10.00');
        // dd($url, $request->all());

       return redirect()->to($url);
        // exit;
    }

    public function payment_success(Request $request){
        $planData = Plans::get()->where('id',$request->product_id)->first();
        $subscriptInsertArray = [
            'user_id'               => \Auth::user()->id,
            'plan_id'               => $request->product_id,
            'subscription_date'     => \carbon\Carbon::now(),
            'expiry_date'           => date('Y-m-d', strtotime(\carbon\Carbon::now(). ' + '. $planData->plan_duration)),
            'transaction_id'        => $request->razorpay_payment_id,
            'subscription_status'   => 'active',
        ];
        if(Subscription::create($subscriptInsertArray)){
            return response()->json(['success' => true, 'status' => 200],200);
        }else{
            return response()->json(['errors' => "Please try again.",'status'=>400],400);
        }

    }
    public function thankyou(){
        return view('frontend.thankyou.index');
    }
}
