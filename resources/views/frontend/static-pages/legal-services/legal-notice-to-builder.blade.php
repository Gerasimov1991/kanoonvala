@extends('frontend.layouts.app')
<!-- Dynamic Tiltile  --> 
@section('title', 'Lawyer for Legal Notice to Builder')
@section('meta_description', 'Book Appointment or Consult a Lawyer for Legal Notice to Builder in India. Consult Best Lawyer / Advocate of kanoonvala.com')
@section('meta_keywords', 'Lawyer for Legal Notice to Builder, Advocate to File Complaint under RERA, Lawyer for Legal Notice to Builder, Registration Lawyer in India')
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
                        <h1 class="text-white text-l heading_one">Join Now to Send A Legal Notice To Builder For Delayed Possession For <br>
                          <span> Just INR 2499/-</span>Choose an all-inclusive optimum legal solution for your business with Kanoonvala.com!</h1>
                      
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
          <h2>Legal Notice To Builder</h2>
          <div class="slices"><span class="slice"></span><span class="slice"></span><span class="slice"></span>
            <p style="color:black;">A Legal Notice is an official correspondence to a person, company or any other entity informing that their action or lack of action has caused some form of violation of sender’s rights and some remedial enforcement is required from the receiver’s end. In case of no remedy, the sender may resort to a legal action in court.</p>
            <p style="color:black;">In case a builder or property promoter causes delay in delivery of flat possession, home buyers can send a legal notice to the builder asking for a refund or timely delivery of property possession. For a stronger case, home buyers must send a legal notice in writing to the builder before filing a complaint with the Consumer Dispute Resolution Fora or the RERA Authority.</p>
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
            <p>- Telephonic consultation with the lawyer for 20 minutes.</p>
            <p>- Drafting of legal notice to builder.</p>
            <p>-Sending of legal notice to builder.</p>
          </div>
          <div class="col-md-6 left-responsive">
            <h4 style="color:black;">Whats Excluded</h4>
            <hr style="border:2px solid #612f31;">
            <p>- Any legal action in furtherance of notice.</p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </section>
   <section class="custom-padding" id="how-it-work" style="background:#fff;">
      <div class="container">
        <div class="row">
          <div class="col-md-6 left-responsive">
            <h4 style="color:black;">Documents required for drafting a Legal Notice</h4>
            <ul>
              <li>1. Details about the sender and receiver.</li>
              <li>2. Any documents supporting the claim.</li>
              <li>3. Facts of the matter that led to sending of notice.</li>
              <li>4. The legal remedy sought from the builder</li>
            </ul>
            <br>
            <h4 style="color:black;">Procedure to draft a Legal Notice</h4>
            <p>Once the documents relating to the property are submitted, the documents along with the relevant details are submitted to the Sub-Registrar which has jurisdiction over the area where the property is situated. The registration fee is submitted and the document is signed by 2 witnesses. Once the prescribed stamp fee is paid, property registration is completed.Once the documents/information are provided, the expert property lawyer drafts a legal notice to be sent to the builder. The legal notice draft lays down the relevant information relating to the grievance and a demand for prompt action or compensation for delay in possession of flat. The notice is approved and sent to the lawyer via registered post or speed post. </p>
          </div>
          <div class="col-md-6 left-responsive">
            <div class="card">
              <div class="card-container">
                <h4><b>RERA vs NCDRC</b></h4>
              </div>
            </div>
            <br>
            <div class="card">
              <div class="card-container">
                <h4><b>How To Send A Legal Notice</b></h4>
              </div>
            </div>
            <br>
            <div class="card">
              <div class="card-container">
                <h4><b>Protection Of Home buyers Under RERA</b></h4>
              </div>
            </div>
            <br>
            <h4><b>Registration Of Property Under RERA</b></h4>
          </div>
        </div>
        <br>
        <div class="card">
          <div class="card-container">
            <h4><b>Class Action By Home Buyers</b></h4>
          </div>
        </div>
        <br>
      </div>
      <div class="clearfix"></div>

       <!-- =-=-=-=-=-=-= Login Form =-=-=-=-=-=-= -->
    <section class="" id="login">
      <div class="container">
      @include('frontend.enquiry.index')
      </div>
      <!-- end container --> 
    </section>
  </section>
</div>
</div>
    </section>
  </div>
</div>
@stop 