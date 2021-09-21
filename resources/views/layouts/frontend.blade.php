
<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Mon May 31 2021 22:17:14 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="606be0fc4091becb2e828b5d" data-wf-site="606be0fc4091bed60a828b5b">
<head>
  <meta charset="utf-8">
  <title>Adwareton</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  
  <link href="{{ asset('frontend_assets/css/normalize.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('frontend_assets/css/webflow.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('frontend_assets/css/adwareton.webflow.css') }}" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Droid Serif:400,400italic,700,700italic","Inconsolata:400,700"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="{{ asset('frontend_assets/images/favicon.png') }}" rel="shortcut icon" type="image/x-icon">
  <link href="{{ asset('frontend_assets/images/webclip.png') }}" rel="apple-touch-icon">
</head>
<body>
   @if(!Route::is('frontend.about'))
   <div class="hero-section">
    <div class="wrapper">
      <div class="account-wrap">
        @guest
        <a href="{{ route('login') }}" class="sign-in-button gap w-button">Log in</a>
        <a href="{{ route('register') }}" class="sign-in-button w-button">Create New Account</a>
        @endguest
        @auth
        <a href="{{ route('dashboard') }}" class="sign-in-button gap w-button">Dashboard</a>
        <form action="{{ route('logout') }}" method="POST">
            @csrf

            <a href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();" class="sign-in-button  w-button">Logout</a>
        </form>
        @endauth
      </div>
   @endif

      @yield('content')

  
      <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=606be0fc4091bed60a828b5b" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
      <script src="{{ asset('frontend_assets/js/webflow.js') }}" type="text/javascript"></script>
      <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
      <script>
    $(document).ready(function() {
      $('.div-put').last().append($('.blue').clone());
    })
    </script>
      <script>
    $(document).ready(function() {
      $('.booking-block').last().append($('.booking-wrap').clone());
    })
    </script>
    </body>
    </html>