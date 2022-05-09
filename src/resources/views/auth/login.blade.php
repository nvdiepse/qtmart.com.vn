<!DOCTYPE html>
<html lang="en">

<head>
    <title>Adminty - Premium Admin Template by Colorlib </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->

    <link rel="icon" src="{{ asset('libraries\assets\images\favicon.ico')}}" type="image/x-icon">
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" src="{{ asset('libraries\bower_components\bootstrap\css\bootstrap.min.css') }}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" src="{{ asset('libraries\assets\icon\themify-icons\themify-icons.css') }}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" src="{{ asset('libraries\assets\icon\icofont\css\icofont.css') }}">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" src="{{ asset('libraries\assets\pages\flag-icon\flag-icon.min.css') }}">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" src="{{ asset('libraries\assets\pages\menu-search\css\component.css') }}">
    <!-- Stylesheets -->
    <link rel="stylesheet" src="{{ asset('libraries\assets\pages\multi-step-sign-up\css\reset.min.css') }}">
    <link rel="stylesheet" src="{{ asset('libraries\assets\pages\multi-step-sign-up\css\style.css') }}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" src="{{ asset('libraries\assets\css\style.css') }}">


</head>

<body class="multi-step-sign-up">
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
            <div class="ring"><div class="frame"></div></div>
        </div>
    </div>
</div>
<!-- Pre-loader end -->
<form id="msform">
    <!-- progressbar -->
    <ul id="progressbar">
        <li class="active">Account Setup</li>
        <li>Social Profiles</li>
        <li>Personal Details</li>
    </ul>
    <!-- fieldsets -->
    <fieldset>
        <img class="logo" src="{{ asset('libraries\assets\images\logo-blue.png')}}" alt="logo.png">
        <h2 class="fs-title">Sign up</h2>
        <h3 class="fs-subtitle">Let’s have a new beginning. Sign up for new you</h3>
        <div class="input-group">
            <input type="text" class="form-control" name="username" placeholder="Username">
        </div>
        <div class="input-group">
            <input type="text" class="form-control" name="email" placeholder="Email">
        </div>
        <div class="input-group">
            <input type="password" class="form-control" name="pass" placeholder="Password">
        </div>
        <div class="input-group">
            <input type="password" class="form-control" name="cpass" placeholder="Confirm Password">
        </div>
        <button type="button" name="next" class="btn btn-primary next" value="Next">Next</button>
    </fieldset>
</form>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="{{ asset('libraries\bower_components\jquery\js\jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('libraries\bower_components\jquery-ui\js\jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('libraries\bower_components\popper.js\js\popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('libraries\bower_components\bootstrap\js\bootstrap.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('libraries\bower_components\jquery-slimscroll\js\jquery.slimscroll.js') }}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{ asset('libraries\bower_components\modernizr\js\modernizr.js') }}"></script>
<script type="text/javascript" src="{{ asset('libraries\bower_components\modernizr\js\css-scrollbars.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="{{ asset('libraries\assets\pages\multi-step-sign-up\js\main.js') }}"></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="{{ asset('libraries\bower_components\i18next\js\i18next.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('libraries\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('libraries\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('libraries\bower_components\jquery-i18next\js\jquery-i18next.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('libraries\assets\js\common-pages.js') }}"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
</body>

</html>

{{--<div class="authentication-wrapper authentication-basic container-p-y">--}}
{{--    <div class="authentication-inner">--}}
{{--        <form id="msform">--}}
{{--            <fieldset>--}}
{{--                <img class="logo" src="{{ asset('libraries\assets\images\logo-blue.png')}}" alt="logo.png">--}}
{{--            </fieldset>--}}
{{--            <fieldset>--}}
{{--                <form method="POST" action="{{ route('login') }}">--}}
{{--                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                    @error('email')--}}
{{--                    <span class="invalid-feedback" role="alert">--}}
{{--                        <strong>{{ $message }}</strong>--}}
{{--                    </span>--}}
{{--                    @enderror--}}

{{--                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                    @error('password')--}}
{{--                    <span class="invalid-feedback" role="alert">--}}
{{--                        <strong>{{ $message }}</strong>--}}
{{--                    </span>--}}
{{--                    @enderror--}}

{{--                    <button type="submit" class="btn btn-primary">--}}
{{--                        {{ __('Login') }}--}}
{{--                    </button>--}}
{{--                </form>--}}
{{--            </fieldset>--}}
{{--        </form>--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-md-8">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header">{{ __('Login') }}</div>--}}

{{--                        <div class="card-body">--}}
{{--                            <form method="POST" action="{{ route('login') }}">--}}
{{--                                @csrf--}}

{{--                                <div class="form-group row">--}}
{{--                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                                    <div class="col-md-6">--}}

{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="form-group row">--}}
{{--                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                                    <div class="col-md-6">--}}

{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="form-group row">--}}
{{--                                    <div class="col-md-6 offset-md-4">--}}
{{--                                        <div class="form-check">--}}
{{--                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                            <label class="form-check-label" for="remember">--}}
{{--                                                {{ __('Remember Me') }}--}}
{{--                                            </label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="form-group row mb-0">--}}
{{--                                    <div class="col-md-8 offset-md-4">--}}


{{--                                        @if (Route::has('password.request'))--}}
{{--                                            <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                                {{ __('Forgot Your Password?') }}--}}
{{--                                            </a>--}}
{{--                                        @endif--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
