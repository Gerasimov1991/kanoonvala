@extends('frontend.layouts.app')
<!-- Dynamic Tiltile  --> 
@section('title', 'Manage all type of financial accounting') 
@section('meta_description', 'We are manging all type of financial accounting followed by all organisations ')
@section('meta_keywords', 'Manage financial accounting, company account manage, company financial accounting ')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')
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
                        <h1 class="text-white text-l heading_one">Accounting and Book Keeping</h1>
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
   <p>The techniques of keeping the financial accounts are followed by all organisations. It helps to keep a note on the financial affairs. Maintaining the accounts of the company gives the detailed information of financial outsource and the insource of the company. If any organisation fails to keep the account of the assets, liabilities or cash flow, it can face disintegration of the company. This is the backbone of any kind of business. Keeping the record of the financial transaction helps at the time of paying the income tax to the department of the Ministry of Corporate Affairs.</p>
    <p>Maintaining the account can be unexciting but not meaningless and sometimes it is also expensive affair but keeping this record will help at the time of tax paying to the IT Department. This also creates an impression on how the business is running to the promoters and shareholders.</p>
    <h2>FAQs</h2>
    <p>QusWhat is the procedure of maintain the account?</p>
    <p>AnsThe data has to be collected from the client via mail or in hard copy and then it the book of accounts will be created.</p>
    <p>QusHow can Kanoonvala.com Help?</p>
    <p>AnsWe will provide you services of accounting, bookkeeping, accounting systems automation and integration, Controller level services, CFO Level Services and Payroll. If you are in need of an expert's help who can look after your book of accounts or to process the payroll payments, you are at the right place.</p>
  </div>
</div>
@stop 