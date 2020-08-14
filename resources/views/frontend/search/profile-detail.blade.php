@extends('frontend.layouts.app')
<!-- Dynamic Title  -->
@section('title', 'Top Advocate '.$userDetails->first_name. ' '. $userDetails->last_name.' in '.$userDetails->city_name.'' )
@section('meta_description', ''.$userDetails->about_me.'')
@section('meta_keywords','Top advocate in '.$userDetails->city_name.' high court, top advocate in '.$userDetails->city_name.', best lawyer in '.$userDetails->city_name.', free legal advice in '.$userDetails->city_name.'')
@section('meta')
<meta property="og:url" content="{{ url('advocate-profile/'.$userDetails->url_slug) }}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Advocate {{ $userDetails->first_name. ' '. $userDetails->last_name }}" />
<meta property="og:description" content="{{ $userDetails->about_me }}" />
<meta property="og:image"
  content="{{ $userDetails->profile_image? URL::asset('uploads/profile/'.$userDetails->profile_image) :'/assets/images/client1.jpg' }}" />
@endsection

@section('content')
<div class="section-empty no-paddings">
  <div class="section-slider row-8 white">
    <div class="flexslider advanced-slider slider visible-dir-nav" data-options="animation:fade">
      <ul class="slides">
        <li data-slider-anima="fade-left" data-time="1000">
          <div class="section-slide">
            <div class="bg-cover" style="background-image: url(&quot;https://kanoonvala.com/assets/images/slide1.jpg&quot;);"></div>
            <div class="container">
              <div class="container-middle">
                <div class="container-inner text-center">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                      <div class="col-md-12 anima">
                        <h1 class="text-white text-l heading_one">Advocate {{$userDetails->first_name. ' '. $userDetails->last_name }}</h1>
                        <p>{{$userDetails->about_me}}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="section-empty">
  <div class="container content">
    <div class="row">
      <div class="col-md-8">        
        <!-- Lawyer Box Open -->
        <div class="advocate_list_box">
          <div class="row">
            <div class="col-md-4 counters">
              <p class="mb20"><img
                  src="{{ $userDetails->profile_image? URL::asset('uploads/profile/'.$userDetails->profile_image) :'/assets/images/client1.jpg' }}"
                  title="" alt="" class="lawyers_thum detail_img"></p>
            </div>
            <div class="col-md-8">
              <div class="row">
                <div class="col-md-12 form-group"><a href="javascript:void(0);" class="btn btn-block btn-black text-left">Advocate {{$userDetails->first_name. ' '. $userDetails->last_name }}</a></div>
              </div>
              <div> @if(!empty($userDetails->specialization))
          @foreach (explode(',',$userDetails->specialization) as $item) <a href="javascript:void(0)" class="btn btn-sm btn-danger"
              style="margin-bottom: 5px;">{{ @$specialization[$item] }}</a> @endforeach
          @endif </div>
              <div class="row">
                <div class="col-sm-6">
                  <span class="text-danger text-bold">Experience:</span> {{$userDetails->experience}} Yr
                </div>
                <div class="col-sm-6">
                  <span class="text-danger text-bold">Bar Council No:</span> {{$userDetails->bar_council_no}}
                </div>
                <div class="col-sm-6">
                  <span class="text-danger text-bold">City:</span> {{$userDetails->city_name}}
                </div>
                <div class="col-sm-6">
                  <span class="text-danger text-bold">AOR No:</span> {{$userDetails->aor_number}}
                </div>
                <div class="col-sm-6">
                  <span class="text-danger text-bold">Locality:</span> {{$userDetails->locality}}
                </div>
				 <div class="col-sm-6">
                  <span class="text-danger text-bold">Consultation:</span><i class="fa fa-inr"></i>  {{$userDetails->adv_fee}}
                </div>
                <div class="col-sm-12">
                  <p><i class="fa fa-map-marker text-danger text-bold"></i> {{$userDetails->address}}</p>
                </div>
                <div class="col-sm-12">
                  <p><i class="fa fa-university text-danger text-bold"></i></span> @php
                    if($userDetails->court_in){
                    $court_inArr = explode(',',$userDetails->court_in);
                    $courts = [];
                    foreach ($court_inArr as $key => $value) {
                    $courts[] = $courtList[$value];
                    }
                    echo implode(', ',$courts);
                    }else{
                    echo 'Not mentioned';
                    }
                    @endphp</p>
                </div>
              </div>              
            </div>
          </div>

          <hr>
          <div class="row">
                <div class="col-xs-6 text-bold">Cases: <span class="count text-success" data-to="850" data-speed="850">850</span></div>
                <div class="col-xs-6 text-bold">Ratings: <span class="count text-success" data-to="500" data-speed="500">500</span></div>
           </div>
          <div class="row">
                <div class="col-xs-12">
                <table class="table table-striped">
                  <tbody>
                    <tr>
                      <td class="days_btn">
                        <h4><i class="fa fa-calendar"></i> <span class="text-danger text-bold">Availability:</span> 
                          Monday to Sunday</h4>
                          @foreach ($availability as $item)
                            <a href="javascript:void(0);"  class="btn btn_gray">{{date('l', strtotime($item->avail_day." Days"))}}<br> {{date('d M', strtotime($item->avail_day." Days"))}}</a>
                          @endforeach

                          <!-- <a href="javascript:void(0);" class="btn btn_gray">Tue<br> 21 July</a>
                          <a href="javascript:void(0);" class="btn btn_gray">Wed<br> 22 July</a>
                          <a href="javascript:void(0);" class="btn btn_gray">Thu<br> 23 July</a>
                          <a href="javascript:void(0);" class="btn btn_gray">Fri<br> 24 July</a>
                          <a href="javascript:void(0);" class="btn btn_gray">Sat<br> 25 July</a>
                          <a href="javascript:void(0);" class="btn btn_gray">Sun<br> 26 July</a> -->
                      </td>
                    </tr>
                  </tbody>
                </table> 
                <form action="{{ route('frontend.booking')}}" method="post" id="appointment-form">
                  @csrf
                  <table class="table table-striped slot-list">
                    <tbody>
                      <tr>
                        <td class="">
                            <a href="javascript:void(0);" class="btn btn-success daysAvail" data-daynum="{{date('w')}}">{{date('d M Y')}}</a>
                            <a href="javascript:void(0);" class="btn btn_gray daysAvail" data-daynum="{{date('w', strtotime("+1 Days"))}}">{{date('d M Y', strtotime("+1 Days"))}}</a>
                            <a href="javascript:void(0);" class="btn btn_gray daysAvail" data-daynum="{{date('w', strtotime("+2 Days"))}}">{{date('d M Y', strtotime("+2 Days"))}}</a>
                            <a href="javascript:void(0);" class="btn btn_gray daysAvail" data-daynum="{{date('w', strtotime("+3 Days"))}}">{{date('d M Y', strtotime("+3 Days"))}}</a>
                            <a href="javascript:void(0);" class="btn btn_gray daysAvail" data-daynum="{{date('w', strtotime("+4 Days"))}}">{{date('d M Y', strtotime("+4 Days"))}}</a>
                            <a href="javascript:void(0);" class="btn btn_gray daysAvail" data-daynum="{{date('w', strtotime("+5 Days"))}}">{{date('d M Y', strtotime("+5 Days"))}}</a>
                            <a href="javascript:void(0);" class="btn btn_gray daysAvail" data-daynum="{{date('w', strtotime("+6 Days"))}}">{{date('d M Y', strtotime("+6 Days"))}}</a>
                        </td>
                      </tr>
                      <tr>
                        <th class="days_btn" id="Morning">Getting availability...</th>
                      </tr>
                      <tr>
                        <th class="days_btn" id="Afternoon">Getting availability...</th>
                      </tr>
                      <tr>
                        <th class="days_btn" id="Evening">Getting availability...</th>
                      </tr>
                      {{-- <tr>
                        <td class="days_btn">
                          <h4><i class="fa fa-sun-o"></i> Afternoon</h4>
                            <a href="javascript:void(0);" class="btn btn_gray slots available">12:00 PM</a>
                            <a href="javascript:void(0);" class="btn btn_gray slots available">01:00 PM</a>
                            <a href="javascript:void(0);" class="btn btn_gray slots available">02:00 PM</a>
                            <a href="javascript:void(0);" class="btn btn_gray slots available">03:00 PM</a>
                        </td>
                      </tr>
                      <tr>
                        <th class="days_btn"> 
                          <h4><i class="fa fa-moon-o"></i> Evening</h4>                 
                            <a href="javascript:void(0);" class="btn btn_gray slots available">04:00 PM</a>
                            <a href="javascript:void(0);" class="btn btn_gray slots available">05:00 PM</a>
                            <a href="javascript:void(0);" class="btn btn_gray slots available">06:00 PM</a>
                            <a href="javascript:void(0);" class="btn btn_gray slots available">07:00 PM</a>
                            <a href="javascript:void(0);" class="btn btn_gray slots available">08:00 PM</a>
                            <a href="javascript:void(0);" class="btn btn_gray slots available">09:00 PM</a>
                        </th>
                      </tr> --}}
                    </tbody>
                  </table>
                  <input type="hidden" name="lawyer_id" value="{{base64_encode($userDetails->id)}}">
                  <input type="hidden" name="selectedSlot">
                  </form>
              </div>
            </div>

          <hr>
          <div class="row">
            <!-- <div class="col-md-4 form-group"> @if(_getTodaysAvailability($userDetails->id) && Auth::check()) <a data-id="{{base64_encode($userDetails->id)}}"
                    data-name="{{$userDetails->first_name.' '.$userDetails->last_name }}"
                    class="btn btn-block btn-warning book-l-appointment">Book Consultation <i
                      class="fa fa-calendar"></i> </a> @else <a class="btn btn-block btn-warning login-popup" href="javascript:void(0)">Book Consultation <i
                      class="fa fa-calendar"></i> </a> @endif </div>
            <div class="col-md-4 form-group"><a href="javascript:void(0)" data-id="{{base64_encode($userDetails->id)}}"  data-type="meeting" class="btn btn-block btn-warning  @if(!Auth::check()) login-popup @else meeting-popup @endif">Meeting <i class="fa fa-handshake-o"></i></a> </div>
            <div class="col-md-4 form-group"><a href="javascript:void(0)" data-id="{{base64_encode($userDetails->id)}}" data-type="call" class="btn btn-block btn-success @if(!Auth::check()) login-popup @else meeting-popup @endif">Call for advice <i class="fa fa-phone"></i></a></div>
          </div> -->

            <div class="col-md-4 form-group"><a data-id="{{base64_encode($userDetails->id)}}" data-name="{{$userDetails->first_name.' '.$userDetails->last_name }}" class="btn btn-block btn-danger book-l-appointment">Book Consultation <i class="fa fa-calendar"></i> </a></div>
            <div class="col-md-4 form-group"><a href="javascript:void(0)" data-id="{{base64_encode($userDetails->id)}}"  data-type="meeting" class="btn btn-block btn-success meeting-form">Contact Now  <i class="fa fa-handshake-o"></i></a> </div>
            <div class="col-md-4 form-group"><a href="javascript:void(0)" data-id="{{base64_encode($userDetails->id)}}" data-type="call" class="btn btn-block btn-success meeting-form">Call For Free Advice <i class="fa fa-phone"></i></a></div>
          </div>
          
          <div id="meeting-form" style="display:none;">
            @include('frontend.enquiry.index')
          </div>
          <div id="booking-form" style="display:none;">
            <form action="" method="post" id="book-appointment">
              <div class="row" style="display:none;">
                <div class="col-md-12">
                  <div id="time-error-msg"></div>
                <div class="form-group">
                    <div class="items-collection">

                        <div class="items col-xs-6 col-sm-4 col-md-4 col-lg-4">
                            <div class="info-block block-info clearfix">
                                <div data-toggle="buttons" class="btn-group bizmoduleselect">
                                    <label class="btn btn-default">
                                        <div class="itemcontent">
                                            <input type="radio" name="meeting_type" required autocomplete="off" value="Meeting" checked>
                                            <span class="fa fa-handshake-o fa-2x"></span>
                                            <h5>Physical Meeting</h5>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="items col-xs-6 col-sm-4 col-md-4 col-lg-4">
                            <div class="info-block block-info clearfix">
                                <div data-toggle="buttons" class="btn-group itemcontent">
                                    <label class="btn btn-default">
                                        <div class="itemcontent">
                                            <input type="radio" name="meeting_type" required autocomplete="off" value="Video">
                                            <span class="fa fa-video-camera fa-2x"></span>
                                            <h5>Video Confrencing</h5>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="items col-xs-6 col-sm-4 col-md-4 col-lg-4">
                            <div class="info-block block-info clearfix">
                                <div data-toggle="buttons" class="btn-group itemcontent">
                                    <label class="btn btn-default">
                                        <div class="itemcontent">
                                            <input type="radio" name="meeting_type"  required autocomplete="off" value="Call">
                                            <span class="fa fa-phone-square fa-2x"></span>
                                            <h5>Call for advice</h5>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" class="form-control" placeholder="Enter name" name="customer_name"  required id="name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <label for="email">Email address:</label>
                      <input type="email" class="form-control" placeholder="Enter email" name="customer_email"  required id="email">
                    </div>
                </div>
                
              </div>
              <div class="row">
                  <div class="col-md-6">
                        <div class="form-group">
                          <label for="contact_number">Contact Number:</label>
                          <input type="text" class="form-control" placeholder="Enter contact number" name="contact_number"  required id="contact_number">
                        </div>
                    </div>
                  <div class="col-md-6">
                      <div class="form-group">
                        <label for="name">Legal Area:</label>
                        <select name="meeting_purpose"  required class="form-control" id="meeting_purpose">
                          <option value="">-Select-</option>
                          @foreach($specialization as $key => $value)
                            <option value="{{$value}}">{{$value}}</option>
                          @endforeach
                        </select>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                      <label for="name">Select Slot:</label>
                      <div id="slot-list"></div>
                      <input type="hidden" name="lawyer_id">
                      <input type="hidden" data-validate="true" required name="selectedSlot">
                      </div>
                  </div>
              </div>
              <div class="row">
                    <div class="col-md-3 pull-right">
                        <div class="form-group">
                          <button type="submit" class="btn btn-block btn-warning">Submit</button>
                        </div>
                    </div>
              </div>
            </form>
          </div>
        </div>
        
        <!-- Lawyer Box End --> 
      </div>
      <div class="col-md-4">
        <div class="search_filter">
          <div class="custom_filter">
            <div class="region_filter filter_box mb20">
              <div class="inside_custom_search_heading">
                <h3 class="second_heading text-center">Phone Consultation</h3>
                <p class=" text-center">30 Minute Consultation</p>
                <p class="secondary_heading text-center">
                <h2 class="text-center"><span class="text-success"><i class="fa fa-inr"></i> 500 </span></h2>
                <p class="text-center mb20"><a href="javascript:void(0);" class="btn btn-success">BOOK</a></p>
              </div>
            </div>
            <div class="region_filter filter_box">
              <div class="inside_custom_search_heading">
                <h3 class="second_heading text-center">Video Call Consultation</h3>
                <p class=" text-center">1 Hour Consultation</p>
                <p class="secondary_heading text-center">
                <h2 class="text-center"><span class="text-success"><i class="fa fa-inr"></i> 900 </span></h2>
                <p class="text-center"><a href="javascript:void(0);" class="btn btn-success">BOOK</a></p>
              </div>
            </div>
			<div class="region_filter filter_box">
              <div class="inside_custom_search_heading">
                <h3 class="second_heading text-center">Meeting</h3>
                <p class=" text-center">one and one consultation</p>
                <p class="secondary_heading text-center">
                <h2 class="text-center"><span class="text-success"><i class="fa fa-inr"></i>  {{$userDetails->adv_fee}}</span></h2>
                <p class="text-center"><a href="javascript:void(0);" class="btn btn-success">BOOK</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- @include('frontend/modalpopups/appointment')
