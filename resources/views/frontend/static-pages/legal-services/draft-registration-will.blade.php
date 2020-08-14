@extends('frontend.layouts.app')
<!-- Dynamic Tiltile  --> 
@section('title', 'Draft and registration of Will India at www.kanoonvala.com')
@section('meta_description', 'Draft and registration of a Will, draft a power of attorney, Will registration procedure & How to register a will in India? Consult a lawyer from www.kanoonvala.com')
@section('meta_keywords', 'Draft and Registration of Will, How to register a will in India?, Will registration procedure, Stamp paper for will, registration of will after death, Registration of will in Uttar Pradesh, Will draft India, draft sample, draft a power of attorney, joint will format India')
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
                        <h1 class="text-white text-l heading_one">Draft & Register Your Will, Get Your will and expert advoice with in 10 min.</h1>
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
          <h2>Will</h2>
          <div class="slices"><span class="slice"></span><span class="slice"></span><span class="slice"></span>
            <p style="color:black;">Will is a legal document executed by a person enlisting his/her desire regarding the manner in which their property and debts would be executed after their death. A will is a testamentary document that states the names of the people and their share who will receive the property or estate of the person after his/her death. </p>
            <p style="color:black;">The Indian Succession Act, 1929 lays down the laws relating to will registration, execution, alteration and revocation. A person who dies without a will is said to have died intestate and the property or estate of such person would be managed as per the laws of inheritance and succession post their death.</p>
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
            <p>- Telephonic consultation with the lawyer for 30 minutes.</p>
            <p>- Verification of documents.</p>
            <p>- Drafting of Will.</p>
            <p>- Managing the paperwork related to will registration.</p>
            <p>- Registration of will.</p>
          </div>
          <div class="col-md-6 left-responsive">
            <h4 style="color:black;">Whats Excluded</h4>
            <hr style="border:2px solid #612f31;">
            <p>- Court fees.</p>
            <p>- Stamp Duty.</p>
            <p>- Additional legal work related to will registration.</p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </section>
    <section class="custom-padding" id="how-it-work" style="background:#fff;">
      <div class="container">
        <div class="row">
          <div class="col-md-6 left-responsive">
            <h4 style="color:black;">Documents required to make a Will</h4>
            <p>The following documents are needed to register a will in India:</p>
            <ul>
              <li>1. Information about the beneficiaries.</li>
              <li>2. Information about the property and estate.</li>
              <li>3. Details about the debts.</li>
              <li>4. Contact details of the will executor.</li>
            </ul>
            <br>
            <h4 style="color:black;">Procedure to make a Will</h4>
            <p> Once the requisite documents are submitted, the lawyer drafts a will as per your requirements. The will is then reviewed and signed in the presence of at least 2 witnesses. The will can be registered by submitting it to the Registrar or Sub-Registrar that has appropriate jurisdiction along with the prescribed stamp duty. The Registrar registers the will after proper inspection and the will can be executed after the death of the testator. If the Registrar rejects the will, a civil suit can be filed within 30 days from the date of Registrar’s order. </p>
          </div>
          <div class="col-md-6 left-responsive">
            <div class="card">
              <div class="card-container">
                <h4><b>Hindu Undivided Family</b></h4>
              </div>
            </div>
            <br>
            <div class="card">
              <div class="card-container">
                <h4><b>Gift Under Muslim Laws</b></h4>
              </div>
            </div>
            <br>
            <div class="card">
              <div class="card-container">
                <h4><b>Muslim Womans Right To Property</b></h4>
              </div>
            </div>
            <br>
            <div class="card">
              <div class="card-container">
                <h4><b>Succession Certificate</b></h4>
              </div>
            </div>
            <br>
            <div class="card">
              <div class="card-container">
                <h4><b>Selling Property Through GPA</b></h4>
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