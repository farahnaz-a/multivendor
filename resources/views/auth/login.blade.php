{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}


<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Mon May 31 2021 22:17:14 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6098d6483bd61f6738e9de99" data-wf-site="606be0fc4091bed60a828b5b">
<head>
  <meta charset="utf-8">
  <title>Log in</title>
  <meta content="Log in" property="og:title">
  <meta content="Log in" property="twitter:title">
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
  <div class="page-wrapper">
    <div class="left-page-container">
      <div class="log-left-block">
        <div class="content-wrapper">
          <a href="#" class="brand w-inline-block"><img src="{{ asset('frontend_assets/images/medic-logo.png') }}" width="221" sizes="35px" srcset="{{ asset('frontend_assets/images/medic-logo-p-500.png') }} 500w, {{ asset('frontend_assets/images/medic-logo.png') }} 858w" alt="" class="logo-img"></a>
          <div class="content-box">
            <h1 class="heading-1">The choice of a new generation<br></h1>
            <div class="feature-box"><img src="https://uploads-ssl.webflow.com/5e59340e7bb9af36b79a4c14/5e5b05550e170603cd7a7649_tag.svg" alt="" class="feature-icon">
              <div class="feature-text">It&#x27;s Free.</div>
            </div>
          </div>
          <div class="legal-box _2">
            <div class="legal-text">© 2021 Adwareton. All rights reserved.</div>
          </div>
        </div>
      </div>
    </div>
    <div class="right-page-container">
      <div class="log-right-block">
        <div class="form-wrap">
          <h2 class="sign-up-title">Log in<br></h2>
          <h3 class="signup-sub-title">Use your information to login</h3>
          <div class="form-box">
            <div class="w-form">
              <form id="email-form" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-field-wrapper">

                  <div class="text-field-box _2">
                      <label for="Email" class="field-label-2">Email</label>
                      <input type="email" class="sign-up-field w-input" maxlength="256" name="email" data-name="Email" placeholder="you@email.com" id="Email" required="">
                      @error('email')
                          <small style="color:red;">{{ $message }}</small>
                      @enderror
                    </div>


                  <div class="text-field-box _2">
                      <label for="Password" class="field-label-2">Password</label>
                      <input type="password" class="sign-up-field w-input" maxlength="256" name="password" data-name="Password" placeholder="Password" id="Password" required="">
                      @error('password')
                          <small style="color:red;">{{ $message }}</small>
                      @enderror
                    </div>
                </div>
                <label class="w-checkbox checkbox-field-2">
                  <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox-2"></div>
                  <input type="checkbox" id="Checkbox" name="Checkbox" data-name="Checkbox" required="" style="opacity:0;position:absolute;z-index:-1">
                  <span for="Checkbox" class="terms-text w-form-label">I agree to the <a href="#" class="link-4">Terms &amp; Conditions</a> and <a href="#" class="link-4">Privacy Policy</a>
                </span>
                </label>
                <input type="submit" value="Log in" class="log-in-button w-button">
              </form>
              <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div>
            </div>
            <div class="bottom-text-wrap">
              <div class="sub-text">Don&#x27;t have an account yet? </div>
              <a href="{{ route('register') }}" class="create-link-block">Sign up now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=606be0fc4091bed60a828b5b" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="{{ asset('frontend_assets/js/webflow.js') }}" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>