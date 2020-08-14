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
                        <h1 class="text-white text-l heading_one">Indian Kanoon- IPC Section 2 <br>
                          Punishment of offences committed within India</h1>
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
  
<div id="home" class="full-section parallax-home">
  <div class="slider-caption">
    <h2 style="font-size:25px;">Join Kanoonvala Network Of Preferred<br>
      Lawyers And Grow Your Reach Online.</h2>
    <a class="btn btn-transparent" href="#login"> Join Us</a></div>
</div>

<!-- =-=-=-=-=-=-= Login Form =-=-=-=-=-=-= -->
<section class="section-padding-80 white" id="login">
  <div class="container">
    <div class="main-heading text-center" >
      <h2 style="color:black;">Sign Up To Kanoonvala Legal Network</h2>
      <div class="slices"><span class="slice"></span><span class="slice"></span><span class="slice"></span>
        <p style="color:black;"> Send us your details and Join With Us.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
        <div class="box-panel"> 
          <!-- form login -->
          <form name="LoginForm" action="#" onsubmit="return login()" method="post">
            <div class="form-group">
              <label>Full Name</label>
              <input type="text" name="fname"placeholder="Your Full Name" class="form-control">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email"placeholder="Your Email" class="form-control">
            </div>
            <div class="form-group">
              <label>Mobile</label>
              <input type="text" name="mobile" placeholder="Your Mobile" class="form-control">
            </div>
            <button name="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
          </form>
          <!-- form login --> 
          
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
  <!-- end container --> 
</section>
<section class="custom-padding" id="how-it-work" style="background:#fafafa">
  <div class="container">
    <div class="main-heading text-center">
      <h2>How Kanoonvala Network Work For Lawyers</h2>
      <div class="slices"> <span class="slice"></span><span class="slice"></span><span class="slice"></span> </div>
    </div>
    <div class="row">
      <div class="col-sm-4 col-md-4 col-xs-12  center-responsive"> <img src="images/adduser.png" class="img-responsive" alt="">
        <h4><a href="#">Register with Kanoonvala</a></h4>
        <p>Submit your details and get registered with Kanoonvala.</p>
      </div>
      <div class="col-sm-4 col-md-4 col-xs-12 center-responsive get-arrow"> <img src="images/explore.png" class="img-responsive" alt="">
        <h4><a href="#">Build Your Online Practice</a></h4>
        <p>Create your profile and build your online practice for clients.</p>
      </div>
      <div class="col-sm-4 col-md-4 col-xs-12 center-responsive get-arrow"> <img src="images/muser.png" class="img-responsive" alt="">
        <h4><a href="#">Get Connected With Clients</a></h4>
        <p>Connect and communicate with potential clients online.</p>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</section>
<section class="custom-padding" id="how-it-work" style="background:white">
  <div class="container">
    <div class="row">
      <div class="col-md-6 "> <img src="images/problem.png" class="img-responsive text-center" alt="img">
        <h4><a href="#">The Problem</a></h4>
        <p style="color:black">The legal domain in India is yet to become uniform and easily accessible to every individual in the country. The legal industry is hesitant to accept technology as the game-changer, leading to:</p>
        <ul style="color:black">
          <li>1- A disorganised legal industry and no standardisation of legal services.</li>
          <li>2- No defined medium for lawyers to communicate with clients.</li>
          <li>3- Difficulty for lawyers in managing their practice efficiently.</li>
        </ul>
      </div>
      <div class="col-md-6 "> <img src="images/solution.png" class="img-responsive text-center" alt="img">
        <h4><a href="#">The Solution</a></h4>
        <p style="color:black">Technology has brought the world closer, but creating a giant nexus that connects everyone. Even the legal industry is not left untouched by the technological disruption. Harnessing this technology, Kanoonvala offers:</p>
        <ul style="color:black">
          <li>1- A disorganised legal industry and no standardisation of legal services.</li>
          <li>2- No defined medium for lawyers to communicate with clients.</li>
          <li>3- Difficulty for lawyers in managing their practice efficiently.</li>
        </ul>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</section>
