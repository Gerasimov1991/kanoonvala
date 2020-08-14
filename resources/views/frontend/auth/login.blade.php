@extends('frontend.layouts.app')

@section('content')

<div class="section-empty no-paddings">
  <div class="section-slider row-8 white">
    <div class="flexslider advanced-slider slider visible-dir-nav" data-options="animation:fade">
      <ul class="slides">
        <li data-slider-anima="fade-left" data-time="1000">
          <div class="section-slide">
            <div class="bg-cover" style="background-image:url('/assets/images/slide1.jpg')"></div>
            <div class="container">
              <div class="container-middle">
                <div class="container-inner text-center">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                      <div class="col-md-12 anima">
                        <h1 class="text-white text-l heading_one">Login</h1>
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
  <div class="container">
    <div class="col-md-6 col-md-offset-3 form-group">
      <div class="row">
        <div class="col-md-12">
          <!-- Lawyer Box Open -->
          <div class="shadow_box">
            {{ Form::open(['route' => 'frontend.auth.login', 'class' => 'form-horizontal']) }}
            <div class="form-group {{$errors->first('email')?'has-error':''}}">
              {{ Form::input('text', 'email', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.register-user.email')]) }}
              @if($errors->has('email'))
              <div class="help-block with-error">{{ $errors->first('email') }}</div>
              @endif
            </div>
            <div class="form-group {{$errors->first('password')?'has-error':''}}">
              {{ Form::input('password', 'password', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.register-user.password')]) }}
              @if($errors->has('password'))
              <div class="help-block with-error">{{ $errors->first('password') }}</div>
              @endif
            </div>
            <div class="form-group">
              {{-- <button type="submit" class="btn btn-block btn-lg btn-danger">Login</button> --}}
              {{ Form::submit(trans('labels.frontend.auth.login_button'), ['class' => 'btn btn-block btn-lg btn-danger']) }}
            </div>
            <p class="text-center">
              {{ link_to_route('frontend.auth.password.reset', trans('labels.frontend.passwords.forgot_password')) }}
            </p>
            <p>
            <!-- <p class="text-center">
              {{ link_to_route('frontend.auth.register', 'Not a registered user? Sign Up Here') }}</a></p> -->
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection