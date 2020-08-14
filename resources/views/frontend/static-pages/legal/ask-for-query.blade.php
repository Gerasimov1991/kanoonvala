@extends('frontend.layouts.app')
<!-- Dynamic Tiltile  --> 
@section('title', 'Ask For Query') 
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
                        <h1 class="text-white text-l heading_one">Ask Your Question</h1>
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
<p>Top legal experts at Kanoonvala.com answer hundreds of queries every day! As your question here and get free expert advice. 
  For detailed information view our Community Guidelines and Privacy Policy.</p>
<div class="clearfix">&nbsp;</div>
<!-- form login -->
<p class="form-group">
<form class="margin-top-40">
  <textarea cols="12" rows="12" placeholder="Post Your Question Details Here....." id="message" name="message" class="form-control"></textarea>
  <br>
  <button class="btn btn-danger pull-center" value="submit">Publish Your Question</button>
</form>
</p>
<!-- form login -->
<div class="row">
  <div class="col-md-3 col-xs-6 text-center form-group"> <img src="/assets/images/adduser.png" class="img_responsive">
    <h4>Here How It Works</h4>
    <p><a href="#">Submit the Question</a></p>
    <p> Explain your legal query in detail and post it for our experts here.</p>
  </div>
  <div class="col-md-3 col-xs-6 text-center form-group"> <img src="/assets/images/explore.png" class="img_responsive">
    <p><a href="#">Answers By Experts</a></p>
    <h4>Debt Recovery &amp; Cheque Bounce</h4>
    <p>Kanonvalas legal experts answer your queries and provide free advice.</p>
  </div>
  <div class="col-md-3 col-xs-6 text-center form-group"> <img src="/assets/images/muser.png" class="img_responsive">
    <p><a href="#"> Get Notification</a></p>
    <p>Get notified when our legal experts post answers to your questions.</p>
  </div>
  <div class="col-md-3 col-xs-6 text-center form-group"> <img src="/assets/images/service-4.png" class="img_responsive">
    <h4>Customs &amp; GST</h4>
  </div>
</div>
<h3>WANT TO KNOW MORE? READ OTHER ANSWERS POSTED BY OUR LEGAL EXPERTS</h3>
  <p>Simply select the legal category and read answers on legal queries posted by others.</p>
 <button class="btn btn-danger">
  <a href="qna.html" style="color:white">FIND MORE QNA</a>
  </button>
  </div>
  </div>
@stop 