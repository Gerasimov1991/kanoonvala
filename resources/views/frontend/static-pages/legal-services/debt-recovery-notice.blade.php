@extends('frontend.layouts.app')
<!-- Dynamic Title  --> 
@section('title', 'Send a legal notice by hiring the most experienced Debt Recovery lawyers in India at Kanoonvala.com') 
@section('meta_description', 'Legal notices send by India top experienced Debt Recovery lawyers in your localities and reviewed by our expert legal team.')
@section('meta_keywords', 'Draft  Send Debt Recovery Notice in India, legal Notice for money recovery, legal Notice In India, creating legal Notice with expert lawyers')
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
                        <h1 class="text-white text-l heading_one">Draft & Send Debt Recovery Notice For <br>
                          <span>Just INR 2499/-</span></h1>
                       
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
    <div class="main-content-area">
      <section class="custom-padding" id="how-it-work">
        <div class="container">
          <div class="main-heading text-center" style="color:black;">
            <h2>Debt Recovery Notice</h2>
            <div class="slices"><span class="slice"></span><span class="slice"></span><span class="slice"></span>
              <p style="color:black;">You may send a notice for recovery of money from your employer, friend or any other party who owes you money. The first step in recovery should be to send a legal notice since most recovery cases get resolved in this step itself and you do not need to proceed to Court.</p>
              <p style="color:black;">You must send a well-drafted and legally sound notice to ensure that you get a prompt response on your notice and you have maximum opportunity to recover your money.</p>
            </div>
          </div>
          <div class="row">
            <div class="main-heading text-center" >
              <h2>What You will Get In The Package</h2>
            </div>
            <hr style="color:#612f31;">
            <div class="col-md-6 left-responsive">
              <h4 style="color:black;">Whats Included</h4>
              <hr style="border:2px solid #612f31;">
              <p>- 20 minutes consultation and advice from experienced top lawyers </p>
              <p>- Legal notice drafting to be sent to you for approval </p>
              <p>- Final legal notice drafting incorporating suggestions given by you (if any) </p>
              <p>- Dispatch of the final legal notice through registered post </p>
              <p>- The tracking number of the registered post shall be shared with you </p>
            </div>
            <div class="col-md-6 left-responsive">
              <h4 style="color:black;">Whats Excluded</h4>
              <hr style="border:2px solid #612f31;">
              <p>- Subsequent case after the legal notice has been sent is not included </p>
              <p>- You may hire the lawyer for any subsequent cases </p>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </section>
      <section class="custom-padding" id="how-it-work" style="background:#fff;">
        <div class="container">
          <div class="row">
            <div class="col-md-6 left-responsive">
              <h4 style="color:black;">Documents Required to Draft & Send Debt Recovery Notice</h4>
              <ul>
                <li>1. Affidavit of proof of money lent/owed to you</li>
                <li>2. If recovery from employer, employment agreement that states the amount that your employer is to give you in exchange of your service</li>
                <li>3. Any proof of money owed to you</li>
              </ul>
              <br>
              <h4 style="color:black;"> Procedure to Draft & Send Debt Recovery Notice</h4>
              <ul>
                <li>1. You must hire the top Debt Recovery lawyers in your locality to help you draft a legal notice for the recovery of your money.
                <li>2. The draft notice shall be drafted and sent to you for approval.</li>
                <li>3. The final notice shall be drafted incorporating your suggestions(if any).</li>
                <li>4. The final notice shall be sent to the opposite party</li>
              </ul>
            </div>
            <div class="col-md-6 left-responsive">
              <div class="card">
                <div class="card-container">
                  <h4><b>Debt Recovery in India</b></h4>
                </div>
              </div>
              <br>
              <div class="card">
                <div class="card-container">
                  <h4><b>Send Legal Notice</b></h4>
                </div>
              </div>
              <br>
              <div class="card">
                <div class="card-container">
                  <h4><b>Legal Notice Reply</b></h4>
                </div>
              </div>
              <br>
              <div class="card">
                <div class="card-container">
                  <h4><b>Willful Defaulters</b></h4>
                </div>
              </div>
              <br>
              <div class="card">
                <div class="card-container">
                  <h4><b>Show Cause Notice</b></h4>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
<!-- =-=-=-=-=-=-= Login Form =-=-=-=-=-=-= -->
    <section class="" id="login">
      <div class="container">
      @include('frontend.enquiry.index')
      </div>
      <!-- end container --> 
    </section>

          </div>
        </div>
      </section>
    </div>
  </div>
</div>
</div>
@stop 