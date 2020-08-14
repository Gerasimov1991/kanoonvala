@extends('frontend.layouts.app')
<!-- Dynamic Tiltile  --> 
@section('title', 'Marriage Registration')
<!-- Page Content --> 
@section('content')
<div class="section-empty no-paddings">
  <div class="section-slider row-8">
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
                        <h1 class="text-white text-l heading_one">Get Marriage Registration Done Online For <br>
      <span>Just INR 7999/-</span></h1>
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
  <section class="page-title">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-7 co-xs-12 text-left">
          <h1>Join Now to Get Marriage Registration</h1>
          <p>Choose an all-inclusive optimum legal solution for your business with Kanoonvala.com!</p>
        </div>
        <!-- end col -->
        <div class="col-md-6 col-sm-5 co-xs-12 text-right"> 
          <!-- <div class="bread">
						<ol class="breadcrumb">
							<li><a href="index.html">Home</a>
							</li>
							<li class="active">Get Marriage Registration</li>
						</ol>
					</div> --> 
          <!-- end bread --> 
        </div>
        <!-- end col --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- =-=-=-=-=-=-= Login Form =-=-=-=-=-=-= -->
  <section class="" id="login">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
          <h2 class="text-center">Get Marriage Registration Done Online</h2>
          <p class="text-center">Submit your details to begin now</p>
          <div class="box-panel"> 
            <!-- form login -->
            <form name="LoginForm" action="#" onsubmit="return login()" method="post">
              <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" placeholder="Your Name" class="form-control">
              </div>
              <div class="form-group">
                <label>Mobile</label>
                <input type="text" name="mobile" placeholder="Your Mobile" class="form-control">
              </div>
              <button name="submit" class="btn btn-primary btn-lg btn-block">Connect Now</button>
              <br>
              <p>No Spam. No Sharing. 100% Confidentiality</p>
            </form>
            <!-- form login --> 
            
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <!-- end container --> 
  </section>
  <section class="custom-padding" id="how-it-work">
    <div class="container">
      <div class="main-heading text-center" style="color:black;">
        <h2>Marriage Registration</h2>
        <div class="slices"><span class="slice"></span><span class="slice"></span><span class="slice"></span>
          <p style="color:black;">A marriage is said to be registered when the marriage certificate is obtained as the legal document making it official that the marriage has taken place. A marriage can be registered when the ceremony has already taken place between two people and the it fulfils all the requisite conditions for a valid marriage. </p>
          <p style="color:black;">The Hindu Marriage Act, 1955 lays down the provisions for marriage registration for Hindus including Buddhists, Jains and Sikhs. The Special Marriage Act, 1954 is the secular law that makes it possible for people from different religions, castes and creed to get married and get their marriage registered.</p>
        </div>
      </div>
      <div class="row">
        <div class="main-heading text-center">
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
  <section class="custom-padding" id="how-it-work">
    <div class="container">
      <div class="main-heading text-center">
        <h2>Indias First Online Case Tracking And Management</h2>
        <div class="slices"><span class="slice"></span><span class="slice"></span><span class="slice"></span>
          <p> Nations first ever tech enabled online case management and tracking tool for your ongoing matters at one single place!</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 left-responsive">
          <h4>End-To-End Case Management</h4>
          <p>Manage your ongoing matters with our state-of-the-art tool for invoice, calendar and task management.</p>
          <h4>Cloud-Based File Management</h4>
          <p>Easily track your files on the go with our double encrypted cloud-based records management system.</p>
          <h4>24*7 Communication Tracking With Dedicated SPOC</h4>
          <p>Connect with your Single Point of Contact any time and track all communications hassle-free.</p>
        </div>
        <div class="col-md-6 left-responsive"> <img src="{!! asset('old-assets/images//track.png') !!}" alt="track"> </div>
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
          <p>A marriage between 2 people of different religions, castes or creeds can be registered under the Special Marriage Act. When the bride and groom have not been married priorly and need to get married first, the process of a court marriage would be applicable. When the marriage ceremony has been performed already, a marriage certificate can be issued after giving a public notice of 30 days. The marriage certificate is issued in 30 days if the Marriage Registrar receives no objections against the notice during this period.</p>
        </div>
        <div class="col-md-6 left-responsive">
          <div class="card">
            <div class="card-container">
              <h4><b>Court Marriage Procedure</b></h4>
            </div>
          </div>
          <br>
          <div class="card">
            <div class="card-container">
              <h4><b>Special Marriage In India</b></h4>
            </div>
          </div>
          <br>
          <div class="card">
            <div class="card-container">
              <h4><b>NRI Marriage Registration</b></h4>
            </div>
          </div>
          <br>
          <div class="card">
            <div class="card-container">
              <h4><b>Fraud As A Ground For Divorce</b></h4>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </section>
  <section class="custom-padding" id="clients">
    <div class="container">       
      <!-- Row -->
      <div class="row">
        <div class="col-md-2 col-xs-6 col-sm-4 client-block">
          <div class="client-item client-item-style-2"> <a title="Client Logo" href="#"> <img alt="Clients Logo" src="{!! asset('old-assets/images/clients/client_5.png')!!}"> </a> </div>
        </div>
        <div class="col-md-2 col-xs-6 col-sm-4 client-block">
          <div class="client-item client-item-style-2"> <a title="Client Logo" href="#"> <img alt="Clients Logo" src="{!! asset('old-assets/images/clients/client_6.png')!!}"> </a> </div>
        </div>
        <div class="col-md-2 col-xs-6 col-sm-4 client-block">
          <div class="client-item client-item-style-2"> <a title="Client Logo" href="#"> <img alt="Clients Logo" src="{!! asset('old-assets/images/clients/client_7.png') !!}"> </a> </div>
        </div>
        <div class="col-md-2 col-xs-6 col-sm-4 client-block">
          <div class="client-item client-item-style-2"> <a title="Client Logo" href="#"> <img alt="Clients Logo" src="{!! asset('old-assets/images/clients/client_8.png') !!}"> </a> </div>
        </div>
        <div class="col-md-2 col-xs-6 col-sm-4 client-block">
          <div class="client-item client-item-style-2"> <a title="Client Logo" href="#"> <img alt="Clients Logo" src="{!! asset('old-assets/images/clients/client_9.png') !!}"> </a> </div>
        </div>
        <div class="col-md-2 col-xs-6 col-sm-4 client-block">
          <div class="client-item client-item-style-2"> <a title="Client Logo" href="#"> <img alt="Clients Logo" src="{!! asset('old-assets/images/clients/client_10.png') !!}"> </a> </div>
        </div>
      </div>
    </div>
  </section>
</div>
</div>
</div>
@stop 