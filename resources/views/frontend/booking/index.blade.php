@extends('frontend.layouts.app')
<!-- Dynamic Tiltile  -->
@section('title', 'Book appointment with '.$lawyerDetails->first_name.' '.$lawyerDetails->last_name)
<!-- Page Content -->
@section('content')

<div class="section-empty">
  <div class="container content">
    <div class="row">
      <div class="col-md-9"> 
        <!-- Lawyer Box Open -->
        <div class="advocate_list_box">
         <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                <div id="time-error-msg" style="display:none"></div>
                    <div class="wizard">
                        <div class="wizard-inner">
                            <div class="connecting-line"></div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li>
                                    <a href="#!"><span class="round-tab">1</span> <i> Select Lawyer </i></a>
                                </li>
                                <li>
                                    <a href="#!"><span class="round-tab">2</span> <i> Select Slot </i></a>
                                </li>
                                <li>
                                    <a href="#!"><span class="round-tab">3</span> <i> Submit Details </i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    
          <div class="row">
            <div class="col-lg-4 form-group">
            <div class="boxed-inverse bg-color-2">
              <h4 class="text-normal">Lawyer Detail <span class="right font12"><a href="#!">Change</a></span></h4>
              <hr>
              <ul class="list-texts">
                <li><strong>{{$lawyerDetails->first_name.' '.$lawyerDetails->last_name}}</strong></li>
                <li>{{$lawyerDetails->experience}} Years Of Experience</li>
                <li>{{$lawyerDetails->address}}</li>
              </ul>
              <h4 class="text-normal mt35">Consult Detail <span class="right font12"><a href="#!">Change</a></span></h4>
              <hr>
              <ul class="list-texts">
                <li><strong>{{date('d F D')}}</strong></li>
                <li>{{$slot}}</li>
              </ul>
            </div>
            </div>
            <div class="col-lg-8 form-group">
              <h4>Add User Details</h4>
              <form id="book-appointment"  method="post" role="form">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control" name="customer_name" placeholder="Name" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="customer_email" placeholder="Email" required>
                </div>
                <div class="form-group">
                  <input type="number" class="form-control" name="contact_number" placeholder="Phone Number" required>
                </div>
                <div class="row form-group">
                  <div class="col-sm-4 col-xs-12 form-group">
                    <div class="advs-box advs-box-top-icon boxed-inverse" style="min-height:auto;margin-top: 10px !important;padding: 12px 5px !important;box-sizing: border-box;box-shadow: none;">
                      <label class="checkbox_radio">Telephonic<br> <span class="font12">30 minutes conversation on phone with the lawyer.</span>
                        <input type="radio" checked="checked" value="Telephone" name="meeting_type">
                        <span class="checkmark"></span> </label>
                    </div>
                  </div>
                  <div class="col-sm-4 col-xs-12 form-group">
                    <div class="advs-box advs-box-top-icon boxed-inverse" style="min-height:auto;margin-top: 10px !important;padding: 12px 5px !important;box-sizing: border-box;box-shadow: none;">
                      <label class="checkbox_radio">Telephonic<br> <span class="font12">60 minutes conversation on phone with the lawyer.</span>
                        <input type="radio" checked="checked" value="Telephone"  name="meeting_type">
                        <span class="checkmark"></span> </label>
                    </div>
                  </div>
                  <div class="col-sm-4 col-xs-12 form-group">
                    <div class="advs-box advs-box-top-icon boxed-inverse" style="min-height:auto;margin-top: 10px !important;padding: 12px 5px !important;box-sizing: border-box;box-shadow: none;">
                      <label class="checkbox_radio">Meeting<br> <span class="font12">90 minutes conversation on phone with the lawyer.</span>
                        <input type="radio" checked="checked" value="Meeting"  name="meeting_type">
                        <span class="checkmark"></span> </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-lg btn-block" type="submit"><i class="fa fa-check"></i> MAKE PAYMENT</button>
                </div>
                <input type="hidden" name="lawyer_id" value="{{ base64_encode($lawyerDetails->id)}}">
                <input type="hidden" name="selectedSlot" value="{{$slot}}">
                <input type="hidden" name="booking_amount" id="booking_amount" value="{{ $consultationFee + ($consultationFee * 0.18)}}">
              </form>
            </div>
          </div>
        </div>
        <!-- Lawyer Box End --> 
      </div>
      <div class="col-md-3">
        <div class="search_filter">
          <div class="custom_filter">
            <div class="region_filter filter_box mb20">
              <div class="inside_custom_search_heading">
                <h3 class="second_heading text-center">Confirm Your Booking</h3>
              <ul class="list-texts">
              <li> <h4 class="text-normal">{{$lawyerDetails->first_name.' '.$lawyerDetails->last_name}} <span class="right"><i class="fa fa-rupee"></i> {{$consultationFee}}</span></h4></li>
                <li><strong><i class="fa fa-info"></i> What Next</strong></li>
                <li>Keep related info ready at the time of consult. Lawyer to provide preliminary advice & suggest further course.</li>
                <li><h4 class="text-normal">GST <span class="right"><i class="fa fa-rupee"></i> {{ $consultationFee * 0.18 }}</span></h4></li>                
                <li><hr></li>
                <li><h4 class="text-normal">Payable Amount <span class="right"><i class="fa fa-rupee"></i> {{ $consultationFee + ($consultationFee * 0.18)}}</span></h4></li>
              </ul               
              ></div>
            </div>            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
@section('before-scripts')
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
@stop