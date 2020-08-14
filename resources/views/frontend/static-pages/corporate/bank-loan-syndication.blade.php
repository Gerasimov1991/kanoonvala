@extends('frontend.layouts.app')

<!-- Dynamic Tiltile  --> 
@section('title', 'Manage financial Accounts') 
@section('description', 'We are providing financial help for company, small entrepreneurs and professional')
@section('keywords', 'Govermnets lone process, company lone, finacial help for professional')
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
                        <h1 class="text-white text-l heading_one">Bank Loan Syndication</h1>
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
    <h1 class="text-center anima fade-top heading_one">Overview</h1>
    <h2>Bank Loan Syndication</h2>
    Bank Loan Syndication is a loan which is given to the syndicate group which provide financial assistance to the person who needs it. The one who borrows the money can be an organisation, a project or sometimes even Government.<br>
    <br>
    <strong>Features</strong><br>
    <br>
    <ol>
      <li>This loan is granted to a group that is the syndicate who in turn gives financial assistance to a single borrower.</li>
      <li>This loan allows the lender to spread the risk.</li>
      <li>There is a lot of risk in this investment.</li>
      <li>The one who sends the largest amount shall be called as an arranger.</li>
      <li>This type of finance aims to spread risk across multiple lenders.</li>
      <li>The amount granted is not always consistent</li>
      <li>Floating and fixed are two forms of interest for this loan</li>
    </ol>
    <strong>Advantages</strong><br>
    <br>
    <ol>
      <li>Access to large amounts is now possible.</li>
      <li>Can assist in bringing the financial institutes together</li>
      <li>Maximum cooperat6ion between the members of the syndicate.</li>
      <li>The structure and pricing are extremely flexible.</li>
    </ol>
    Kanoonvala with its expertise will be giving you the benefits of the working capital loans for your company at your crucial time. </div>
</div>
@stop 