@extends('frontend.layouts.app')
<!-- Dynamic Tiltile  --> 
@section('title', 'Advocate to File Complaint under RERA ')
@section('meta_description', 'kanoonvala.com provide highly experienced Advocate to file Complaint under RERA. Get legal advice now!')
@section('meta_keywords', 'Advocate to File Complaint under RERA, Lawyer for Legal Notice to Builder, Advocate to File Complaint under RERA, Registration Lawyer in India')
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
                        <h1 class="text-white text-l heading_one">Join Now to File Complaint under RERA Online For <br>
                          <span>Just INR 5999/-</span>Choose an all-inclusive optimum legal solution for your business with Kanoonvala.com!</h1>
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
          <h2>Complaint Under RERA</h2>
          <div class="slices"><span class="slice"></span><span class="slice"></span><span class="slice"></span>
            <p style="color:black;">The Real Estate (Regulation and Development) Act, 2016 has been enacted by the Government for the protection of homebuyers against the unfair trade practices of housing development and real estate project developers. Developers have to compulsorily obtain all prerequisite approvals from government bodies before the project can be presented to the public. The developers have to further display all relevant information on the RERA website of the respective states.</p>
            <p style="color:black;">If any developer, promoter or builder of the property doesn’t have the approvals or if s/he has defaulted under the Act in any manner, you may file a complaint before the RERA authorities through the most experienced RERA advocates in your locality.</p>
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
            <p>- 20 minutes introduction call with lawyer to get acquainted and to discuss the work that is to be done together.</p>
            <p>- Documents Checklist</p>
            <p>- Verification of necessary documents</p>
            <p>- Drafting of the RERA complaint</p>
            <p>- Filing of complaint with the appropriate authorities (State RERA Authority)</p>
          </div>
          <div class="col-md-6 left-responsive">
            <h4 style="color:black;">Whats Excluded</h4>
            <hr style="border:2px solid #612f31;">
            <p>- Legal notice to the builder</p>
            <p>-  Court fees or similar expenses</p>
            <p>-  Any other ongoing case regarding the property. You may hire the lawyer separately for any additional proceedings.</p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </section>
    
    <div class="container">
      <div class="row">
        <div class="col-md-6 left-responsive">
          <h4 style="color:black;">Documents required for filing a complaint under RERA</h4>
          <ul>
            <li>1. Agreement to sell</li>
            <li>2. Conveyance Deed, if any</li>
            <li>3. Application form</li>
            <br>
            <h4 style="color:black;">Procedure for filing a complaint under RERA</h4>
            <li>1.  You must hire the top RERA lawyers in your locality to help you file the complaint before the appropriate authority.</li>
            <li>2. The procedure laid down by the State in which the property is located shall be followed.</li>
            <li>3. The fees for filing a complaint about RERA may also vary from state to state.</li>
            <li>4. The complaint must contain details of the name of the complaint, details of the developer, details of the property, amount paid, the relief sought, etc.</li>
          </ul>
		</div>
          <div class="col-md-6 left-responsive">
            <div class="card">
              <div class="card-container">
                <h4><b> RERA Registration</b></h4>
              </div>
            </div>
            <br>
            <div class="card">
              <div class="card-container">
                <h4><b>RERA Certificates</b></h4>
              </div>
            </div>
            <br>
            <div class="card">
              <div class="card-container">
                <h4><b>Aggrieved Home Buyers</b></h4>
              </div>
            </div>
            <br>
            <div class="card">
              <div class="card-container">
                <h4><b>RERA & Consumer Protection</b></h4>
              </div>
            </div>
            <br>
            <div class="card">
              <div class="card-container">
                <h4><b>Remedies Against Builders</b></h4>
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
</div>
@stop 