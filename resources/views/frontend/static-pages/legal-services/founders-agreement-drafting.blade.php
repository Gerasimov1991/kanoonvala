@extends('frontend.layouts.app')
<!-- Dynamic Tiltile  --> 
@section('title', 'Founders Agreement Online India')
@section('meta_description', 'Founders Agreement Online with the help of a legal expert. Online Co-founder Agreement between two or more partners jointly.')
@section('meta_keywords', 'Founders Agreement Online India, Online Co-founder Agreement, Draft your Founders Agreement, founder and investor agreement, shareholder agreement online, co-creator agreement')
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
                        <h1 class="text-white text-l heading_one">Join Now to Draft Founders Agreement Online For <br>
                          <span>Just INR 9999/-</span></h1>
                       
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
    <div id="home" class="full-section parallax-home">
      <div class="main-content-area">
        
        
        <section class="custom-padding" id="how-it-work">
          <div class="container">
            <div class="main-heading text-center" style="color:black;">
              <h2>Founders Agreement</h2>
              <div class="slices"><span class="slice"></span><span class="slice"></span><span class="slice"></span>
                <p style="color:black;"> Founders Agreement is a legal document laying down the terms and conditions that are to be the terms of operations between the founders of the company. The most important ingredients that must be present in every Founders Agreement are provisions regarding the roles and relationships of the founders, equity shares and Intellectual Property ownership. </p>
                <p style="color:black;">Provisions for confidentiality, withdrawal or removal of ownership, conflict resolution, etc., must also be included in the agreement. To ensure that the company has economic and structural growth while protecting the interests of the co-founders, it is essential to include a Founders Agreement at the stage of incorporation of the company.</p>
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
                <p>- Introduction call for consultation with lawyer to get to know your lawyer and regarding the work that will be done together</p>
                <p>- Documents Checklist</p>
                <p>- Verification of necessary documents</p>
                <p>- Drafting of the agreement</p>
                <p>- Managing the necessary paperwork</p>
              </div>
              <div class="col-md-6 left-responsive">
                <h4 style="color:black;">Whats Excluded</h4>
                <hr style="border:2px solid #612f31;">
                <p>- The lawyer shall not undertake any additional work apart from the Founders Agreement.</p>
                <p>- You may hire the lawyer in case of any additional startup related issues that you may have.</p>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
        </section>
       
        <section class="custom-padding" id="how-it-work" style="background:#fff;">
          <div class="container">
            <div class="row">
              <div class="col-md-6 left-responsive">
                <h4 style="color:black;">Documents required for Drafting Founders Agreement</h4>
                <ul>
                  <li>1. Entity Registration/Incorporation Certificate
                  <li>2.IPR Documents (if any) </li>
                  <li>3. Share-subscription Documents </li>
                  <li>3. Company Contracts </li>
                </ul>
                <br>
                <h4 style="color:black;">Procedure for Drafting Founders Agreement</h4>
                <ul>
                  <li>1. You must hire the top Startup lawyers in your locality to help you draft the Founders Agreement tailored to meet your specific needs and circumstances</li>
                  <li>2. The Founders Agreement shall be drafted and sent to you for approval.</li>
                  <li>3. The Founders Agreement shall be drafted incorporating your suggestions(if any).</li>
                </ul>
              </div>
              <div class="col-md-6 left-responsive">
                <div class="card">
                  <div class="card-container">
                    <h4><b>Co-Founders Agreement</b></h4>
                  </div>
                </div>
                <br>
                <div class="card">
                  <div class="card-container">
                    <h4><b>Lawyers for Startups</b></h4>
                  </div>
                </div>
                <br>
                <div class="card">
                  <div class="card-container">
                    <h4><b>Co-Founders Dispute</b></h4>
                  </div>
                </div>
                <br>
                <div class="card">
                  <div class="card-container">
                    <h4><b>Laws for Startups</b></h4>
                  </div>
                </div>
                <div class="card">
                  <div class="card-container">
                    <h4><b>Startup Business Model</b></h4>
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