<section class="custom-padding" id="how-it-work" style="background:white">
  <div class="container">
    <div class="main-heading text-center">
      <h2>Join Kanoonvala Network Of Top <br>
        Legal Professionals</h2>
    </div>
    <div class="row">
      <div class="col-md-3 text-center " style="border-right:2px solid red;     height: 144px;">
        <h4>Increased Online Reach</h4>
        <hr style="tex-align:center; width:20%; background: red;    border-top: 3px solid #ca1e1e;">
        <p style="color:black">Get access to 10,000+ potential clients looking for urgent legal help.</p>
      </div>
      <div class="col-md-3 text-center " style="border-right:2px solid red;">
        <h4>Brand Building</h4>
        <hr style="tex-align:center; width:20%; background: red;    border-top: 3px solid #ca1e1e;">
        <p style="color:black">Exhibit your forte, experience and achievements with your preferred lawyer profile.</p>
      </div>
      <div class="col-md-3 text-center" style="border-right:2px solid red;">
        <h4>Build Client Trust</h4>
        <hr style="tex-align:center; width:20%; background: red;    border-top: 3px solid #ca1e1e;">
        <p style="color:black">Answer client queries directly and develop client confidence and recognition.</p>
      </div>
      <div class="col-md-3 text-center" >
        <h4>Online Invoicing & Payments</h4>
        <hr style="tex-align:center; width:20%; background: red;    border-top: 3px solid #ca1e1e;">
        <p style="color:black">Timely payments with online invoicing and billing on milestone and monthly basis.</p>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</section>
<section class="custom-padding" id="how-it-work" style="background:linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)),url(https://www.legistify.com/assets/img/banner/about-us.jpg)">
  <div class="container">
    <div class="main-heading text-center" style="color:white">
      <h2 style="color:white">Join Kanoonvala As A Preferred Lawyer</h2>
      <div class="slices"><span class="slice"></span><span class="slice"></span><span class="slice"></span>
        <p style="color:white">Register with Kanoonvala and expand your online reach free of cost!</p
          >
      </div>
    </div>
    <div class="row" style="padding:20px;width:100%;color:white">
      <div class="col-md-3 center-responsive " >
        <h2 style="color:white">300+</h2>
        <h3>CITIES ACROSS INDIA</h3>
      </div>
      <div class="col-md-3 center-responsive" >
        <h2 style="color:white">10000+</h2>
        <h3>HAPPY CUSTOMERS</h3>
      </div>
      <div class="col-md-3 center-responsive" >
        <h2 style="color:white">7000+</h2>
        <h3>REGISTERED LAWYERS</h3>
      </div>
      <div class="col-md-3 center-responsive" >
        <h2 style="color:white">10000+</h2>
        <h3>LEGAL QUERY SOLVED</h3>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</section>
<section class="custom-padding" style="background:white">
  <div class="container">
    <div class="text-center" style="color:black;">
      <h2>Let’s Make Legal Kanoonvala.Affordable.Transparent. Together!</h2>
      <div class="slices"><span class="slice"></span><span class="slice"></span><span class="slice"></span>
        <p style="color:black;">Kanoonvala, India’s leading legal technology platform makes it a matter of few clicks for lawyers and clients to connect. With your lawyer profile, connect with clients directly by answering their queries online and get dedicated litigation support from our relationship manager to manage your practice better.</p
            >
        <p style="color:black;">Kanoonvala does not, in any way advertise or promote any lawyer on its platform. It enables lawyers to have an expanded presence over the internet and clients to find a lawyer online.</p>
      </div>
    </div>
    <div class="row" style="padding:20px;">
      <div class="col-md-12 center-responsive" >
        <button class="btn btn-primary">
        <a href="#login">Join Us</a>
        </button>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</section>
</div>
</div>
@stop 