<header class="fixed-top scroll-change" data-menu-anima="fade-in">
  <div class="navbar navbar-default mega-menu-fullwidth navbar-fixed-top" role="navigation">
    <div class="navbar-mini scroll-hide">
      <div class="container">
          <div class="nav navbar-nav navbar-left"> <span>&nbsp;<i class="fa fa-phone"></i> +91-9354419320</span>
              <hr />
              <span><a href="mailto:contact@kanoonvala.com"><i class="fa fa-envelope"></i> contact@kanoonvala.com</a></span>
              <hr />
              @if ($logged_in_user)
                  <span>Welcome, {{ $logged_in_user->first_name }}</span>
                  <hr/>
                  <span><a href="{{route('frontend.user.dashboard')}}"><i class="fa fa-home"></i> Dashboard</a></span>
                  <hr />
                  <span><a href="{{route('frontend.auth.logout')}}"><i class="fa fa-sign-out"></i> Logout</a></span>
              @else
                      <span><a href="{{route('frontend.auth.login')}}"><i class="fa fa-sign-in"></i> Sign In</a></span>
                      <hr />
                      <span><a href="{{route('frontend.auth.register')}}"><i class="fa fa-user"></i> Sign Up</a></span> 
              @endif
          </div>
        <div class="nav navbar-nav pull-right">
          <div class="minisocial-group"> <a target="_blank" href="https://www.facebook.com/Kanoonvala-1734079183334384/"><i class="fa fa-facebook first"></i></a> <a target="_blank" href="https://twitter.com/kanoonvala"><i class="fa fa-twitter"></i></a> <a target="_blank" href="http://www.inkedin.com"><i class="fa fa-linkedin"></i></a></div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-main">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle"> <i class="fa fa-bars"></i> </button>
         @if(settings()->logo)
          <a class="navbar-brand" href="{{ route('frontend.index') }}" class="logo"><img src="{{route('frontend.index')}}/img/site_logo/{{settings()->logo}}"></a>
          @else
          <a class="navbar-brand" href="{{ route('frontend.index') }}"> <img class="logo-default" src="{!! asset('assets/images/logo.png') !!}" alt="Kanoonvala" title="Kanoonvala" /></a>
           @endif
      
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right custom-mega-menu">
          <li class="{{ Request::is('/') ? 'active' : '' }}"> <a href="{!! url('/') !!}">Home</a></li>
          <li class="dropdown mega-dropdown {{ Request::segment(1) == 'legal-advice' ? 'active' : '' }}"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Find A Lawyer <span class="caret"></span></a>
            <div class="mega-menu dropdown-menu multi-level row bg-menu">
              <div class="col">
                <h4 class="text-danger"><strong>Personal</strong></h4>
                <ul class="fa-ul no-icons text-s">
                  <li class="{{ Request::segment(2) == 'divorce' ? 'active' : '' }}">
                    <a href="{{ url('search/divorce') }}">Divorce</a>
                  </li>
                  <li class="{{ Request::segment(2) == 'marriage-registration' ? 'active' : '' }}">
                    <a href="{{ url('search/marriage-registration') }}">Marriage Registration</a>
                  </li>
                  <li class="{{ Request::segment(2) == 'family-law' ? 'active' : '' }}">
                    <a href="{{ url('search/family-law') }}">Family Law</a>
                  </li>
                  <li class="{{ Request::segment(2) == 'immigration' ? 'active' : '' }}">
                    <a href="{{ url('search/immigration') }}">Immigration</a>
                  </li>
                  <li class="{{ Request::segment(2) == 'insurance' ? 'active' : '' }}">
                    <a href="{{ url('search/insurance') }}">Insurance</a>
                  </li>
                </ul>
              </div>
              <div class="col">
                <h4 class="text-danger"><strong>Corporate</strong></h4>
                <ul class="fa-ul no-icons text-s">
                  <li class="{{ Request::segment(2) == 'startup' ? 'active' : '' }}">
                    <a href="{{ url('search/startup') }}">Startup</a>
                  </li>
                  <li><a href="{{ url('search/corporate-law') }}">Corporate Law</a></li>
                  <li><a href="{{ url('search/arbitration') }}">Arbitration</a></li>
                  <li><a href="{{ url('search/employment') }}">Employment</a></li>
                  <li><a href="{{ url('search/contract-law') }}">Contract Law</a></li>
                </ul>
              </div>
              <div class="col">
                <h4 class="text-danger"><strong>Property</strong></h4>
                <ul class="fa-ul no-icons text-s">
                  <li><a href="{{ url('search/rera') }}">RERA</a></li>
                  <li><a href="{{ url('search/property-real-estate-law') }}">Property/Real Estate Law</a></li>
                  <li><a href="{{ url('search/ipr') }}">IPR</a></li>
                  <li><a href="{{ url('search/drafting') }}">Drafting</a></li>
                  <li><a href="{{ url('search/taxation-and-duty') }}">Taxation and Duty</a></li>
                </ul>
              </div>
              <div class="col">
                <h4 class="text-danger"><strong>Debt Recovery</strong></h4>
                <ul class="fa-ul no-icons text-s">
                  <li><a href="{{ url('search/cheque-bounce') }}">Cheque Bounce</a></li>
                  <li><a href="{{ url('search/default-or-fraud') }}">Default or Fraud</a></li>
                  <li><a href="{{ url('search/criminal-law') }}">Criminal Law</a></li>
                  <li><a href="{{ url('search/cyber-crime') }}">Cyber Crime</a></li>
                  <li><a href="{{ url('search/consumer-protection') }}">Consumer Protection</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li class="dropdown mega-dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Legal Service <span class="caret"></span></a>
            <div class="mega-menu dropdown-menu multi-level row bg-menu">
              <div class="col">
                <h4 class="text-danger"><strong>Family</strong></h4>
                <ul class="fa-ul no-icons text-s">
                  <li><a href="{{ url('legal-services/mutual-consent-divorce') }}">Mutual Consent Divorce</a></li>
                  <li><a href="{{ url('legal-services/succession-certificate') }}">Succession Certificate</a></li>
                  <li><a href="{{ url('legal-services/draft-registration-will') }}">Draft &amp; Register Will</a></li>
                  <li><a href="{{ url('legal-services/court-marriage') }}">Court Marriage</a></li>
                  <li><a href="{{ url('legal-services/marriage-registration') }}">Marriage Registration</a></li>
                </ul>
              </div>
              <div class="col">
                <h4 class="text-danger"><strong>Property</strong></h4>
                <ul class="fa-ul no-icons text-s">
                  <li><a href="{{ url('legal-services/property-registration') }}">Property Registration</a></li>
                  <li><a href="{{ url('legal-services/legal-notice-to-builder') }}">Legal Notice To Builder</a></li>
                  <li><a href="{{ url('legal-services/draft-registration-gift-deed') }}">Draft &amp; Register Gift Deed</a></li>
                  <li><a href="{{ url('legal-services/residential-rental-aggreement') }}">Residential Rental Agreement</a></li>
                  <li><a href="{{ url('legal-services/complaint-under-rera') }}">Complaint under RERA</a></li>
                </ul>
              </div>
              <div class="col">
                <h4 class="text-danger"><strong>Startup</strong></h4>
                <ul class="fa-ul no-icons text-s">
                  <li><a href="{{ url('legal-services/company-hr-documentation') }}">Company HR Documentation</a></li>
                  <li><a href="{{ url('legal-services/website-policy-and-terms') }}">Website Policy &amp; Terms</a></li>
                  <li><a href="{{ url('legal-services/non-disclosure-agreement') }}">Non Disclosure Agreement</a></li>
                  <li><a href="{{ url('legal-services/founders-agreement-drafting') }}">Founders Agreement Drafting</a></li>
                  <li><a href="{{ url('legal-services/vendor-agreement-drafting') }}">Vendor Agreement Drafting</a></li>
                </ul>
              </div>
              <div class="col">
                <h4 class="text-danger"><strong>Legal Notice</strong></h4>
                <ul class="fa-ul no-icons text-s">
                  <li><a href="{{ url('legal-services/tenant-eviction') }}">Tenant Eviction </a></li>
                  <li><a href="{{ url('legal-services/cheque-bounce-notice') }}">Cheque Bounce Notice</a></li>
                  <li><a href="{{ url('legal-services/consumer-complaint-notice') }}">Consumer Complaint Notice</a></li>
                  <li><a href="{{ url('legal-services/debt-recovery-notice') }}">Debt Recovery Notice</a></li>
                  <li><a href="{{ url('legal-services/refund-of-security-notice') }}">Refund of Security Notice</a></li>
                </ul>
              </div>
            </div>
          </li>
          <li><a href="{{ url('legal/legal-agreements') }}">Legal Agreements</a></li>
          <li><a href="{{ url('legal/for-corporates') }}">For Corporates</a></li>
          <li><a href="{{ url('contactus') }}">Contact Us</a></li>
        </ul>
      </div>
      </div>
    </div>
  </div>
</header>