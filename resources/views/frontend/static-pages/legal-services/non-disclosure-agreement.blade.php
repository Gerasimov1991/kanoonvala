@extends('frontend.layouts.app')
<!-- Dynamic Tiltile  --> 
@section('title', 'Non-Disclosure Agreement Online')
@section('meta_description', 'Draft a Non-Disclosure Agreement Online and get contract between two people or companies with the help of kanoonvala.com; Consult Now!')
@section('meta_keywords', 'Non-Disclosure Agreement Online, Draft a Non-Disclosure Agreement')
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
                        <h1 class="text-white text-l heading_one">Draft A Non-Disclosure Agreement Online For <br>
                          <span> Just INR 7000/- </span>Choose an all-inclusive optimum legal solution for your business with Kanoonvala.com!</h1>
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
      <div class="slider-caption">
        <h2 style="font-size:25px;"></h2>
      </div>
    </div>
    <div class="main-content-area">
      
      <section class="custom-padding" id="how-it-work">
        <div class="container">
          <div class="main-heading text-center" style="color:black;">
            <h2>Non-Disclosure Agreement (NDA)</h2>
            <div class="slices"><span class="slice"></span><span class="slice"></span><span class="slice"></span>
              <p style="color:black;"> A Non-Disclosure Agreement (NDA) is a contract between 2 people or companies to enforce confidentiality of information shared. Businesses especially require NDAs when sharing their trade secrets and sensitive client and business data with vendors, traders, customers or service providers.</p>
              <p style="color:black;">A Non-Disclosure Agreement binds the people signing them to protect the information mentioned in the contract and prevents them from sharing any such information to a third party. An NDA can be a mutual NDA whereby both the parties share information with each other and a non-mutual or unilateral NDA whereby one party shares its information with each other.</p>
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
              <p>-Telephonic consultation with the lawyer for 30 minutes.</p>
              <p>- Complete drafting and amendment of agreement till finalisation.</p>
            </div>
            <div class="col-md-6 left-responsive">
              <h4 style="color:black;">Whats Excluded</h4>
              <hr style="border:2px solid #612f31;">
              <p>- Additional work after the agreement is approved and signed.</p>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </section>
      
      <section class="custom-padding" id="how-it-work" style="background:#fff;">
        <div class="container">
          <div class="row">
            <div class="col-md-6 left-responsive">
              <h4 style="color:black;">Documents needed to make Non-Disclosure Agreement</h4>
              <ul>
                <li>1. Details relating to parties to the contract.</li>
                <li>2. Details about the information protected through the agreement.</li>
                <li>3. Information as required about the termination, jurisdiction, etc. </li>
              </ul>
              <br>
              <h4 style="color:black;">Procedure of Non-Disclosure Agreement Drafting</h4>
              <p> The agreement is drafted by the lawyer based on the information provided. The NDA is sent back for any changes or approval. In case of changes needed, the lawyer amends the agreement and sends it back for final approval. Once the document is approved, it is signed by both the parties. </p>
            </div>
            <div class="col-md-6 left-responsive">
              <div class="card">
                <div class="card-container">
                  <h4><b>NDA in India</b></h4>
                </div>
              </div>
              <br>
              <div class="card">
                <div class="card-container">
                  <h4><b>Important Clauses of NDA</b></h4>
                </div>
              </div>
              <br>
              <div class="card">
                <div class="card-container">
                  <h4><b>10 Agreements for Startups</b></h4>
                </div>
              </div>
              <br>
              <div class="card">
                <div class="card-container">
                  <h4><b>Importance of Well-drafted Agreements</b></h4>
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