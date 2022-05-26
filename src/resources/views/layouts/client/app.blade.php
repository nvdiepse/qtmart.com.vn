<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>QTMart - Hệ thống điện máy thông minh</title>
    {{-- META facebook --}}
    {!! Meta::tag('og:site', asset('images/default-logo.png')) !!}
    {!! Meta::tag('og:rich_attachment', 'true') !!}
    {!! Meta::tag('og:type', 'website') !!}
    {!! Meta::tag('og:url', 'qtmat.com.vn') !!}
    {!! Meta::tag('og:image:width', '800') !!}
    {!! Meta::tag('og:image:height', '354') !!}
    {!! Meta::tag('og:image', asset('images/default-logo.png')) !!}
    {{-- META facebook --}}

    {{-- META HEADER --}}
    {!! Meta::tag('robots') !!}
    {!! Meta::tag('description', '') !!}
    {!! Meta::tag('image', asset('images/default-logo.png')) !!}
    {!! Meta::tag('og:image', asset('images/default-logo.png')) !!}
    {{-- META HEADER --}}
    <meta name="keywords" content="VnExpress, tin tức, tin the gioi, tin nhanh, tin tuc viet nam, doc bao"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('client-theme/assets/css/bootstrap.min.css') }}"
        media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('client-theme/assets/css/font-awesome.min.css') }}"
        media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('client-theme/assets/css/bootstrap-grid.min.css') }}"
        media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('client-theme/assets/css/bootstrap-reboot.min.css') }}"
        media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('client-theme/assets/css/font-techmarket.css') }}"
        media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('client-theme/assets/css/slick.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('client-theme/assets/css/techmarket-font-awesome.css') }}"
        media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('client-theme/assets/css/slick-style.css') }}"
        media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('client-theme/assets/css/animate.min.css') }}"
        media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('client-theme/assets/css/style.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('client-theme/assets/css/colors/blue.css') }}"
        media="all" />
    <!-- Demo Purpose Only. Should be removed in production -->
    <link rel="stylesheet" href="{{ asset('client-theme/assets/css/config.css') }}">
    <link href="{{ asset('client-theme/assets/css/colors/blue.css') }}" rel="alternate stylesheet"
        title="Blue color">
    <link href="{{ asset('client-theme/assets/css/colors/flat-green.css') }}" rel="alternate stylesheet"
        title="Flat Green color">
    <link href="{{ asset('client-theme/assets/css/colors/green.css') }}" rel="alternate stylesheet"
        title="Green color">
    <link href="{{ asset('client-theme/assets/css/colors/orange.css') }}" rel="alternate stylesheet"
        title="Orange color">
    <link href="{{ asset('client-theme/assets/css/colors/red.css') }}" rel="alternate stylesheet" title="Red color">
    <link href="{{ asset('client-theme/assets/css/colors/yellow.css') }}" rel="alternate stylesheet"
        title="Yellow color">
    <!-- Demo Purpose Only. Should be removed in production : END -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('client-theme/assets/images/fav-icon.pn') }}">

    {{-- {!! Meta::tag('robots') !!}
    {!! Meta::tag('site_name', 'My site') !!}
    {!! Meta::tag('url', Request::url()); !!}
    {!! Meta::tag('title', '') !!}
    {!! Meta::tag('description', '') !!}
    {!! Meta::tag('image', asset('images/default-logo.png')) !!}
    {!! Meta::tag('og:image', asset('images/default-logo.png')) !!} --}}



    @yield('js')
</head>

<body class="woocommerce-active page-template-template-homepage-v1 can-uppercase">
    <div id="page" class="hfeed site">
        <div class="top-bar top-bar-v1">
            <div class="col-full">
                <ul id="menu-top-bar-left" class="nav justify-content-center">
                    <li class="menu-item animate-dropdown">
                        <a title="TechMarket eCommerce - Always free delivery" href="contact-v1.html">TechMarket
                            eCommerce &#8211; Always free delivery</a>
                    </li>
                    <li class="menu-item animate-dropdown">
                        <a title="Quality Guarantee of products" href="shop.html">Quality Guarantee of products</a>
                    </li>
                    <li class="menu-item animate-dropdown">
                        <a title="Fast returnings program" href="track-your-order.html">Fast returnings program</a>
                    </li>
                    <li class="menu-item animate-dropdown">
                        <a title="No additional fees" href="contact-v2.html">No additional fees</a>
                    </li>
                </ul>
                <!-- .nav -->
            </div>
            <!-- .col-full -->
        </div>
        <!-- .top-bar-v1 -->
        @yield('client')
        <!-- #content -->
        @include('layouts.client.footer')
        <!-- .site-footer -->
    </div>
    @yield('js')
    <!-- For demo purposes – can be removed on production -->
    <!-- For demo purposes – can be removed on production : End -->
    <script type="text/javascript" src="{{ asset('client-theme/assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('client-theme/assets/js/tether.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('client-theme/assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('client-theme/assets/js/jquery-migrate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('client-theme/assets/js/hidemaxlistitem.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('client-theme/assets/js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('client-theme/assets/js/hidemaxlistitem.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('client-theme/assets/js/jquery.easing.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('client-theme/assets/js/scrollup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('client-theme/assets/js/jquery.waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('client-theme/assets/js/waypoints-sticky.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('client-theme/assets/js/pace.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('client-theme/assets/js/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('client-theme/assets/js/scripts.js') }}"></script>
    <!-- For demo purposes – can be removed on production -->
    <script src="{{ asset('client-theme/switchstylesheet/switchstylesheet.js') }}"></script>
    <!-- For demo purposes – can be removed on production : End -->
</body>

<!-- Mirrored from transvelo.github.io/techmarket-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Mar 2022 12:41:55 GMT -->

</html>
