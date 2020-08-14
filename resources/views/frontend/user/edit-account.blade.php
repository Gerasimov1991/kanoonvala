@extends('frontend.layouts.app')

@section('content')
<div class="header-base mt30">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="text-left">
          <h1>Update Profile</h1>
        </div>
      </div>
      <div class="col-md-6">
        <ol class="breadcrumb b white">
          <li><a href="/dashboard">Dashboard</a></li>
          <li class="active">Update Profile</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="section-empty inner_page">
  <div class="container content">
    <div class="row">
      <div class="col-md-12 text-right">
        <a href="javascript:void(0)" onclick="javascript:$('[id*=\'showWTimeModal\']').modal('show')"
          class="btn btn-warning btn-outline no-margins"><i class="fa fa-clock-o m-r-xs"></i>
          View Working Times</a>
        <a href="javascript:void(0)" class="btn btn-danger btn-outline no-margins"
          onclick="javascript:$('[id*=\'setWTimeModal\']').modal('show')"><i class="fa fa-clock-o m-r-xs"></i> Set
          Working Times</a>
      </div>
    </div>
    {{ Form::model($logged_in_user, ['route' => 'frontend.user.profile.update',"enctype"=>"multipart/form-data", 'method' => 'PATCH']) }}

    <div class="row">
      <div class="col-lg-4 col-md-6 form-group {{$errors->first('first_name')?'has-error':''}}">
        <label>First Name</label>
        {{ Form::input('text', 'first_name', null, ['class' => 'form-control','required'=>'required', 'placeholder' => trans('validation.attributes.frontend.register-user.firstName')]) }}
        @if($errors->has('first_name'))
        <div class="help-block with-error">{{ $errors->first('first_name') }}</div>
        @endif
      </div>
      <div class="col-lg-4 col-md-6 form-group {{$errors->first('last_name')?'has-error':''}}">
        <label>Last Name</label>
        {{ Form::input('text', 'last_name', null, ['class' => 'form-control','required'=>'required', 'placeholder' => trans('validation.attributes.frontend.register-user.firstName')]) }}
        @if($errors->has('last_name'))
        <div class="help-block with-error">{{ $errors->first('last_name') }}</div>
        @endif
      </div>
      @if ($logged_in_user->canChangeEmail())
      <div class="col-lg-4 col-md-6 form-group {{$errors->first('email')?'has-error':''}}">
        {{ Form::input('email', 'email', null, ['class' => 'form-control','required'=>'required', 'placeholder' => trans('validation.attributes.frontend.register-user.email')]) }}
        @if($errors->has('email'))
        <div class="help-block with-error">{{ $errors->first('email') }}</div>
        @endif
      </div>
      @endif
      <div class="col-lg-4 col-md-6 form-group {{$errors->first('mobile')?'has-error':''}}">
        <label>Mobile No </label>
        @if ($logged_in_user->canChangeMobile())
        {{ Form::input('text', 'mobile', null, ['class' => 'form-control','required'=>'required', 'placeholder' => 'Mobile Number']) }}
        @if($errors->has('mobile'))
        <div class="help-block with-error">{{ $errors->first('mobile') }}</div>
        @endif
        @else
        {{ Form::input('text', 'mobile', null, ['class' => 'form-control','required'=>'required','readonly' =>true, 'placeholder' => 'Mobile Number']) }}
        @endif

      </div>
      <div class="col-lg-4 col-md-6 form-group {{$errors->first('state')?'has-error':''}}">
        <label>State</label>
        {{ Form::select('state', $states,null, ['class' =>'form-control','required'=>'required']) }}
        @if($errors->has('state'))
        <div class="help-block with-error">{{ $errors->first('state') }}</div>
        @endif
      </div>
      <div class="col-lg-4 col-md-6 form-group {{$errors->first('city')?'has-error':''}}">
        <label>City</label>
        {{ Form::select('city', $cities,null, ['class' =>'form-control','required'=>'required']) }}
        @if($errors->has('city'))
        <div class="help-block with-error">{{ $errors->first('city') }}</div>
        @endif
      </div>
      <div class="col-lg-4 col-md-6 form-group {{$errors->first('postal_code')?'has-error':''}}">
        <label>Postal Code</label>
        {{ Form::input('text', 'postal_code', null, ['class' => 'form-control','required'=>'required', 'placeholder' => 'Postal Code']) }}
        @if($errors->has('postal_code'))
        <div class="help-block with-error">{{ $errors->first('postal_code') }}</div>
        @endif
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 form-group {{$errors->first('address')?'has-error':''}}">
        <label>Address</label>
        {{ Form::textarea('address', null, ['class' => 'form-control','required'=>'required', 'placeholder' => 'Address','rows'=> 2]) }}
        @if($errors->has('address'))
        <div class="help-block with-error">{{ $errors->first('address') }}</div>
        @endif
      </div>
      <div class="col-md-6 form-group {{$errors->first('specialization')?'has-error':''}}">
        <label>About Me </label>
        {{ Form::textarea('about_me', null, ['class' => 'form-control','required'=>'required', 'placeholder' => 'About Me','rows'=> 2]) }}
        @if($errors->has('about_me'))
        <div class="help-block with-error">{{ $errors->first('about_me') }}</div>
        @endif
      </div>
    </div>
    <div class="row">
      @if (\Auth::user()->roles()->first()->name == "Advocate")
      <div class="col-md-6 form-group {{$errors->first('specialization')?'has-error':''}}">
        <label>Specialization </label>
        {{ Form::select('specialization', $specialization,array_combine(explode(',',$logged_in_user->specialization), explode(',',$logged_in_user->specialization)), ['class' => 'form-control','required'=>'required', "multiple"=>"multiple", 'id' => 'specialization',"name"=>"specialization[]", 'placeholder' => 'Specialization','rows'=> 2]) }}
        @if($errors->has('specialization'))
        <div class="help-block with-error">{{ $errors->first('specialization') }}</div>
        @endif
      </div>
      <div class="col-md-6 form-group {{$errors->first('court_in')?'has-error':''}}">
        <label>Court </label>
        {{ Form::select('court_in', $courtList,array_combine(explode(',',$logged_in_user->court_in), explode(',',$logged_in_user->court_in)), ['class' => 'form-control','required'=>'required', "multiple"=>"multiple",'required'=>'required', 'id' => 'court_in',"name"=>"court_in[]",'rows'=> 2]) }}
        @if($errors->has('court_in'))
        <div class="help-block with-error">{{ $errors->first('court_in') }}</div>
        @endif
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 form-group {{$errors->first('adv_fee')?'has-error':''}}">
        <label>Consultancy fees</label>
        {{ Form::input('number', 'adv_fee', null, ['class' => 'form-control','required'=>'required', 'placeholder' => 'Enter Amount']) }}
        @if($errors->has('adv_fee'))
        <div class="help-block with-error">{{ $errors->first('adv_fee') }}</div>
        @endif
      </div>
      <div class="col-md-6 form-group {{$errors->first('experience')?'has-error':''}}">
        <label>Total Experience</label>
        {{ Form::input('text', 'experience', null, ['class' => 'form-control','required'=>'required', 'placeholder' => 'Total Experience']) }}
        @if($errors->has('experience'))
        <div class="help-block with-error">{{ $errors->first('experience') }}</div>
        @endif
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 form-group {{$errors->first('bar_council_no')?'has-error':''}}">
        <label>Bar Council No</label>
        {{ Form::input('text', 'bar_council_no', null, ['class' => 'form-control','required'=>'required','required'=>'required', 'placeholder' => 'Bar Council No']) }}
        @if($errors->has('bar_council_no'))
        <div class="help-block with-error">{{ $errors->first('bar_council_no') }}</div>
        @endif
      </div>
      <div class="col-md-6 form-group {{$errors->first('aor_number')?'has-error':''}}">
        <label>AOR No</label>
        {{ Form::input('text', 'aor_number', null, ['class' => 'form-control','required'=>'required','required'=>'required', 'placeholder' => 'AOR No']) }}
        @if($errors->has('aor_number'))
        <div class="help-block with-error">{{ $errors->first('aor_number') }}</div>
        @endif
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 form-group {{$errors->first('Locality')?'has-error':''}}">
        <label>Locality</label>
        {{ Form::input('text', 'locality', null, ['class' => 'form-control','required'=>'required','required'=>'required', 'placeholder' => 'Locality']) }}
        @if($errors->has('Locality'))
        <div class="help-block with-error">{{ $errors->first('Locality') }}</div>
        @endif
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 form-group {{$errors->first('license_image')?'has-error':''}}">
        <label>Bar/ license Upload</label>
        <br>
        <div class="shrt_uploadedImgInput">
          <div class="shrt_fileUpload"> <span>choose file</span>
            <input type="file" class="form-control upload" id="license" name="license_image" />
          </div>
          <span id="shrt_filename" style="display: none;"></span>
        </div>
        @if($errors->has('license_image'))
        <div class="help-block with-error">{{ $errors->first('license_image') }}</div>
        @endif
      </div>
      @endif
      <div class="col-md-6 form-group {{$errors->first('profile_image')?'has-error':''}}">
        <label>Profile Image update</label>
        <br>
        <div class="shrt_uploadedImgInput">
          <div class="shrt_fileUpload"> <span>choose file</span>
            <input type="file" class="form-control upload" id="profile" name="profile_image" />
          </div>
          <span id="shrt_filename2" style="display: none;"></span>
        </div>
        <br>
        <div style="display: block;width: 100%;float: left;">[<i>Image size must be 690 x 690</i>]</div>

        @if($errors->has('profile_image'))
        <div class="help-block with-error clear-both">{{ $errors->first('profile_image') }}</div>
        @endif
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 form-group">
        {{ Form::submit(trans('labels.general.buttons.update'), ['class' => 'btn btn-lg btn-danger', 'id' => 'update-profile']) }}
      </div>
    </div>
    {{ Form::close() }}
  </div>
