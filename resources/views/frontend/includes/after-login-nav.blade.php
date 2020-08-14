<header class="fixed-top scroll-change" data-menu-anima="fade-in">
    <div class="navbar navbar-default mega-menu-fullwidth navbar-fixed-top" role="navigation">
      <div class="navbar-mini scroll-hide">
        <div class="container">
          <div class="nav navbar-nav navbar-left pb10 pull-right text-right"> 
            @if ($logged_in_user)  
            <span><a href="{{route('frontend.auth.logout')}}" class="text-danger"><i class="fa fa-sign-out"></i> Sign Out</a></span> 
            @else
                      <span><a href="{{route('frontend.auth.login')}}"><i class="fa fa-sign-in"></i> Sign In</a></span>
                      <hr />
                      <span><a href="{{route('frontend.auth.register')}}"><i class="fa fa-user"></i> Sign Up</a></span> 
              @endif
          </div>

        </div>
      </div>
      <div class="navbar navbar-main">
        <div class="container">
          <div class="navbar-header admin_header">
            <div class="row">
              <div class="col-xs-6">
                @if(settings()->logo)
                <a class="navbar-brand" href="{{ route('frontend.index') }}" class="logo"><img src="{{route('frontend.index')}}/img/site_logo/{{settings()->logo}}"></a>
                @else
                <a class="navbar-brand" href="{{ route('frontend.index') }}"> <img class="logo-default" src="/assets/images/logo.png" alt="Kanoonvala" title="Kanoonvala" /></a>
                 @endif

              </div>
              <div class="col-xs-6 text-right">
                <div class="admin_user"><span>Welcome {{ $logged_in_user->first_name.' '.$logged_in_user->last_name }}</span> <img src="{{ $logged_in_user->profile_image? URL::asset('uploads/profile/'.$logged_in_user->profile_image) :'/assets/images/client1.jpg' }}"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header> 