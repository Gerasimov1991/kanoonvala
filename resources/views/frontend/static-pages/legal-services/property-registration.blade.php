@extends('frontend.layouts.app')
<!-- Dynamic Tiltile  --> 
@section('title', 'Property Registration Lawyer in India | Property Issues India')
@section('meta_description', 'Contact Kanoonvala for property registration Lawyer in India, ancestral property settlement, property disputes among family, illegal possession etc.')
@section('meta_keywords', 'Legal AdviceProperty Registration Lawyer in India Registration Lawyer in India, Succession Certificate Lawyer India, Mutual Consent Divorce Lawyer in India, Legal Lawyer India')
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
                        <h1 class="text-white text-l heading_one">Get Property Registration</h1>
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
          <h2>Property Registration</h2>
          <div class="slices"><span class="slice"></span><span class="slice"></span><span class="slice"></span>
            <p style="color:black;">Property registration is the process of logging or recording the properly executed documents with the Registrar. The documents are the ones relating to the transfer of property for assurance of title and to establish evidence of such transfer. The law relating to property registration in India is laid down under the Registration Act, 108.</p>
            <p style="color:black;">It is mandatory to register the documents relating to sale/purchase or transfer of any immovable property in India. These documents include the Sale Deed, Relinquishment Deed, Gift Deed, etc. Property registration acts as a guarantee that the title of the property is valid and as an evidence in case of property disputes relating to ownership of the property.</p>
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
            <p>-  Lawyer consultation over a telephone call for 30 minutes..</p>
            <p>- Verification of documents.</p>
            <p>- Drafting and filing of documents.</p>
            <p>- Registration of property.</p>
          </div>
          <div class="col-md-6 left-responsive">
            <h4 style="color:black;">Whats Excluded</h4>
            <hr style="border:2px solid #612f31;">
            <p>- Court Fees</p>
            <p>- Stamp Duty to be paid for execution.</p>
            <p>- Registration fees.</p>
            <p>- Additional tasks for property registration.</p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </section>
    <section class="custom-padding" id="how-it-work" style="background:#fff;">
      <div class="container">
        <div class="row">
          <div class="col-md-6 left-responsive">
            <h4 style="color:black;">Documents required for Property Registration</h4>
            <ul>
              <li>1. Copy of parent documents such as the Sale Deed, Title Deed, Conveyance Deed, Gift Deed, Sale/Purchase Agreement, Lease Deed, etc.</li>
              <li>2. Copy of additional documents like the building plan approval, property tax receipts, etc.</li>
              <li>3. Identity proof such as Aadhar card, voter ID card, driving license, passport, etc.</li>
              <li>4. Power of Attorney</li>
            </ul>
            <br>
            <h4 style="color:black;">Procedure for Property Registration</h4>
            <p>Once the documents relating to the property are submitted, the documents along with the relevant details are submitted to the Sub-Registrar which has jurisdiction over the area where the property is situated. The registration fee is submitted and the document is signed by 2 witnesses. Once the prescribed stamp fee is paid, property registration is completed. </p>
          </div>
          <div class="col-md-6 left-responsive">
            <div class="card">
              <div class="card-container">
                <h4><b>Checklist For Buying A Property</b></h4>
              </div>
            </div>
            <br>
            <div class="card">
              <div class="card-container">
                <h4><b>Property Registration Under RERA</b></h4>
              </div>
            </div>
            <br>
            <div class="card">
              <div class="card-container">
                <h4><b>Occupancy Certificate</b></h4>
              </div>
            </div>
            <br>
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