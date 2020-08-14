@php
    use Illuminate\Support\Facades\Route;
@endphp
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>

    <style>
.model{
  display:block !important;
}
.model-dailog{
  overflow-y:initial !important;
}

.model-body{
  height:250px;
  width:250px;
  overflow-y:auto;
}
</style>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', app_name())</title>
        <link rel="icon" href="/assets/images/favicon.png">
        
        <!-- Meta -->
        <meta name="description" content="@yield('meta_description', 'Kanoonvala')">
        <meta name="author" content="@yield('meta_author', 'Kanoonvala.com')">
        <meta name="keywords" content="@yield('meta_keywords', 'Kanoonvala')">
        @yield('meta')

        <!-- Styles -->
        @yield('before-styles')

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->
        @langrtl
            {{ Html::style(getRtlCss(mix('css/frontend.css'))) }}
        @else
            {{ Html::style(mix('css/frontend.css')) }}
        @endlangrtl
        {!! Html::style('js/select2/select2.min.css') !!}
        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->

       {!! Html::style('assets/scripts/bootstrap/css/bootstrap.css') !!}
       {!! Html::style('assets/scripts/font-awesome/css/font-awesome.css') !!}
       {!! Html::style('assets/css/style.css') !!}
       {!! Html::style('assets/css/skin.css') !!}
        {!! Html::style('assets/css/content-box.css') !!}
        {!! Html::style('assets/css/image-box.css') !!}
        {!! Html::style('assets/css/animations.css') !!}
        {!! Html::style('assets/scripts/flexslider/flexslider.css') !!}
        {!! Html::style('assets/css/custom.css') !!}
        {!! Html::style('assets/css/model.css') !!}

        
        


        @yield('after-styles')

        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
        <?php
            if (!empty($google_analytics)) {
                echo $google_analytics;
            }
        ?>
    </head>
    <body id="app-layout">
    <div id="preloader"><div class="loader" id="loader"></div></div>
        <div id="app"> 
            @if (Auth::check() && (!Request::is('/') && Route::currentRouteName() != "frontend."))
            @include('frontend.includes.after-login-nav')
            @else
            @include('frontend.includes.nav')
            @endif
            
            @include('includes.partials.messages')
            @yield('content')
            @include('frontend.includes.footer')
        </div><!--#app-->

      

        <!-- Scripts -->
        @yield('before-scripts')
        {!! Html::script(mix('js/frontend.js')) !!}
        
        {!! Html::script('js/sweetalert2.all.min.js') !!}

        <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> -->
        
        
        {{ Html::script('js/jquerysession.min.js') }}
        {{ Html::script('js/frontend/frontend.min.js') }}
        {!! Html::script('js/select2/select2.min.js') !!}
        
        {!! Html::script('assets/scripts/script.js') !!}
        {!! Html::script('assets/scripts/bootstrap/js/bootstrap.min.js') !!}
        {!! Html::script('assets/scripts/parallax.min.js') !!}
        {!! Html::script('assets/scripts/flexslider/jquery.flexslider-min.js') !!}
        {!! Html::script('assets/scripts/jquery.progress-counter.js') !!}
        {!! Html::script('assets/scripts/smooth.scroll.min.js') !!}
        <script src="https://malsup.github.io/jquery.form.js"></script>
        {!! Html::script('js/validator.min.js') !!}
        {!! Html::script('js/custom.js') !!}
        
        @yield('after-scripts')
        @yield('page-scripts')
        
        <script type="text/javascript">
            if("{{Route::currentRouteName()}}" !== "frontend.user.account")
            {
                $.session.clear();
            }
        </script>




<script>
    
        $("#forgotform").submit(function(e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.
            var form = $(this);
            var url = form.attr('action');
            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(), // serializes the form's elements.
                success: function(data)
                {
                   if(data.success){
                    if(data.verified){
                   
                    //window.location.href = url('password.reset');

                    window.location.href = '{!! url('reset') !!}';

                    } 
                    //console.log(base_url);
                    $('#pnlopt').show();
                    $('#pnlemail').hide();
                    $('#btnsubmit').val("Verify OTP");
                    
                   }

                   else{
                    $('#pnlopt').hide();
                    $('#pnlemail').show();
                    $('#success').show();
                   }
                },
                error: function(data){
                    alert(data.responseJSON.message);
                }
                });
            });
   
    </script>


<script>
    function myBtn()
    {
        $('#myModal').show();
       
    }
    </script>

    <script>
        function closingmodel()
        {
            $('#myModal').hide();
        }
        </script>
    

   <!-- <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script> -->

        @include('includes.partials.ga')
    </body>
</html>