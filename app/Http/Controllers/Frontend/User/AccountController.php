<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\Models\Availability;
/**
 * Class AccountController.
 */
class AccountController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $states = DB::table('states')->get()->pluck('name','id');
        $cities = DB::table('cities')->get()->pluck('city','id');
        $specialization = DB::table('specializations')->get()->pluck('name','id');
        $courtList = DB::table('court_lists')->select(DB::raw('CONCAT(cities.city,", ",court_lists.name) as court_name'),'court_lists.id')->join('cities','cities.id','=','court_lists.city_id')->get()->pluck('court_name','id');
    return view('frontend.user.account',compact('states','cities','specialization','courtList'));
    }
    public function showEditForm()
    {
        $states = DB::table('states')->get()->pluck('name','id');
        $cities = DB::table('cities')->get()->pluck('city','id');
        $specialization = DB::table('specializations')->get()->pluck('name','id');
        $courtList = DB::table('court_lists')->select(DB::raw('CONCAT(cities.city,", ",court_lists.name) as court_name'),'court_lists.id')->join('cities','cities.id','=','court_lists.city_id')->get()->pluck('court_name','id');
        $availability = Availability::where('lawyer_id',Auth::user()->id)->get();
        // dd($availability);
        return view('frontend.user.edit-account',compact('states','cities','specialization','courtList','availability'));
    }
    
}
