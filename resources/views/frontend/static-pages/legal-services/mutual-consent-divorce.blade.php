@extends('frontend.layouts.app')
<!-- Dynamic Tiltile  --> 
@section('title', 'Mutual Consent Divorce Lawyer in India at www.kanoonvala.com') 
@section('meta_description', 'Mutual Consent Divorce Lawyer in India from kanoonvala.com; file a Divorce by Mutual Consent Petition with the help of kanoonvala.com. Ask away now!')
@section('meta_keywords', 'Mutual Consent Divorce Lawyer in India, Lawyer for Court Marriage in India, Legal Advice from Top Lawyers India, Succession Certificate Lawyer India')
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
                        <h1 class="text-white text-l heading_one">File A Mutual Consent Divorce, 10 Minutes Divorce Advice Session On Phone.Ask questions and get advice from a local experienced advocate on divorce and separation</h1>
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
    
    <section class="custom-padding" id="how-it-work">
      <div class="container">
        <div class="main-heading text-center" style="color:black;">
          <h2>Mutual Consent Divorce</h2>
          <div class="slices"><span class="slice"></span><span class="slice"></span><span class="slice"></span>
            <p style="color:black;"> Mutual Consent Divorce in India is a kind of divorce in which the husband and wife decide to dissolve the marriage mutually. In a mutual divorce, the husband and wife can file a divorce petition after deciding the terms of divorce together. The terms relating to divorce by mutual consent including maintenance/alimony to be paid to the wife, child custody and division of property jointly owned by both are finalised amicably.</p>
            <p style="color:black;">Mutual divorce is also known as uncontested divorce as the spouses decide to separate peacefully, without either of them contesting the divorce application in the court. To file a mutual consent divorce, it is pertinent that at least one year has been passed from the date of the marriage. The process of mutual divorce is simpler and faster, and the husband and wife can file a joint divorce petition and get a divorce in just 1-7 months.</p>
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
            <p>Telephonic consultation with a divorce lawyer for 30 minutes.</p>
            <p>- Case counselling through a private meeting with the lawyer.</p>
            <p>- Drafting of the divorce petition.</p>
            <p>- I Motion filing in court.</p>
            <p>- II Motion filing in court.
            <p>- Obtaining a Decree for Mutual Consent Divorce.</p>
          </div>
          <div class="col-md-6 left-responsive">
            <h4 style="color:black;">Whats Excluded</h4>
            <hr style="border:2px solid #612f31;">
            <p>- Court fees.</p>
            <p>- Other legal expenses incurred during court proceedings.</p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </section>
    <section class="custom-padding" id="how-it-work" style="background:#fff;">
      <div class="container">
        <div class="row">
          <div class="col-md-6 left-responsive">
            <h4 style="color:black;">Documents for filing a Mutual Consent Divorce</h4>
            <ul>
              <li>1. Personal details and information about the family.</li>
              <li>2. Proof of marriage like the Marriage Certificate, photographs or marriage card.</li>
            </ul>
            <br>
            <h4 style="color:black;">Procedure to file a Divorce by Mutual Consent Petition</h4>
            <ul>
              <li>1. A petition for divorce by mutual consent can be filed by the spouses who have been married for at least 1 year. A joint petition can be filed by hiring a common divorce lawyer who can represent the interests of both the husband and wife.</li>
              <li>2. Once the divorce petition is allowed by the court, the spouses file a joint statement relating to the amount of alimony/maintenance decided, custody of children and division of property.</li>
              <li>3. After the First Motion is filed, the court may order a reconciliation period of 6 months and give the spouses some time to reconsider their decision. However, after the recent judgment in Amardeep Singh vs. Harveen Kaur, the Supreme Court has decided that this ‘cooling-off’ period is not mandatory and a mutual consent divorce can be awarded in just 1 month as well.</li>
              <li>4. Once the cooling-off period is over or an application to waive-off the cooling-off period is filed, the Second Motion is filed and final statement is recorded.</li>
              <li>5. The court awards the decree for mutual divorce to the spouses.</li>
            </ul>
          </div>
          <div class="col-md-6 left-responsive">
            <div class="card">
              <div class="card-container">
                <h4><b>Mutual Consent Divorce</b></h4>
              </div>
            </div>
            <br>
            <div class="card">
              <div class="card-container">
                <h4><b>Important Points On Mutual Divorce</b></h4>
              </div>
            </div>
            <br>
            <div class="card">
              <div class="card-container">
                <h4><b>Latest Judgment On Mutual Divorce</b></h4>
              </div>
            </div>
            <br>
            <div class="card">
              <div class="card-container">
                <h4><b>Tips On Hiring A Divorce Lawyer</b></h4>
              </div>
            </div>
            <br>
            <div class="card">
              <div class="card-container">
                <h4><b>Contested Divorce In India</b></h4>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
         <!-- =-=-=-=-=-=-= Login Form =-=-=-=-=-=-= -->
    <section class="" id="login">
      <div class="container">
      @include('frontend.enquiry.index')
      </div>
      <!-- end container --> 
    </section>
   
      </div>
    </section>
  </div>
</div>
@stop 