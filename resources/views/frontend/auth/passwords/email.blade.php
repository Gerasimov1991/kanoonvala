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



    <div class="row">
      

        <div class="col-md-8 col-md-offset-2"  style="margin-top:100px;">

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <div class="panel panel-default">

                <div class="panel-heading">{{ trans('labels.frontend.passwords.reset_password_box_title') }}</div>

                <div class="panel-body">

                <!-- <form action="{{('/password_reset')}}" method="post"> -->

 
                   {{ Form::open(['route' => 'frontend.auth.password.email', 'class' => 'form-horizontal','id'=>'forgotform']) }}

                   
                     
                  

                    <div class="form-group" id="pnlemail">
                        {{ Form::label('email', trans('validation.attributes.frontend.register-user.email'), ['class' => 'col-md-4 control-label']) }}
                        <div class="col-md-6">
                            <!-- {{ Form::input('email', 'email', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.frontend.register-user.email')]) }} -->
                            <input type="text" name="email" class="form-control" placeholder="Email Address/Mobile No.">

                            
                          <div style="display:none; background-color:#b6ffd3;" id="success">
                            <label style="color:geen; text-align:center;">Reset Link In Your Email Id</label>
                            </div>
                            
                        </div><!--col-md-6-->
                    </div><!--form-group-->
                    <div class="form-group" style="display:none" id="pnlopt">
                        <div class="col-md-6 col-md-offset-4">
                        <input type="text" name="verification_code" id="verification_code" class="form-control" placeholder="Enter OTP">
                        </div>                        
                        <!--col-md-6-->
                    </div><!--form-group-->
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                             {{ Form::submit(trans('labels.frontend.passwords.send_password_reset_link_button'), ['class' => 'btn btn-danger','id'=>"btnsubmit"]) }} 
                        <!-- <button type="submit" class="btn btn-primary" id="btnsubmit" style="background-color: #dc373d;!important">Send Password Resent Link</button> -->
                          </div>
                        
                        <!--col-md-6-->
                    </div><!--form-group-->
                    

                    {{ Form::close() }}


                     

                </div><!-- panel body -->

            </div><!-- panel -->

        </div><!-- col-md-8 -->

    </div><!-- row -->
    <!-- <div id="myModal" class="modal" role="dialog">
  <div class="modal-dialog">

    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
 -->

<!-- <div id="preloader"><div class="loader" id="loader"></div></div> -->
    
@endsection
