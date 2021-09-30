{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
@csrf

<div>
    <x-jet-label for="name" value="{{ __('Name') }}" />
    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus
        autocomplete="name" />
</div>

<div class="mt-4">
    <x-jet-label for="email" value="{{ __('Email') }}" />
    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
</div>

<div class="mt-4">
    <x-jet-label for="password" value="{{ __('Password') }}" />
    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
        autocomplete="new-password" />
</div>

<div class="mt-4">
    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
        required autocomplete="new-password" />
</div>

@if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
<div class="mt-4">
    <x-jet-label for="terms">
        <div class="flex items-center">
            <x-jet-checkbox name="terms" id="terms" />

            <div class="ml-2">
                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'"
                    class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'"
                    class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                ]) !!}
            </div>
        </div>
    </x-jet-label>
</div>
@endif

<div class="flex items-center justify-end mt-4">
    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
        {{ __('Already registered?') }}
    </a>

    <x-jet-button class="ml-4">
        {{ __('Register') }}
    </x-jet-button>
</div>
</form>
</x-jet-authentication-card>
</x-guest-layout> --}}




<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Mon May 31 2021 22:17:14 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6098cfb1d7715d63feff0a29" data-wf-site="606be0fc4091bed60a828b5b">

<head>
    <meta charset="utf-8">
    <title>Create an Account</title>
    <meta content="Create an Account" property="og:title">
    <meta content="Create an Account" property="twitter:title">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">

    <link href="{{ asset('frontend_assets/css/normalize.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('frontend_assets/css/webflow.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('frontend_assets/css/adwareton.webflow.css') }}" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic",
                    "Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic",
                    "Droid Serif:400,400italic,700,700italic", "Inconsolata:400,700"
                ]
            }
        });

    </script>
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">
        ! function (o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n
                .className += t + "touch")
        }(window, document);

    </script>
    <link href="{{ asset('frontend_assets/images/favicon.png') }}" rel="shortcut icon" type="image/x-icon">
    <link href="{{ asset('frontend_assets/images/webclip.png') }}" rel="apple-touch-icon">
</head>

<body>
    <div class="page-wrapper">
        <div class="left-page-container">
            <div class="sign-up-left-block">
                <div class="content-wrapper">
                    <a href="#" class="brand w-inline-block"><img
                            src="{{ asset('frontend_assets/images/medic-logo.png') }}" width="221" sizes="35px"
                            srcset="{{ asset('frontend_assets//images/medic-logo-p-500.png') }} 500w, {{ asset('frontend_assets/images/medic-logo.png') }} 858w"
                            alt="" class="logo-img"></a>
                    <div class="content-box">
                        <h1 class="heading-1">The choice of a new generation<br></h1>
                        <div class="feature-box"><img
                                src="https://uploads-ssl.webflow.com/5e59340e7bb9af36b79a4c14/5e5b05550e170603cd7a7649_tag.svg"
                                alt="" class="feature-icon">
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
            <div class="sign-up-right-block">
                <div class="sign-up-form-wrap">
                    <h2 class="sign-up-title">Get Started!</h2>
                    <div class="form-box">
                        <h3 class="signup-sub-title">Use your information to register</h3>
                        <div class="w-form">
                            <form id="email-form" action="{{ route('register') }}" data-name="Email Form" method="POST">
                                @csrf
                                <div class="form-field-wrapper">
                                    <div class="text-field-box">
                                        <label for="name" class="field-label-2">Name</label>
                                        <input type="text" class="sign-up-field w-input" maxlength="256" name="name"
                                            data-name="Name" placeholder="Name" id="name" required="">
                                    </div>
                                    <div class="text-field-box"><label for="Name" class="field-label-2">Last
                                            Name</label><input type="text" class="sign-up-field w-input"
                                            maxlength="256" name="last_name" data-name="Name" placeholder="Last Name"
                                            id="Name" required="">
                                            @error('name')
                                                <small style="color:red;">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    <div class="text-field-box _2">
                                        <label for="Email"
                                            class="field-label-2">Email</label>
                                            <input type="email"
                                            class="sign-up-field w-input" maxlength="256" name="email" data-name="Email"
                                            placeholder="you@email.com" id="Email" required="">
                                            @error('last_name')
                                            <small style="color:red;">{{ $message }}</small>
                                        @enderror
                                        </div>
                                    <div class="text-field-box _2">
                                        <label for="Password"
                                            class="field-label-2">Password</label>
                                            <input type="password"
                                            class="sign-up-field w-input" maxlength="256" name="password"
                                            data-name="Password" placeholder="Password" id="Password" required="">
                                            @error('password')
                                            <small style="color:red;">{{ $message }}</small>
                                        @enderror
                                        </div>
                                    <div class="text-field-box _2">
                                        <label for="Password"
                                            class="field-label-2">Confirm Password</label>
                                            <input type="password"
                                            class="sign-up-field w-input" maxlength="256" name="password_confirmation"
                                            data-name="Password" placeholder="Password" id="Password" required="">
                                            @error('password_confirmation')
                                            <small style="color:red;">{{ $message }}</small>
                                        @enderror
                                        </div>
                                </div>
                                    <div class="text-field-box _2">
                                        <label for="Password"
                                            class="field-label-2">Register as</label>
                                            <select
                                            class="sign-up-field w-input" maxlength="256" name="role"
                                            required="">
                                            <option value="">Register as</option>
                                            <option value="user">Customer</option>
                                            <option value="medic">Medic</option>
                                           </select>
                                            @error('role')
                                            <small style="color:red;">{{ $message }}</small>
                                        @enderror
                                        </div>
                                </div>
                                    {{-- <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox-2"></div> --}}
                                     {{-- <input style="display: inline-block;" type="checkbox" id="checkbox" name="checkbox">
                                     <label for="checkbox">I agree to the terms & conditions.</label> --}}
                               
                                <input type="submit" value="Create an Account" data-wait="Please wait..."
                                    class="register-button w-button">
                            </form>
                            <div class="success-message w-form-done">
                                <div>Thank you! Your submission has been received!</div>
                            </div>
                            <div class="w-form-fail">
                                <div>Oops! Something went wrong while submitting the form.</div>
                            </div>
                        </div>
                        <div class="bottom-text-wrap">
                            <div class="sub-text">Already have an account? </div>
                            <a href="{{ route('login') }}" class="create-link-block">Login here</a>
                        </div>
                    </div>
                </div>
                <div class="legal-box _2-copy">
                    <div class="legal-text _3">© 2021 Adwareton. All rights reserved.</div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=606be0fc4091bed60a828b5b"
        type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
    </script>
    <script src="{{ asset('frontend_assets/js/webflow.js') }}" type="text/javascript"></script>
    <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>

</html>