</div>
@include('frontend/modalpopups/setgetappointment')
@endsection
@section('after-styles')
<link rel="stylesheet" href="{{asset('js/clockpicker/jquery-clockpicker.css')}}">
@endsection
@section('after-scripts')
<script src="{{asset('js/clockpicker/jquery-clockpicker.js')}}"></script>


<script type="text/javascript">
  $.fn.validator.Constructor.INPUT_SELECTOR = ':input:not([type="hidden"], [type="submit"], [type="reset"], button)'

  $(document).ready(function(e) {
    $('#frmSetWTime').validator({
      focus:false
    }).on('submit', function (e) {
      if (e.isDefaultPrevented()) {
      // console.log(e.currentTarget);
        // handle the invalid form...
      } else {
      e.preventDefault(e);
        var from = $(e.currentTarget).find('input[name="from_time"]').val(),
            to = $(e.currentTarget).find('input[name="to_time"]').val(),
            lunch_from = $(e.currentTarget).find('input[name="lunch_from_time"]').val(),
            lunch_to = $(e.currentTarget).find('input[name="lunch_to_time"]').val();
            Swal.fire({
              title: 'Warning',
              text: "Do you wan to overwrite current working time?",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonText: 'Save',
              cancelButtonText: 'Cancel',
              closeOnConfirm: false,
              showLoaderOnConfirm: true
            }).then((result) => {
              if (result.value) {
                
                $.post("/set-availability", $(e.currentTarget).serialize()).done(function (data) {
                    if(data.status == 200){
                      $('#setWTimeModal').modal('hide');
                      Swal.fire(
                        'Updated!',
                        'Working time updated successfully.',
                        'success'
                      )
                    }else{
                      $('#time-error-msg').html('');
                      $.each(data.errors,function(idx,err){
                        $('#time-error-msg').append(err.to_time[0]).parent().fadeIn().delay(2000).fadeOut();
                      })
                    }
                });
               
              }
            })
           
        
      }
      return false;
    })
    var special = $('#specialization').select2({
      tags: true,
      placeholder: "Select specialization",
      tokenSeparators: [',']
    })
    $('#court_in').select2({
      tags: true,
      placeholder: "Prectice Court",
      tokenSeparators: [',']
    })
    $('input#license').change(function(){
      var filename = $(this).val().match(/[^\\/]*$/)[0];
      $('#shrt_filename').show();
      $('#shrt_filename').html(filename);
    });
    $('#choosen_week_day').select2({
      tags: true,
      tokenSeparators: [',']
    })
    if ($('.clockpicker').length) {
      $('.clockpicker').clockpicker({
            autoclose: true
        });
    };
  });
  $(document).ready(function(e) {
    $('input#profile').change(function(){
      var filename = $(this).val().match(/[^\\/]*$/)[0]; 
      $('#shrt_filename2').show();
      $('#shrt_filename2').html(filename);
    });
  });
</script>
@endsection