@include('frontend/modalpopups/login-modal')
--}}
@stop
@section('page-scripts')
<script type="text/javascript">
  var getAvailaibility = function(){
    
    $.ajax({
            type: "GET",
            url: "/get-availability-slots",
            data: { "lawyer_id": $('[name="lawyer_id"]').val(), 'num_day': $('.daysAvail.btn-success').data('daynum') },
            dataType: "JSON",
            success: function(response) {
              $('#Morning').html('<h4><i class="fa fa-coffee"></i> Morning</h4> No slot available');
              $('#Afternoon').html('<h4><i class="fa fa-coffee"></i> Afternoon</h4> No slot available');
              $('#Evening').html('<h4><i class="fa fa-coffee"></i> Evening</h4> No slot available');
              $.each(response, function(inx, elem) {
                var slotHtml = '';
                  slotHtml +='<h4><i class="fa fa-coffee"></i> '+inx+'</h4>' 
                  $.each(elem, function(inx, ele) {
                      slotHtml += '<a href="javascript:void(0);" class="btn btn_gray slots ' + ele.class + '">' + ele.time + '</a>'
                    })
                    slotHtml += ''
                    $('#'+inx).html(slotHtml);
                })
            }
        })
  }
  $(document).ready(function(){
    getAvailaibility();
  })

  $(document).on("click", '.daysAvail', function(){
    $('.daysAvail').removeClass('btn-success')
    $(this).addClass('btn-success');
    getAvailaibility();
  })
  
