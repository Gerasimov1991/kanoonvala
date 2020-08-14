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
    <h2 style="color:black;text-align:center;"><i class="fa fa-book" aria-hidden="true" style="color:#a94442;font-size:30px;"></i>Provision</h2>
    <p style="color:black;">Every person shall be liable to punishment under this Code and not otherwise for every act or omission contrary to the provisions thereof, of which he shall be guilty within [India]</p>
    <hr>
    <h2 style="color:black;text-align:center;"><i class="fa fa-lightbulb-o" aria-hidden="true" style="color:#a94442;font-size:30px;"></i> Simply put</h2>
    <p style="color:black;">Whosoever found guilty of such an offence or omits an act which are mentioned in the Indian Penal Code, shall be liable for punishment under this code.</p>
    <hr>
    <h2 style="color:black;text-align:center;">You might like reading these</h2>
    <br>
    <div class="col-md-12 card" style="margin-top: 75px;padding:20px;">
      <div class="heading text-center">
        <h3 style="color:black;">IPC Section 3</h3>
        <hr>
      </div>
      <h3 style="color:black;">Punishment of offences committed beyond, but which by law maybe tried within, India.</h3>
      <p style="color:black;">Any person liable, by any [Indian law], to be tried for an offence committed beyond [India] shall be dealt with according to the
        provisions of this Code for any act committed beyond [India] in the same manner as if such act had been committed within [India]...</p>
      <br>
      <p><a href="ipc-section-3.html">Read More </a><i class="fa fa-chevron-up" aria-hidden="true" style="font-size:15px;color:red;"></i></p>
    </div>
    <br>
    <div class="col-md-12 card">
      <div class="heading text-center" style="margin-top: 75px;padding:20px;">
        <h3 style="color:black;">IPC Section 4</h3>
        <hr>
      </div>
      <h3 style="color:black;">Extension of Code to extra-territorial offences</h3>
      <p style="color:black;">The provisions of this Code apply also to any offence committed by--  [(1) any citizen of India in any place without and beyond 
        India;  (2) any person on any ship or aircraft registered in India wherever it may be. (3) any person in any place without and beyond India committing offence 
        targeting a computer resource located in India. ] ...</p>
      <br>
      <p><a href="ipc-section-4.html">Read More </a><i class="fa fa-chevron-up" aria-hidden="true" style="font-size:15px;color:red;"></i></p>
    </div>
    <br>
    <div class="col-md-12 card">
      <div class="heading text-center" style="margin-top: 75px;padding:20px;">
        <h3 style="color:black;">IPC Section 5</h3>
        <hr>
      </div>
      <h3 style="color:black;">Certain laws not to be affected by this Act</h3>
      <p style="color:black;">Nothing in this Act shall affect the provisions of any Act for punishing mutiny and desertion of officers, soldiers,
        sailors or airmen in the service of the Government of India or the provision of any special or local law....</p>
      <br>
      <p><a href="ipc-section-5.html">Read More </a><i class="fa fa-chevron-up" aria-hidden="true" style="font-size:15px;color:red;"></i></p>
    </div>
    <br>
      <div class="heading text-center" style="margin-top: 75px;padding:20px;">
        <h3 style="color:black;">IPC Section 6</h3>
        <hr>
      </div>
      <h3 style="color:black;">Definitions in the Code to be understood subject to exceptions</h3>
      <p style="color:black;">Throughout this Code every definition of an offence, every penal provision and every illustration of every such definition or penal provision, 
        shall be understood subject to the exceptions contained in the Chapter entitled "General Exceptions", though those exceptions are not repeated in such definition, penal provision, or illustration....</p>
      <br>
      <p><a href="ipc-section-6.html">Read More </a><i class="fa fa-chevron-up" aria-hidden="true" style="font-size:15px;color:red;"></i></p>

  </div>
</div>
@stop 