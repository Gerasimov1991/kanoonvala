@extends('frontend.layouts.app')

@section('content')
<div class="header-base mt30">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="text-left">
            <h1>Customer Dashboard</h1>
          </div>
        </div>
        <div class="col-md-6">
          <ol class="breadcrumb b white">
            <li>Dashboard</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="section-empty inner_page dashboard customer_dashboard">
    <div class="container content">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 form-group">
          <div class="advs-box advs-box-top-icon boxed-inverse" data-anima="rotate-20" data-trigger="hover"> <i class="fa fa-address-book-o icon circle anima" aid="0.45877200761885617" style="transition-duration: 500ms; animation-duration: 500ms; transition-timing-function: ease; transition-delay: 0ms;"></i>
            <h3>Customer Profile </h3>
            {{ link_to_route('frontend.user.account', 'Click Here', [], ['class' => 'btn btn_info btn-lg btn-black']) }}
            {{-- <a href="customer-profile.html" class="btn btn_info btn-lg btn-black">Click Here</a> --}}
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 form-group">
          <div class="advs-box advs-box-top-icon boxed-inverse" data-anima="rotate-20" data-trigger="hover"> <i class="fa fa-file-text-o icon circle anima" aid="0.45877200761885617" style="transition-duration: 500ms; animation-duration: 500ms; transition-timing-function: ease; transition-delay: 0ms;"></i>
            <h3>Case/Assignment Progress</h3>
            <a href="#" class="btn btn_info btn-lg btn-black">Click Here</a> </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 form-group">
          <div class="advs-box advs-box-top-icon boxed-inverse" data-anima="rotate-20" data-trigger="hover"> <i class="fa fa-clock-o icon circle anima" aid="0.45877200761885617" style="transition-duration: 500ms; animation-duration: 500ms; transition-timing-function: ease; transition-delay: 0ms;"></i>
            <h3>Appointment Summary</h3>
            {{ link_to_route('frontend.user.appointment', 'Click Here', [], ['class' => 'btn btn_info btn-lg btn-black']) }}
            {{-- <a href="appointment-summary.html" class="btn btn_info btn-lg btn-black">Click Here</a> --}}
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 form-group">
          <div class="advs-box advs-box-top-icon boxed-inverse" data-anima="rotate-20" data-trigger="hover"> <i class="fa fa-money icon circle anima" aid="0.45877200761885617" style="transition-duration: 500ms; animation-duration: 500ms; transition-timing-function: ease; transition-delay: 0ms;"></i>
            <h3>Payment Invoice</h3>
            <a href="payment-invoice.html" class="btn btn-lg btn_info btn-black">Click Here</a> </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 form-group">
          <div class="advs-box advs-box-top-icon boxed-inverse">
            <h3> <a href="{{route('frontend.auth.logout')}}" class="btn btn-lg btn-black mt5"> <span class="font30"><i class="fa fa-power-off"></i> Logout</span></a> </h3>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection