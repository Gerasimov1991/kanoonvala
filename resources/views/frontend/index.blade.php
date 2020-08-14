@extends('frontend.layouts.app')
@section('title', 'Best legal advice Platform in India at Kanoonvala.com') 
@section('meta_description', 'We are providing the best legal advice marketplace in India, we are associated  more than 700 cities in India , We have 24*7 customer support and looking justice for all')
@section('meta_keywords', 'best Advocate in lucknow, top advocate in delhi,Top lawyer in India, top lawyer in Lucknow, the top lawyer in Delhi, top lawyer in Kanpur, top lawyer in gurugram ')
@section('meta')
<link rel="canonical" href="https://www.kanonvala.com" />
@endsection
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

@section('content')
    <div class="section-empty no-paddings">
        <div class="section-slider row-20 white">
        <div class="flexslider advanced-slider slider visible-dir-nav" data-options="animation:fade">
            <ul class="slides">
            <li data-slider-anima="fade-left" data-time="1000">
                <div class="section-slide">
                <div class="bg-cover" style="background-image:url({!! asset('assets/images/slide1.jpg') !!})"> </div>
                <div class="container">
                    <div class="container-middle">
                    <div class="container-inner text-center">
                        <div class="row">
                        <div class="col-md-12 anima">
                            <h2 class="text-white">Get Legal Advices From Top Lawyers <span>Of India</span></h2>
                        </div>
                        </div>
                        <hr class="space visible-sm" />
                    </div>
                    </div>
                </div>
                </div>
            </li>
            <li data-slider-anima="fade-left" data-time="1000">
                <div class="section-slide">
                <div class="bg-cover" style="background-image:url({!! asset('assets/images/slide2.jpg') !!})"> </div>
                <div class="container">
                    <div class="container-middle">
                    <div class="container-inner text-center">
                        <div class="row">
                        <div class="col-md-12 anima">
                            <h2 class="text-white">Get Advice From Top Lawyers <span> CAs & CS</span></h2>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </li>
            <li data-slider-anima="fade-left" data-time="1000">
                <div class="section-slide">
                <div class="bg-cover" style="background-image:url({!! asset('assets/images/slide3.jpg') !!})"> </div>
                <div class="container">
                    <div class="container-middle">
                    <div class="container-inner text-center">
                        <div class="row">
                        <div class="col-md-12 anima">
                            <h2 class="text-white">Get answers from the  and<span> Our best experts</span></h2>
                        </div>
                        </div>
                        <hr class="space visible-sm" />
                    </div>
                    </div>
                </div>
                </div>
            </li>
            </ul>
        </div>
        </div>
    </div>
    <div class="container">
        <div class="thre_section">
          <div class="row box-steps" data-anima="fade-left" data-timeline="asc">
            <div class="step-item col-md-4 anima"> <span class="step-number">1</span>
              <h3>Talk To A Lawyer</h3>
              <p>Connect with the best lawyers anywhere in India.</p>
            </div>
            <div class="step-item col-md-4 anima"> <span class="step-number">2</span>
              <h3>Get fixed Quotes</h3>
              <p>Get fixed price for legal, CA or CS-related issues.</p>
            </div>
            <div class="step-item col-md-4 anima"> <span class="step-number">3</span>
              <h3>Insta Consult</h3>
              <p>Two Click away to take free legal phone support for India's top lawyers</p>
            </div>
          </div>
        </div>
      </div>
      <div class="section-empty" style="margin-top:0px; top:-40px;">
        <div class="container content pt_0">
          <h1 class="text-center anima fade-top heading_one">Top Lawyers In India</h1>
          <p class="text-center mb50">Consult our most experienced lawyers practicing in more than 700 districts across the country.</p>
          <div class="row">
            @foreach ($topLawyers as $item)
                
            <div class="col-md-3 col-sm-6">
              <div class="advs-box niche-box-team" data-anima="scale-up" data-trigger="hover"> <a href="{{ url('advocate-profile/'.$item->url_slug) }}" class="img-box"> 
              <img class="anima" style="height: 250px; width: 250px;" src="{{asset('uploads/profile/'.$item->profile_image)}}" onerror="this.onerror=null;this.src='images/lawyer.jpg'" title="{{$item->first_name .' '.$item->last_name}}" /> 
              </a>
                <div class="content-box">
                  <h2>{{$item->first_name .' '.$item->last_name}}</h2>
                  <h4>Best lawyer in {{$item->city}}</h4>
                  @if ($item->specialization)
                  <h4>
                    @foreach (explode(',',$item->specialization) as $itm)
                      {{ @$specialization[$itm] }}
                    @endforeach
                  </h4>
                  @endif
                  <p>{{ (strlen($item->about_me) > 100)? substr($item->about_me,0,100).'...': $item->about_me}}<a href="{{ url('advocate-profile/'.$item->url_slug) }}"> Read More</a></p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <!--<div class="section-bg-image parallax-window counter_box" data-natural-height="650" data-natural-width="1920" data-parallax="scroll" data-image-src="/assets/images/kanoonvala_bg.jpg">
        <div class="container content">
          <div class="row proporzional-row">
            <div class="col-md-4 boxed-inverse boxed-border white text-center form-group">
              <h4 class="text-normal">Total Case</h4>
              <h1><i class="fa fa-user-circle-o text-xl"></i></h1>
              <div class="counter-box-simple"> <span class="counter text-xl text-white" data-to="2345"></span> </div>
            </div>
            <div class="col-md-4 boxed-inverse boxed-border white text-center form-group">
              <h4 class="text-normal">Satisfied Case</h4>
              <h1><i class="fa fa-smile-o text-xl"></i></h1>
              <div class="counter-box-simple"> <span class="counter text-xl text-white" data-to="1478"></span> </div>
            </div>
            <div class="col-md-4 boxed-inverse boxed-border white text-center form-group">
              <h4 class="text-normal">Solved Case</h4>
              <h1><i class="fa fa-magic text-xl"></i></h1>
              <div class="counter-box-simple"> <span class="counter text-xl text-white" data-to="1589"></span> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-bg-color legal_news">
        <div class="container content">
          <h1 class="text-center anima fade-top heading_one">Legal News & Blog</h1>
          <p class="text-center mb50">There are many variations of passages of Lorem Ipsum available</p>
          <div class="row">
            <div class="grid-item col-md-6">
              <div class="advs-box advs-box-top-icon-img niche-box-post boxed-inverse" data-anima="scale-rotate" data-trigger="hover">
                <div class="block-infos">
                  <div class="block-data">
                    <p class="bd-day"><a target="_blank" href="https://www.facebook.com/Kanoonvala-1734079183334384/"><i class="fa fa-facebook"></i></a> <a target="_blank" href="https://twitter.com/kanoonvala"><i class="fa fa-twitter"></i></a> <a target="_blank" href="http://www.inkedin.com"><i class="fa fa-linkedin"></i></a></p>
                  </div>
                  <a class="block-comment" href="#">2 <i class="fa fa-comment-o"></i></a> </div>
                <a class="img-box img-scale-up" href="#"><img class="anima" src="/assets/images/legal_news1.jpg" alt="" aid="0.42560302265412275" style="position: relative; transition-duration: 500ms; animation-duration: 500ms; transition-timing-function: ease; transition-delay: 0ms;"></a>
                <div class="advs-box-content">
                  <h2 class="text-m"><a href="#">How To Escape A Cheque Bounce Case In India</a></h2>
                  <div class="tag-row"> <span><i class="fa fa-heart"></i> <a href="#">109</a></span> <span><i class="fa fa-comment-o"></i><a>36</a></span> <span><i class="fa fa-share"></i><a>56</a></span> </div>
                  <p class="niche-box-content">Every day thousands of cheques are deposited with banks across the nation. However, the number of incidents when those cheques bounce in the bank due to an insufficiency of funds or any other reasons is unbelievable! Indian courts are buried under the pressure to deal with more than 2 million of these cheque bounces cases or commonly known as Section 138 case under the NI Act, 1881.</p>
                  <a class="btn btn-md btn-danger mt35" href="#">Read more </a> </div>
              </div>
            </div>
            <div class="grid-item col-md-6">
              <div class="advs-box advs-box-top-icon-img niche-box-post boxed-inverse" data-anima="scale-rotate" data-trigger="hover">
                <div class="block-infos">
                  <div class="block-data">
                    <p class="bd-day"><a target="_blank" href="https://www.facebook.com/Kanoonvala-1734079183334384/"><i class="fa fa-facebook"></i></a> <a target="_blank" href="https://twitter.com/kanoonvala"><i class="fa fa-twitter"></i></a> <a target="_blank" href="http://www.inkedin.com"><i class="fa fa-linkedin"></i></a></p>
                  </div>
                  <a class="block-comment" href="#">2 <i class="fa fa-comment-o"></i></a> </div>
                <a class="img-box img-scale-up" href="#"><img class="anima" src="/assets/images/legal_news2.jpg" alt="" aid="0.42560302265412275" style="position: relative; transition-duration: 500ms; animation-duration: 500ms; transition-timing-function: ease; transition-delay: 0ms;"></a>
                <div class="advs-box-content">
                  <h2 class="text-m"><a href="#">Trademark Registration under Class 11</a></h2>
                  <div class="tag-row"> <span><i class="fa fa-heart"></i> <a href="#">109</a></span> <span><i class="fa fa-comment-o"></i><a>36</a></span> <span><i class="fa fa-share"></i><a>56</a></span> </div>
                  <p class="niche-box-content">A person can register a Trademark under the appropriate Trademark Class to protect his/her brand's m{{ url('terms/terms-of-use') }}ark, logo, slogan, image or word. The Trademark Classes in India are divided into 45 classes in accordance with the Nice Classification. The primary importance of these classes is that the Nice Classification is followed worldwide and Trademark registration for a good or service can be done under the same class in different countries.</p>
                  <a class="btn btn-md btn-danger" href="#">Read more </a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>-->
      <div class="section-empty">
        <div class="container content">
          <h1 class="text-center anima fade-top heading_one">Popular Fixed-Price Legal Services</h1>
          <p class="text-center mb50">No Hidden Costs. End-to-end Legal Solution. Dedicated Relationship Manager.</p>
          <div class="tab-box" data-tab-anima="fade-left">
            <div class="panel active">
              <div class="flexslider carousel outer-navs" data-options="minWidth:250,itemMargin:30,controlNav:false">
                <ul class="slides">
                  <li>
                    <div class="img-box adv-img adv-img-half-content text-left">
                      <div class="price">INR 25000/-</div>
                      <a href="{{ url('legal-services/mutual-consent-divorce') }}" class="img-box img-scale-up"> <img src="/assets/images/legal_service1.jpg" alt="" /> </a>
                      <div class="caption">
                        <h2>Mutual Consent Divorce</h2>
                        <p>File for divorce & get a divorce decree in just 1-8 months.</p>
                      </div>
                      <div class="viewmore"><a href="{{ url('legal-services/mutual-consent-divorce') }}">View More <i class="fa fa-chevron-right"></i></a></div>
                    </div>
                  </li>
                  <li>
                    <div class="img-box adv-img adv-img-half-content text-left">
                      <div class="price">INR 6499/-</div>
                      <a href="{{ url('legal-services/company-hr-documentation') }}" class="img-box img-scale-up"> <img src="/assets/images/legal_service2.jpg" alt="" /> </a>
                      <div class="caption">
                        <h2>Employment Agreement </h2>
                        <p>Get your employment agreement drafted for your employees. </p>
                      </div>
                      <div class="viewmore"><a href="{{ url('legal-services/company-hr-documentation') }}">View More <i class="fa fa-chevron-right"></i></a></div>
                    </div>
                  </li>
                  <li>
                    <div class="img-box adv-img adv-img-half-content text-left">
                      <div class="price">INR 5999/-</div>
                      <a href="{{ url('legal-services/complaint-under-rera') }}" class="img-box img-scale-up"> <img src="/assets/images/legal_service3.jpg" alt="" /> </a>
                      <div class="caption">
                        <h2>Complaint Under RERA </h2>
                        <p>File a complaint against your builder under RERA. </p>
                      </div>
                      <div class="viewmore"><a href="{{ url('legal-services/complaint-under-rera') }}">View More <i class="fa fa-chevron-right"></i></a></div>
                    </div>
                  </li>
                  <li>
                    <div class="img-box adv-img adv-img-half-content text-left">
                      <div class="price">INR 7999/-</div>
                      <a href="{{ url('legal-services/marriage-registration') }}" class="img-box img-scale-up"> <img src="/assets/images/legal_service4.jpg" alt="" /> </a>
                      <div class="caption">
                        <h2>Marriage Registration </h2>
                        <p>Get your marriage registered and get a Marriage Certificate. </p>
                      </div>
                      <div class="viewmore"><a href="{{ url('legal-services/marriage-registration') }}">View More <i class="fa fa-chevron-right"></i></a></div>
                    </div>
                  </li>
                  <li>
                    <div class="img-box adv-img adv-img-half-content text-left">
                      <div class="price">INR 24999/-</div>
                      <a href="{{ url('legal-services/website-policy-and-terms') }}" class="img-box img-scale-up"> <img src="/assets/images/legal_service5.jpg" alt="" /> </a>
                      <div class="caption">
                        <h2>Website Documents & Policies </h2>
                        <p>Get your employment agreement and other website documents. </p>
                      </div>
                      <div class="viewmore"><a href="{{ url('legal-services/website-policy-and-terms') }}">View More <i class="fa fa-chevron-right"></i></a></div>
                    </div>
                  </li>
                  <li>
                    <div class="img-box adv-img adv-img-half-content text-left">
                      <div class="price">INR 2500/-</div>
                      <a href="{{ url('legal-services/cheque-bounce-notice') }}" class="img-box img-scale-up"> <img src="/assets/images/legal_service6.jpg" alt="" /> </a>
                      <div class="caption">
                        <h2>Cheque Bounce Notice </h2>
                        <p>Send a legal notice to the issuer for a cheque bounce matter. </p>
                      </div>
                      <div class="viewmore"><a href="{{ url('legal-services/cheque-bounce-notice') }}">View More <i class="fa fa-chevron-right"></i></a></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-bg-color black_bg">
        <div class="container ">
          <div class="row proporzional-row">
            <div class="col-md-3 boxed text-center white">
              <h2 class="text-normal">About Us</h2>
              <p>We are one of the cardinal Company Registration consultants of India and we have our roots in each and every part of India. We give professional assistance in the legal, financial and advisory terms transforming your issues to in easy and affordable legal services.</p>
            </div>
            <div class="col-md-9 col-sm-12"> <a class="img-box inner img-bubble" href="#"> <span><img src="/assets/images/image-2.png" class="img-responsive" alt="" /></span> <span class="caption-box" data-anima="show-scale"> <span class="caption">We believe in giving you the best solutions and help you effectively in any of your requirements.</span> </span> </a> </div>
          </div>
        </div>
      </div>
      <div class="section-empty">
        <div class="container content">
          <h1 class="text-center anima fade-top heading_one">Popular Business Services</h1>
          <p class="text-center mb50">Select from our top packages for business services needed for your business.</p>
          <div class="row">
            <div class="col-lg-3 col-sm-6 col-xs-12">
              <div class="advs-box advs-box-top-icon-img boxed-inverse text-left"> <a class="img-box lightbox img-scale-up" href="{{ url('corporate/company-registration') }}"> <span><img src="/assets/images/service1.jpg" alt=""></span> </a>
                <div class="advs-box-content">
                  <h3>Start Your Business </h3>
                  <p>Start You Incorporate your business hassle-free. </p>
                  <a href="{{ url('corporate/company-registration') }}" class="btn-text">Read more</a> </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
              <div class="advs-box advs-box-top-icon-img boxed-inverse text-left"> <a class="img-box lightbox img-scale-up" href="{{ url('corporate/one-person-company') }}"> <span><img src="/assets/images/service2.jpg" alt=""></span> </a>
                <div class="advs-box-content">
                  <h3>Shield Your Intellectual Property </h3>
                  <p>There are many variations of passages of Your Intellectual Property. </p>
                  <a href="{{ url('corporate/one-person-company') }}" class="btn-text">Read more</a> </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
              <div class="advs-box advs-box-top-icon-img boxed-inverse text-left"> <a class="img-box lightbox img-scale-up" href="{{ url('corporate/gst-return-filing') }}"> <span><img src="/assets/images/service3.jpg" alt=""></span> </a>
                <div class="advs-box-content">
                  <h3>Annual Compliance Filing </h3>
                  <p>Manage your Annual Compliance Filing. </p>
                  <a href="{{ url('corporate/gst-return-filing') }}" class="btn-text">Read more</a> </div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
              <div class="advs-box advs-box-top-icon-img boxed-inverse text-left"> <a class="img-box lightbox img-scale-up" href="{{ url('corporate/one-person-company') }}"> <span><img src="/assets/images/service4.jpg" alt=""></span> </a>
                <div class="advs-box-content">
                  <h3>Manage Your Business </h3>
                  <p>Conduct your business activities. </p>
                  <a href="{{ url('corporate/one-person-company') }}" class="btn-text">Read more</a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-bg-color no-paddings-y pt40 testimonial_bg">
        <div class="container content">
          <h1 class="text-center anima fade-top heading_one text-white">What Our Happiest Customers Say</h1>
          <div class="row vertical-row">
            <div class="col-md-6">
              <div class="flexslider slider nav-inner nav-right" data-options="controlNav:true,directionNav:false">
                <ul class="slides">
                  <li>
                    <div class="advs-box niche-box-testimonails-cloud">
                      <p><i class="fa fa-quote-left"></i> This is the right place you should hop in if you are planning to have company incorporation. The service I got from Kanoonvala was extremely efficient. They have accomplished the work as per commitment. <i class="fa fa-quote-right"></i></p>
                      <div class="name-box"> <i class="fa text-l circle onlycover"><img src="/assets/images/client1.jpg" class="img-responsive"></i>
                        <h5 class="subtitle">Swapnil Raheja<span class="subtxt">Delhi</span></h5>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="advs-box niche-box-testimonails-cloud">
                      <p><i class="fa fa-quote-left"></i> I wanted a place where I would be guided about the clearance of the legalities as I wanted to start a plant. Kanoonvala made everything very easy and delivered their work to us on time. <i class="fa fa-quote-right"></i></p>
                      <div class="name-box"> <i class="fa text-l circle onlycover"><img src="/assets/images/client2.jpg" class="img-responsive"></i>
                        <h5 class="subtitle">Zia Ur Rehman<span class="subtxt">Delhi</span></h5>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="advs-box niche-box-testimonails-cloud">
                      <p><i class="fa fa-quote-left"></i> There I want to share my experience with you regarding the services Kanoonvala provided and I am really thankful to them. I am from Canada and the dream project I wanted to start in India had to go through some legal issues. <i class="fa fa-quote-right"></i></p>
                      <div class="name-box"> <i class="fa text-l circle onlycover"><img src="/assets/images/client3.jpg" class="img-responsive"></i>
                        <h5 class="subtitle">Ankit Chaudhary<span class="subtxt">Delhi</span></h5>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 text-right" data-anima="fade-right"> <img src="/assets/images/avatar-3.png" alt=""> </div>
          </div>
        </div>
      </div>
      <div class="newsletter">
        <div class="container">
          <div class="row">
            <div class="col-sm-3 form-gruup">
              <div class="title-base text-left">
                <h2 class="text-white"><i class="fa fa-telegram"></i> Newsletter</h2>
              </div>
            </div>
            <div class="col-sm-9 form-gruup">
              <input type="text" class="form-control" placeholder="Please enter your email ID">
              <button type="submit" class="btn btn-lg btn-warning">Submit</button>
            </div>
          </div>
        </div>
      </div>
      <div class="section-empty">
        <div class="container content">
          <div class="row">
            <div class="col-md-3">
              <div class="title-base text-left">
                <hr />
                <h2>Partners</h2>
                <p>Awesome</p>
              </div>
            </div>
            <div class="col-md-9">
              <div class="flexslider carousel outer-navs png-boxed png-over text-center" data-options="numItems:5,minWidth:100,itemMargin:30,controlNav:false,directionNav:true">
                <ul class="slides">
                  <li> <a class="img-box" href="#"> <img src="/assets/images/logos/logo_1.png" alt=""> </a> </li>
                  <li> <a class="img-box" href="#"> <img src="/assets/images/logos/logo_2.png" alt=""> </a> </li>
                  <li> <a class="img-box" href="#"> <img src="/assets/images/logos/logo_3.png" alt=""> </a> </li>
                  <li> <a class="img-box" href="#"> <img src="/assets/images/logos/logo_4.png" alt=""> </a> </li>
                  <li> <a class="img-box" href="#"> <img src="/assets/images/logos/logo_5.png" alt=""> </a> </li>
                  <li> <a class="img-box" href="#"> <img src="/assets/images/logos/logo_6.png" alt=""> </a> </li>
                  <li> <a class="img-box" href="#"> <img src="/assets/images/logos/logo_7.png" alt=""> </a> </li>
                  <li> <a class="img-box" href="#"> <img src="/assets/images/logos/logo_8.png" alt=""> </a> </li>
                  <li> <a class="img-box" href="#"> <img src="/assets/images/logos/logo_1.png" alt=""> </a> </li>
                  <li> <a class="img-box" href="#"> <img src="/assets/images/logos/logo_2.png" alt=""> </a> </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection