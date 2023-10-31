<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Laravel Bootcamp | Personal Portfolio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/png" href="{{asset('backend/images/logo')}}/favicon.png" />

    {{-- CSS FILES --}}
    <link rel="stylesheet" href="{{asset('frontend/assets/css')}}/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend/assets/css')}}/animate.min.css">
    <link rel="stylesheet" href="{{asset('frontend/assets/css')}}/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('frontend/assets/css')}}/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{asset('frontend/assets/css')}}/slick.css">
    <link rel="stylesheet" href="{{asset('frontend/assets/css')}}/default.css">
    <link rel="stylesheet" href="{{asset('frontend/assets/css')}}/style.css">
    <link rel="stylesheet" href="{{asset('frontend/assets/css')}}/responsive.css">
    {{-- /CSS FILES --}}
</head>
<body>

    <div id="preloader">
        <div class="rasalina-spin-box"></div>
    </div>

    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>

    @include('frontend.body.header')

    <main>
        @yield('main')
    </main>
    
    @include('frontend.body.footer')

    {{-- JS FILES --}}

    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{asset('frontend/assets/js')}}/vendor/jquery-3.6.0.min.js"></script>
    <script src="{{asset('frontend/assets/js')}}/bootstrap.min.js"></script>
    <script src="{{asset('frontend/assets/js')}}/isotope.pkgd.min.js"></script>
    <script src="{{asset('frontend/assets/js')}}/imagesloaded.pkgd.min.js"></script>
    <script src="{{asset('frontend/assets/js')}}/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('frontend/assets/js')}}/element-in-view.js"></script>
    <script src="{{asset('frontend/assets/js')}}/slick.min.js"></script>
    <script src="{{asset('frontend/assets/js')}}/ajax-form.js"></script>
    <script src="{{asset('frontend/assets/js')}}/wow.min.js"></script>
    <script src="{{asset('frontend/assets/js')}}/plugins.js"></script>
    <script src="{{asset('frontend/assets/js')}}/main.js"></script>

    {{-- /JS FILES --}}
</body>

</html>
