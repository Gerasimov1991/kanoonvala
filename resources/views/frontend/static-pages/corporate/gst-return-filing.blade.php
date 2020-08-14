@extends('frontend.layouts.app')
<!-- Dynamic Title  --> 
@section('title', 'GST return filling  in india any place at www.kanoonvala.com')
@section('meta_description', 'Kanoovala is  providing GST return facility with our expert financial advisor.')
@section('meta_keywords', ' GST return, retun filing, GST registrastion, GST return filing')
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
                        <h1 class="text-white text-l heading_one">GST Return Filing in India</h1>
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
 
    Business Entities which are registered with the Goods and Services Tax have to provide information of sales, purchased and tax paid to the concerned GST Authorities. It should not be noted that the return fee of tax will only be accepted by the Authorities if the registered company supply the information periodically. <br>
    <br>
    <strong> Process for Filing Returns <br>
    <ul>
      <li>Filing Form GSTR-1 for Monthly details of inwards supplies by 10th of the subsequent month</li>
      <li>Filing Form GSTR-2 for Monthly details of outward supplies by 15th of the subsequent month</li>
      <li>Filing Form GSTR-3 for Monthly Filing of Return on 20th of the subsequent month</li>
      <li>Filing Form GSTR-8 for Annual Filing of Return on 31st December of next financial year</li>
    </ul>
    <br>
    <h2>FAQs</h2>
    QusIs it possible for us to revise the return? <br>
    <br>
    AnsYes it is possible to revise the return.<br>
    <br>
    QusWho has to file the GST Return?<br>
    <br>
    AnsThe entity holder who is registered under the GST has to file for the GST.<br>
    <br>
    QusWhat if the ta is not paid on the due time?<br>
    <br>
    AnsThe taxpayer will be penalized with late fee of Rs.100 per day up to Rs.5000 which the maximum amount.<br>
    <br>
  </div>
</div>
@stop 