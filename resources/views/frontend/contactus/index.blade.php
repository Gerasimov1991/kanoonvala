@extends('frontend.layouts.app')
<!-- Dynamic Tiltile  --> 
@section('title', 'Consumer Complaint Notice Online')
@section('description', 'Send Consumer Complaint Notice Online in India. Let’s discuss with legal advisors to know the procedure of file complaint in consumer court.')
@section('keywords', 'Consumer Complaint Notice Online, consumer forum complaint online, application for consumer court, how to file complaint consumer forum')
<!-- Page Content --> 
@section('content')
<div class="section-empty no-paddings">
  <div class="section-slider row-8 white">
    <div class="flexslider advanced-slider slider visible-dir-nav" data-options="animation:fade">
      <ul class="slides">
        <li data-slider-anima="fade-left" data-time="1000">
          <div class="section-slide">
            <div class="bg-cover" style="background-image:url({!! asset('assets/images/slide1.jpg') !!})"></div>
            <div class="container">
              <div class="container-middle">
                <div class="container-inner text-center">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                      <div class="col-md-12 anima">
                        <h1 class="text-white text-l heading_one">Contact Us</h1>
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
<!-- =-=-=-=-=-=-= Contact Us  =-=-=-=-=-=-= -->
<div class="section-empty">
<div class="container content">
  <div class="row">
  <div id="time-error-msg"></div>
    <div class="col-sm-8 col-sm-8 col-xs-12">
      <h2>Send a Message</h2>
      <form id="contactForm" action="{{url('contactUs')}}" method="post" role="form">
        <div class="row">
          <div class="col-lg-6 formmargin">
            <div class="form-group">
              <input type="text" placeholder="Name" id="name" name="name" maxlength="50" class="form-control" required>
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>
            <div class="form-group">
              <input type="email" placeholder="Email" maxlength="50" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
              <input type="text" placeholder="Subject" id="subject" name="subject" class="form-control" required>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <textarea cols="12" rows="7" maxlength="250" placeholder="Message..." id="message" name="message" class="form-control" required></textarea>
            </div>
          </div>
          <div class="col-lg-12">
            <button id="yes" class="btn btn-lg btn-danger" type="submit">Send Message</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12 contact-detail">
      <h2>Contact Details</h2>
      <div class="contact-info">
        <p><strong>Address :</strong>504, 5th Floor, Block-A Spaze I-Tech Park,<br>
          Sector -49, Gurugram 122001<br>
         </p>
        <p><strong>Phone : </strong>+91 9354419320</p>
        <p><strong>Email : </strong><a href="mailto:contact@kanoonvala.com">contact@kanoonvala.com</a></p>
        <div class="social-links-two clearfix"> <a class="facebook img-circle" href="https://www.facebook.com/Kanoonvala/" target="_blank"> <span class="fa fa-facebook-f"></span> </a> <a class="twitter img-circle" href="#"> <span class="fa fa-twitter"></span> </a> <a class="google-plus img-circle" href="#"> <span class="fa fa-google-plus"></span> </a> <a class="linkedin img-circle" href="#"> <span class="fa fa-pinterest-p"></span> </a> <a class="linkedin img-circle" href="#"> <span class="fa fa-linkedin"></span> </a> </div>
      </div>
      <!-- end links --> 
      
    </div>
    <div class="clearfix"></div>
  </div>
</div>
</div>
@stop