</script>
@endsection

@section('after-styles')
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
<link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
<style>
  .days_btn .disabled {
    text-decoration: line-through;
    color: #000;
}
  /* About Me 
  ---------------------*/
  .about-text h3 {
    font-size: 45px;
    font-weight: 700;
    margin: 0 0 6px;
  }

  @media (max-width: 767px) {
    .about-text h3 {
      font-size: 35px;
    }
  }

  .about-text h6 {
    font-weight: 600;
    margin-bottom: 15px;
  }

  @media (max-width: 767px) {
    .about-text h6 {
      font-size: 18px;
    }
  }

  .about-text p {
    font-size: 18px;
    max-width: 450px;
  }

  .about-text p mark {
    font-weight: 600;
    color: #dc373d;
  }

  .about-list {
    padding-top: 10px;
  }

  .about-list .media {
    padding: 5px 0;
  }

  .about-list label {
    color: #dc373d;
    font-weight: 600;
    width: 100%;
    margin: 0;
    position: relative;
  }

  /* .about-list label:after {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    right: 11px;
    width: 1px;
    height: 12px;
    background: #dc373d;
    -moz-transform: rotate(15deg);
    -o-transform: rotate(15deg);
    -ms-transform: rotate(15deg);
    -webkit-transform: rotate(15deg);
    transform: rotate(15deg);
    margin: auto;
    opacity: 0.5;
  } */

  .about-list p {
    margin: 0;
    font-size: 15px;
  }

  @media (max-width: 991px) {
    .about-avatar {
      margin-top: 30px;
    }
  }

  .about-section .counters {
    padding: 22px 20px;
    background: #ffffff;
    border-radius: 10px;
    box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
  }

  .about-section .counters .count-data {
    margin-top: 10px;
    margin-bottom: 10px;
  }

  .about-section .counters .count {
    font-weight: 700;
    color: #dc373d;
    margin: 0 0 5px;
  }

  .about-section .counters p {
    font-weight: 600;
    margin: 0;
  }

  mark {
    background-image: linear-gradient(rgba(252, 83, 86, 0.6), rgba(252, 83, 86, 0.6));
    background-size: 100% 3px;
    background-repeat: no-repeat;
    background-position: 0 bottom;
    background-color: transparent;
    padding: 0;
    color: currentColor;
  }

  .theme-color {
    color: #fc5356;
  }

  .dark-color {
    color: #000;
  }

  #search {
    width:90%;
}

.searchicon {
    color:#5CB85C;
}

.items-collection{
    margin:20px 0 0 0;
}
.items-collection label.btn-default.active{
    background-color:#dc373d;
    color:#FFF;
}
.items-collection label.btn-default:active{
  color:#fff;
}
.items-collection label.btn-default:hover{
  color:#fff;
}
.items-collection label.btn-default{
    width:90%;
    border:1px solid #dc373d;
    margin:5px; 
    border-radius: 17px;
    color: #dc373d;
    background-color:transparent;
}
.items-collection label .itemcontent{
    width:100%;
}
.items-collection .btn-group{
    width:90%
}
</
</style>
@endsection