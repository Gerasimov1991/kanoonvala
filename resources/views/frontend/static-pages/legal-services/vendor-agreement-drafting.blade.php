@extends('frontend.layouts.app')
<!-- Dynamic Tiltile  --> 
@section('title', 'Vendor Agreement and drafting expert legal advice in India at Kanoonvala.com')
@section('meta_description', 'Vendor agreement online India for any individual or a business owner. Get Vendor Agreement for online stores, online marketplace seller and e-commerce partnership.')
@section('meta_keywords', 'Vendor Agreement online India, Vendor Agreement for online stores, Vendor Agreement for business owner')
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
                        <h1 class="text-white text-l heading_one">Draft Your Vendor Agreement Online For <br>
                          <span>Just INR 6999/-</span></h1>
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
            <h2>Vendor Agreement</h2>
            <div class="slices"><span class="slice"></span><span class="slice"></span><span class="slice"></span>
              <p style="color:black;">A Vendor Agreement is an agreement entered into between vendors of products and services, and any individual or business owner. It states the provisions and conditions of service that a contractor must abide by and the business owner must ensure. Such details as the specifics of the service to be provided such as date, time and location must be mentioned in the agreement.</p>
              <p style="color:black;">A Vendor Agreement must ideally be accompanied by a Statement of Work. The agreement becomes valid on being signed by the vendor and the individual or business owner.  A vendor agreement is necessary for setting out the terms of expectations between the parties and minimizing the risk of conflict and confusion.</p>
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
              <p>- Introduction call for a consultation with the lawyer to get to know your requirements for the Vendor Agreement and regarding the work that will be done together</p>
              <p>- Documents Checklist</p>
              <p>- Verification of necessary documents</p>
              <p>- Drafting of the agreement</p>
              <p>- Draft Vendor Agreement will be sent to you for feedback</p>
            </div>
            <div class="col-md-6 left-responsive">
              <h4 style="color:black;">Whats Excluded</h4>
              <hr style="border:2px solid #612f31;">
              <p>- The lawyer shall not undertake any additional work apart from the vendor agreement.</p>
              <p>- You may hire the lawyer for any Startup related disputes that you may face</p>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </section>
    <section class="custom-padding" id="how-it-work" style="background:#fff;">
        <div class="container">
          <div class="row">
            <div class="col-md-6 left-responsive">
              <h4 style="color:black;">Information Required for Drafting Vendor Agreement</h4>
              <ul>
                <li>1. Information regarding the Vendor and the Business Entity</li>
                <li>2.Information about Goods & Services to be provided</li>
                <li>3. Information about Deliverables</li>
              </ul>
              <br>
              <h4 style="color:black;">Procedure for Drafting Vendor Agreement</h4>
              <ul>
                <li>1. You must hire the top Startup lawyers in your locality to help you draft a Vendor Agreement tailored to meet your specific needs and circumstances.</li>
                <li>2. The Vendor Agreement shall be drafted and sent to you for approval.</li>
                <li>3. The Vendor Agreement shall be drafted incorporating your suggestions(if any).</li>
              </ul>
            </div>
            <div class="col-md-6 left-responsive">
              <div class="card">
                <div class="card-container">
                  <h4><b>Startup Legal Documents</b></h4>
                </div>
              </div>
              <br>
              <div class="card">
                <div class="card-container">
                  <h4><b>Key Clauses Of Vendor Agreement</b></h4>
                </div>
              </div>
              <br>
              <div class="card">
                <div class="card-container">
                  <h4><b>Food Truck Startup</b></h4>
                </div>
              </div>
              <br>
              <div class="card">
                <div class="card-container">
                  <h4><b>Legal Mistakes by Startups</b></h4>
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