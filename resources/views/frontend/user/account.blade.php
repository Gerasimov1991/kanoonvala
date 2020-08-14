@extends('frontend.layouts.app')
<!-- Dynamic Tiltile  -->
@section('title', 'Advocate '.$logged_in_user->first_name. ' '. $logged_in_user->last_name )
@section('meta_description', substr($logged_in_user->about_me,0,150) )
<!-- Page Content -->

@section('meta')

<meta property="og:url"        content="{{ url('advocate-profile/'.$logged_in_user->url_slug) }}" />
<meta property="og:type"       content="website" />
<meta property="og:title"      content="Advocate {{ $logged_in_user->first_name. ' '. $logged_in_user->last_name }}" />
<meta property="og:description"content="{{ $logged_in_user->about_me }}" />
<meta property="og:image"      content="{{ $logged_in_user->profile_image? URL::asset('uploads/profile/'.$logged_in_user->profile_image) :'/assets/images/client1.jpg' }}" />
@endsection

@section('content')
<div class="header-base mt30">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="text-left">
          <h1>Profile</h1>
        </div>
      </div>
      <div class="col-md-6">
        <ol class="breadcrumb b white">
          <li><a href="/dashboard">Dashboard</a></li>
          <li class="active">Profile</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="section-empty inner_page">
  <div class="container content">
    <div class="pull-right btn btn-primary"><a href="{{route('frontend.user.edit-account')}}"><i
          class="fa fa-pencil"></i></a></div>
    <div class="row">
      <div class="col-lg-4 col-md-4 form-group">
        <div class="user_profile_img"><img
            src="{{ $logged_in_user->profile_image? URL::asset('uploads/profile/'.$logged_in_user->profile_image) :'/assets/images/client1.jpg' }}">
        </div>
        <div style="margin-top: 10px;"><h2>About Me</h2>{{ !empty($logged_in_user->about_me) ? $logged_in_user->about_me : '' }}</div>
      </div>
      <div class="col-lg-8 col-md-8 form-group">
        <div class="table-responsive">
          <table width="100%" cellpadding="0" cellspacing="0" class="table">
            <tr>
              <td style="width:40%;"><strong>First Name</strong></td>
              <td style="width:60%;">{{ !empty($logged_in_user->first_name) ? $logged_in_user->first_name : '' }}</td>
            </tr>
            <tr>
              <td><strong>Last Name</strong></td>
              <td>{{ !empty($logged_in_user->last_name) ? $logged_in_user->last_name : '' }}</td>
            </tr>
            <tr>
              <td><strong>Email</strong></td>
              <td>{{ !empty($logged_in_user->email) ? $logged_in_user->email : '' }}</td>
            </tr>
            <tr>
              <td><strong>Mobile No</strong></td>
              <td>{{ !empty($logged_in_user->mobile) ? $logged_in_user->mobile : '' }}</td>
            </tr>
            <tr>
              <td><strong>City</strong></td>
              <td>{{ !empty($logged_in_user->city) ? $cities[$logged_in_user->city] : '' }}</td>
            </tr>
            <tr>
              <td><strong>State</strong></td>
              <td>{{ !empty($logged_in_user->state) ? $states[$logged_in_user->state] : '' }}</td>
            </tr>
            <tr>
              <td><strong>Postal Code</strong></td>
              <td>{{ !empty($logged_in_user->postal_code) ? $logged_in_user->postal_code : '' }}</td>
            </tr>
            <tr>
              <td><strong>Address</strong></td>
              <td>{{ !empty($logged_in_user->address) ? $logged_in_user->address : '' }}</td>
            </tr>
            @if (\Auth::user()->roles()->first()->name == "Advocate")
            <tr>
              <td><strong>Specialization</strong></td>
              <td>@if(!empty($logged_in_user->specialization))
                @foreach (explode(',',$logged_in_user->specialization) as $item)
                  <a href="#!" class="btn btn-sm btn-danger" style="margin-bottom: 10px;">{{ @$specialization[$item] }}</a>
                @endforeach
                @endif
                </td>
            </tr>
            <tr>
              <td><strong>Total Experience</strong></td>
              <td>{{ !empty($logged_in_user->experience) ? $logged_in_user->experience : '' }}</td>
            </tr>
            <tr>
              <td><strong>Court</strong></td>
              <td>
                @if(!empty($logged_in_user->court_in))
                @foreach (explode(',',$logged_in_user->court_in) as $item)
                  <a href="#!" class="btn btn-sm btn-danger" style="margin-bottom: 10px;">{{ $courtList[$item] }}</a>
                @endforeach
                @endif  
              </td>
            </tr>
            <tr>
              <td><strong>Consultancy Fee</strong></td>
              <td>{{ !empty($logged_in_user->adv_fee) ? number_format($logged_in_user->adv_fee,2) : '--' }}</td>
            </tr>
            <tr>
              <td><strong>Bar Council No</strong></td>
              <td>{{ !empty($logged_in_user->bar_council_no) ? $logged_in_user->bar_council_no : '' }}</td>
            </tr>
            <tr>
              <td><strong>AOR No</strong></td>
              <td>{{ !empty($logged_in_user->aor_number) ? $logged_in_user->aor_number : '' }}</td>
            </tr>
            <tr>
              <td><strong>Locality</strong></td>
              <td>{{ !empty($logged_in_user->locality) ? $logged_in_user->locality : '' }}</td>
            </tr>
            <tr>
              <td><strong>Bar/ license Upload</strong></td>
              <td>
                <div class="user_profile_img"><img
                    src="{{ $logged_in_user->license_image? URL::asset('uploads/license/'.$logged_in_user->license_image) :'/assets/images/client1.jpg' }}">
                </div>
              </td>
            </tr>
            @endif
          </table>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('after-scripts')
@endsection