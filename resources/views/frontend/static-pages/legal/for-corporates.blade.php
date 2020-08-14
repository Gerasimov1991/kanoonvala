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
                        <h1 class="text-white text-l heading_one">For Corporates</h1>
                        <p class="text-whit">Kanoonvala offers legal solutions for a wide range of corporate affairs</p>
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
  <h1 class="text-center anima fade-top heading_one">Our Services</h1>
    <div class="row">
      <div class="col-md-3 col-xs-6 text-center form-group"> <img src="/assets/images/service-1.png" class="img_responsive">
        <h4>Consumer Dispute</h4>
      </div>
      <div class="col-md-3 col-xs-6 text-center form-group"> <img src="/assets/images/service-2.png" class="img_responsive">
        <h4>Debt Recovery &amp; Cheque Bounce</h4>
      </div>
      <div class="col-md-3 col-xs-6 text-center form-group"> <img src="/assets/images/service-3.png" class="img_responsive">
        <h4>Arbitration</h4>
      </div>
      <div class="col-md-3 col-xs-6 text-center form-group"> <img src="/assets/images/service-4.png" class="img_responsive">
        <h4>Customs &amp; GST</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-xs-6 text-center form-group"> <img src="/assets/images/service-5.png" class="img_responsive">
        <h4>Regularity &amp; Policy Compliances</h4>
      </div>
      <div class="col-md-3 col-xs-6 text-center form-group"> <img src="/assets/images/service-6.png" class="img_responsive">
        <h4>Labour &amp; Industrial Law</h4>
      </div>
      <div class="col-md-3 col-xs-6 text-center form-group"> <img src="/assets/images/service-7.png" class="img_responsive">
        <h4>Anti Dumping</h4>
      </div>
      <div class="col-md-3 col-xs-6 text-center form-group"> <img src="/assets/images/service-8.png" class="img_responsive">
        <h4>Competition Law</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-xs-6 text-center form-group"> <img src="/assets/images/service-9.png" class="img_responsive">
        <h4>Intellectual Property Rights</h4>
      </div>
      <div class="col-md-3 col-xs-6 text-center form-group"> <img src="/assets/images/service-10.png" class="img_responsive">
        <h4>Insurance</h4>
      </div>
      <div class="col-md-3 col-xs-6 text-center form-group"> <img src="/assets/images/service-11.png" class="img_responsive">
        <h4>MACT</h4>
      </div>
      <div class="col-md-3 col-xs-6 text-center form-group"> <img src="/assets/images/service-12.png" class="img_responsive">
        <h4>Fraud &amp; Identity Theft Prevention</h4>
      </div>
    </div>
    <div class="clearfix">&nbsp;</div>
    <h1 class="text-center anima fade-top heading_one">Trusted By</h1>
    <p class="text-center mb50">Helping some of the very best get legally sorted</p>
    <div class="row">
      <div class="col-xs-6 text-center form-group"> <img src="/assets/images/cost-reduction.png" class="img_responsive"> </div>
      <div class="col-xs-6 text-center form-group"> <img src="/assets/images/productivity.png" class="img_responsive"> </div>
    </div>
    <h2>Cloud-Based Litigation Management Tool For Your Business</h2>
    <p>An avant-garde case management tool that enables online case tracking, task allotment &amp; document management on the go!</p>
    <h4>Hassle-Free Matter Management</h4>
    <p>An integrated solution to manage your ongoing cases in a single click- read case synopsis, assign tasks &amp; get real time case alerts</p>
    <h4>Communication, Collaboration and Coordination</h4>
    <p>Contact SPOC to prioritise a matter, establish deadlines, generate case analysis reports, track case history, case calander and access information of engaged counsels</p>
    <h4>Virtual Office Management</h4>
    <p>Manage invoices, upload documents and peruse through case files online on a secure cloud server with dual encryption and data backup.</p>
    <img src="/assets/images/track.png" class="img_responsive">
    <h2>Mastering Hub &amp; Spoke Approach</h2>
    <h4>Kanoonvala has upgraded legal for corporates.</h4>
    <p> Kanoonvalas legal experts identify the legal problems a corporate faces in managing its operations in multiple cities. With a nationwide network, we are able to locate expert legal professionals in even the remotest locations as per our clients case.</p>
    <p>With predefined quotations, we maintain complete transparency and flexibility in our operations, making it easier for our clients to finalise the most appropriate legal solution.</p>
    <p>We provide our clients with constant updates and reports for their legal matters to make their legal operations more efficient and productive</p>
    <p><img src="/assets/images/hubnspoke.png" class="img_responsive"></p>
  </div>
</div>
@stop 