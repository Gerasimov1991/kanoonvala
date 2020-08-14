@extends('frontend.layouts.app')
<!-- Dynamic Tiltile  --> 
@section('title', 'Consumer Complaint Notice Online in India at kanoonvala.com')
@section('meta_description', 'Send Consumer Complaint Notice Online in India. Let’s discuss with legal advisors to know the procedure of file complaint in consumer court.')
@section('meta_keywords', 'Consumer Complaint Notice Online, consumer forum complaint online, application for consumer court, how to file complaint consumer forum')
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
                        <h1 class="text-white text-l heading_one">Send Consumer Complaint Notice Online For <br>
                          <span>Just INR 1999/-</span></h1>
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
            <h2>Consumer Complaint Notice</h2>
            <div class="slices"><span class="slice"></span><span class="slice"></span><span class="slice"></span>
              <p style="color:black;">A consumer may file a complaint against the provider of a product or service when there happens to be a defect or deficiency or when the provider has charged a price above the MRP or if it affects the consumer’s safety or health or if the provider has indulged in any unfair trade practice. However, before a consumer complaint is filed, a legal notice is served to the provider and a reasonable time is provided to them to rectify the deficiency</p>
              <p style="color:black;">The consumer sending the notice must also keep evidence of the notice sent to be presented before the Court in case a complaint is filed. It happens many times that the issue gets resolved after a notice is served on the product or service provider and hence, it becomes necessary that you send a well-drafted and legally sound notice. You must hire the top Consumer Protection lawyers to help you for this purpose.</p>
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
              <p>- 30 minutes consultation and advice from experienced top lawyers</p>
              <p>- Legal notice drafting to be sent to you for approval</p>
              <p>- Final legal notice drafting incorporating suggestions given by you (if any)</p>
              <p>- Dispatch of the final legal notice through registered post</p>
              <p>- The tracking number of the registered post shall be shared with you</p>
            </div>
            <div class="col-md-6 left-responsive">
              <h4 style="color:black;">Whats Excluded</h4>
              <hr style="border:2px solid #612f31;">
              <p>- Subsequent case after the legal notice has been sent is not included</p>
              <p>- You may hire the lawyer for any subsequent cases</p>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </section>
     
      <section class="custom-padding" id="how-it-work" style="background:#fff;">
        <div class="container">
          <div class="row">
            <div class="col-md-6 left-responsive">
              <h4 style="color:black;">Documents required for Sending Consumer Complaint Notice</h4>
              <ul>
                <li>1. Name and address of the product or service provider</li>
                <li>2. Details of the faulty product or service or of the subject-matter of the grievance</li>
                <li>3. Copy of any correspondence made with the provider to remedy the deficiency</li>
                <li>4. Any other documents that support your claim</li>
              </ul>
              <br>
              <h4 style="color:black;">Procedure for Sending Consumer Complaint Notice</h4>
              <ul>
                <li>1.  You must hire the top Consumer Protection lawyers in your locality to help you draft a legal notice for the recovery of your money.</li>
                <li>2. The draft notice shall be drafted and sent to you for approval.</li>
                <li>3. The final notice shall be drafted incorporating your suggestions(if any).</li>
                <li>4. The final notice shall be sent to the opposite party</li>
              </ul>
            </div>
            <div class="col-md-6 left-responsive">
              <div class="card">
                <div class="card-container">
                  <h4><b>Legal Notice Online</b></h4>
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
                  <h4><b>Consumer Complaint</b></h4>
                </div>
              </div>
              <br>
              <div class="card">
                <div class="card-container">
                  <h4><b>Consumer Forum in India</b></h4>
                </div>
              </div>
              <div class="card">
                <div class="card-container">
                  <h4><b>New Consumer Protection Law</b></h4>
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
@stop 