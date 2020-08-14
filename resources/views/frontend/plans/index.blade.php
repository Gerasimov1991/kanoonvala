@extends('frontend.layouts.app')
<!-- Dynamic Tiltile  -->
@section('title', 'Plan List')
<!-- Page Content -->
@section('content')
<div class="header-base mt30">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="text-left">
          <h1>Plans</h1>
        </div>
      </div>
      <div class="col-md-6">
        <ol class="breadcrumb b white">
          <li><a href="javascript:void(0);">Dashboard</a></li>
          <li class="active">Plans</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="section-empty inner_page">
  <div class="container content">
    <div class="row">
      <div id="time-error-msg" style="display:none"></div>
      @foreach ($planData as $plan)
      <div class="col-lg-4 col-sm-12 form-group">
        <ul class="price">
          <li class="header">{{$plan->plan_title}}</li>
          <li class="grey">Rs. {{$plan->plan_price}} / {{$plan->plan_duration}}</li>
          <li class="">
          <input type="hidden" name="p" value="{{ base64_encode($plan->id)}}">
          <button class="btn buy_now" data-amount="{{$plan->plan_price}}"  data-id="{{$plan->id}}" type="submit">Book Now</button>
          </li>
        </ul>
      </div>
      @endforeach
    </div>
  </div>
</div>
@stop
@section('before-scripts')
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
@stop