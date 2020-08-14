@extends('frontend.layouts.app')
<!-- Dynamic Title  --> 
@section('title', 'Company Registration in india at www.kanoonvala.com')
@section('meta_description', 'We are providing Company Registration and help to create business structure')
@section('meta_keywords', 'Register a Trademark, Obtain Director Identification Number in India, Stamp the company documents in India, Get the Certificate of Incorporation India, Obtain a Permanent Account Number in India, company registration in india ')
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
                        <h1 class="text-white text-l heading_one">Company Registration</h1>
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
    Business in India is only relevant when it is registered legally and there are around 9 types of Business in India. The registration of business comes under Companies Act 2013. <a href="https://www.kanoonvala.com/corporate/company-registration">Private Limited Company registration in India</a> is done in the legal website of Kanoonvala. <br>
    <br>
    <h3>The types of business which are actually followed are as:</h3>
    <ul>
      <li>Private Limited Company</li>
      <li>Public Limited Company</li>
      <li>One Person Company</li>
      <li>Limited Liability Partnership (LLP)</li>
      <li>Partnership</li>
      <li>Sole Proprietorship</li>
      <li>Section 8 Company (NPO)</li>
      <li>Nidhi Company</li>
      <li>Producer Company</li>
    </ul>
    The private limited company in <a href="https://kanoonvala.com/corporate/company-registration">Company Registration</a> is the most popular among all the business listed above and that is the reason why is stands at the top of the list. It also carries limited liability qualities that make it more attractive than others types of <a href="https://kanoonvala.com/corporate/company-registration">Online company registration in India</a><br>
    <br>
    <br>
    <h2>Documents Needed for company registration</h2>
    <strong>For All Companies/LLP</strong><br>
    <br>
    For Directors/Shareholders<br>
    <br>
    <ul>
      <li>For Directors/Shareholders</li>
      <li>Identity Proof (Voter Card, Passport, Driving License)</li>
      <li>Address Proof (Bank Statement, Mobile bill, Telephone bill, Electricity Bill)</li>
      <li>Passport Size Photo</li>
    </ul>
    <strong>For Registered Office</strong><br>
    <br>
    For Unregistered Partnership Firm<br>
    <br>
    <ul>
      <li>Application for Registration in the prescribed Form – I.</li>
      <li>Duly filled Specimen of Affidavit.</li>
      <li>Certified copy of the Partnership deed on appropriate non-judicial stamp paper.</li>
      <li>Certified copy of the Partnership deed on appropriate non-judicial stamp paper.</li>
      <li>Affix court fee stamp &amp; payment of prescribed fee for registration by demand draft.</li>
    </ul>
    <br>
    <h2>FAQs</h2>
    QusDoes DSC plays an important role in company formation or <a href="https://kanoonvala.com/corporate/company-registration">company registration?</a><br>
    <br>
    AnsThe digital Signature Certificate is important as it is needed for filling the e-forms of the company set us electronically to Ministry of Corporate Affairs.<br>
    <br>
    QusWhat criteria should one fulfil to become the Company Director?<br>
    <br>
    AnsA person can become a director of a company if he is an Indian Citizen and has completed 18 years of age.<br>
    <br>
    QusHow to choose a company name?<br>
    <br>
    AnsThe company name should be simple and catchy. It is better to check on Google, MCA Guidelines and trade Mark site , the availability of the name.<br>
    <br>
    QusWhat is the role of the director?<br>
    <br>
    AnsThe director is assigned to look after and manage the company. It is the work of the director determines and implements policies and new ideas. The director should be a good decision maker.<br>
    <br>
  </div>
   <!-- =-=-=-=-=-=-= Login Form =-=-=-=-=-=-= -->
    <section class="" id="login">
      <div class="container">
        @include('frontend.enquiry.index')
      </div>
      <!-- end container --> 
    </section>
</div>
@stop 