@extends('frontend.layouts.app')

@section('content')
<div class="header-base mt30">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="text-left">
            <h1>Lawyer Dashboard</h1>
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
  <div class="section-empty inner_page dashboard">
    <div class="container content">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 form-group">
          <div class="advs-box advs-box-top-icon boxed-inverse" data-anima="rotate-20" data-trigger="hover"> <i class="fa fa-address-card-o icon circle anima" aid="0.45877200761885617" style="transition-duration: 500ms; animation-duration: 500ms; transition-timing-function: ease; transition-delay: 0ms;"></i>
            <h3>Update Profile</h3>
            {{ link_to_route('frontend.user.account', 'Click Here', [], ['class' => 'btn btn-lg btn-black']) }}
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 form-group">
          <div class="advs-box advs-box-top-icon boxed-inverse" data-anima="rotate-20" data-trigger="hover"> <i class="fa fa-cube icon circle anima" aid="0.45877200761885617" style="transition-duration: 500ms; animation-duration: 500ms; transition-timing-function: ease; transition-delay: 0ms;"></i>
            <h3>Packages Subscription</h3>
            <a href="{{route('frontend.plans')}}" class="btn btn-lg btn-black">Click Here</a> </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 form-group">
          <div class="advs-box advs-box-top-icon boxed-inverse" data-anima="rotate-20" data-trigger="hover"> <i class="fa fa-calendar icon circle anima" aid="0.45877200761885617" style="transition-duration: 500ms; animation-duration: 500ms; transition-timing-function: ease; transition-delay: 0ms;"></i>
            <h3>Customer Appointments</h3>
            {{-- {{ link_to_route('frontend.user.appointment', 'Click Here', [], ['class' => 'btn btn_info btn-lg btn-black']) }} --}}
            <a href="{{route('frontend.user.appointment')}}" class="btn btn-lg btn-black">Click Here</a> </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 form-group">
          <div class="advs-box advs-box-top-icon boxed-inverse" data-anima="rotate-20" data-trigger="hover"> <i class="fa fa-money icon circle anima" aid="0.45877200761885617" style="transition-duration: 500ms; animation-duration: 500ms; transition-timing-function: ease; transition-delay: 0ms;"></i>
            <h3>Monthly Invoice</h3>
            <a href="monthly-invoice.html" class="btn btn-lg btn-black">Click Here</a> </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 form-group">
          <div class="advs-box advs-box-top-icon boxed-inverse" data-anima="rotate-20" data-trigger="hover"> <i class="fa fa-file-text icon circle anima" aid="0.45877200761885617" style="transition-duration: 500ms; animation-duration: 500ms; transition-timing-function: ease; transition-delay: 0ms;"></i>
            <h3>Privacy Policy/Agreements </h3>
            <a href="privacy-policy.html" class="btn btn-lg btn-black">Click Here</a> </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 form-group">
          <div class="advs-box advs-box-top-icon boxed-inverse" data-anima="rotate-20" data-trigger="hover"> <i class="fa fa-pie-chart icon circle anima" aid="0.45877200761885617" style="transition-duration: 500ms; animation-duration: 500ms; transition-timing-function: ease; transition-delay: 0ms;"></i>
            <h3>How it works </h3>
            <a href="how-it-work.html" class="btn btn-lg btn-black">Click Here</a> </div>
        </div>
      </div>
    </div>
  </div>
@endsection