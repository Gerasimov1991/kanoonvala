<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Frontend\User\DashboardViewRequest;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(DashboardViewRequest $request)
    {
        if(Auth::user()->roles()->first()->name == 'Advocate'){
            return view('frontend.user.dashboard');
        }else{
            return view('frontend.user.customer-dashboard');
        }
    }
}
