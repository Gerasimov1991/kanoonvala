@extends('frontend.layouts.app')
<!-- Dynamic Tiltile  --> 
@section('title', 'Lawyer for Court Marriage in India at www.kanoonvala.com')
@section('meta_description', 'Lawyer for Court Marriage in India from kanoonvala.com Get Court Marriage Advice from highly experienced lawyers of kanoonvala.')
@section('meta_keywords', 'Lawyer for Court Marriage in India, Legal Advice from Top Lawyers India, Succession Certificate Lawyer India, Mutual Consent Divorce Lawyer in India')
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
                        <h1 class="text-white text-l heading_one">Join Now to Get Marriage Registration</h1>
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
    
    <section class="custom-padding" id="how-it-work" style="background:white;">
      <div class="container">
     
        <div class="main-heading text-center" style="color:black;">
          <h2>Marriage Registration</h2>
          <div class="slices"><span class="slice"></span><span class="slice"></span><span class="slice"></span>
          <p style="color:black;">A marriage is said to be registered when the marriage certificate is obtained as the legal document making it official that the marriage has taken place. A marriage can be registered when the ceremony has already taken place between two people and the it fulfils all the requisite conditions for a valid marriage. </p>
          <p style="color:black;">The Hindu Marriage Act, 1955 lays down the provisions for marriage registration for Hindus including Buddhists, Jains and Sikhs. The Special Marriage Act, 1954 is the secular law that makes it possible for people from different religions, castes and creed to get married and get their marriage registered.</p>
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
                <p>- Telephonic consultation with your lawyer for 20 minutes.</p>
      <p>- Verification of marriage registration documents.</p>
      <p>- Filing of marriage registration application.</p>
      <p>- Obtaining marriage registration certificate.</p>
            </div>
            <div class="col-md-6 left-responsive">
              <h4 style="color:black;">Whats Excluded</h4>
             <hr style="border:2px solid #612f31;">
               <p>- Court fees.</p>
      <p>- Stamp duty.</p>
      <p>- Other legal expenses incurred.</p>
            </div>
            <div class="clearfix"></div>
          
  </div>
    </div>
</section>
     <section class="custom-padding" id="how-it-work" style="background:#fff;">
      <div class="container">
        <div class="row">
            <div class="col-md-6 left-responsive">
              <h4 style="color:black;">Documents Required for Marriage Registration</h4> 
              <p>The following documents are needed to register a will in India:</p> 
             <ul>
              <li>1.Application form signed by the husband and wife.</li>
      <li>2.Proof of birth including the passport, birth certificate or matriculation certificate.</li>
      <li>3.In case of Special Marriage Act, documentary evidence regarding stay in Delhi of the parties for more than 30 days.</li>
      <li>4.Affidavit by the bride and groom mentioning the date and place of their marriage, date of birth, nationality and the marital status at the time of marriage.</li>
      <li>5. Proof of marriage like the marriage invitation card or photographs.</li>
      <li>6.Affirmation that the parties are not related to each other within the prohibited degree of relationship as per Hindu Marriage Act or Special Marriage Act as the case may be.</li>
    </ul>
             <br>
      <h4 style="color:black;">Procedure for Marriage Registration</h4>  
             <p>A marriage between Hindus (Sikhs, Buddhists, Jains) can be registered under the Hindu Marriage Act, 1955. To obtain a marriage certificate, the required documents along with the marriage registration form are submitted to the Registrar which has jurisdiction over the area where the husband and wife have been residing for a period of at least 6 months. Once the documents and form are accepted by the Registrar, the marriage certificate is granted.</p>
               <p >A marriage between 2 people of different religions, castes or creeds can be registered under the Special Marriage Act. When the bride and groom have not been married priorly and need to get married first, the process of a court marriage would be applicable. When the marriage ceremony has been performed already, a marriage certificate can be issued after giving a public notice of 30 days. The marriage certificate is issued in 30 days if the Marriage Registrar receives no objections against the notice during this period.</p>
            </div>
            <div class="col-md-6 left-responsive">
                <div class="card">
        <div class="card-container">
          <h4><b>Court Marriage Procedure</b></h4> 
        </div>
      </div><br>
      <div class="card">
        <div class="card-container">
          <h4><b>Special Marriage In India</b></h4> 
        </div>
      </div><br>
      <div class="card">
        <div class="card-container">
          <h4><b>NRI Marriage Registration</b></h4> 
        </div>
      </div><br>
      <div class="card">
        <div class="card-container">
          <h4><b>Fraud As A Ground For Divorce</b></h4> 
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
@stop 