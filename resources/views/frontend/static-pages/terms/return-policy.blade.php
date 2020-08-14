@extends('frontend.layouts.app')
<!-- Dynamic Tiltile  -->
@section('title', 'Family Law')
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
                        <h1 class="text-white text-l heading_one">RETURN POLICY</h1>
                        <p>Last updated June 03, 2020</p>
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
    <h2 style="color:black;text-align:center;">RETURN POLICY</h2>
    <p>Thank you for your purchase. We hope you are happy with your purchase. However, if you are not completely
      satisfied with your purchase for any reason, you may return it to us for a full refund, store credit, or an
      exchange. Please see below for more information on our return policy.</p>

    <h4>RETURNS</h4>
    <p>All returns must be postmarked within two days of the purchase date. All returned items must be in new and unused
      condition, with all original tags and labels attached.</p>

    <h4>RETURN PROCESS</h4>
    <p>To return an item, place contact our customer support team, he will assist about refund, in case you didn't get
      legal advice or advocate is not available for call/video/ physical meeting then only customers are eligible for
      refund, please call our support team he will be arrange meeting again in case not happen then we will refund your
      consulting fee.return happen as my subsidiary payment handling company “SunSine International”</p>

    <h4>REFUNDS</h4>
    <p>After receiving your return and inspecting the condition of your item, we will process your return. Please allow
      at least fifteen days from the receipt of your item to process your return.</p>
    <h4>EXCEPTIONS</h4>
    <p>For defective or damaged products, please contact us at the customer service number below to arrange a refund or
      exchange. </p>
    <h4>QUESTIONS</h4>
    <p>If you have any questions concerning our return policy, please contact us at: contact@kanoonvala.com</p>
  </div>
</div>
@stop