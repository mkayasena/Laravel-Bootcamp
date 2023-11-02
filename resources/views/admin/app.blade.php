<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=0">
    <meta name="author" content="laravel bootcamp">
    <meta name="publisher" content="Visual Studio Code 2023">
    <meta name="robots" content="all, follow">
	<meta name="revisit-after" content="3">
    <meta http-equiv="X-UA Compatible" content="IE=edge">
    <meta http-equiv="Content Language" content="tr">
    <link rel="shortcut icon" href="{{asset('backend/images/logo')}}/favicon.png" />

    {{-- CSS FILES FOR FONTS --}}
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&amp;display=swap">
    {{-- CSS FILES FOR FONTS --}}

    {{-- CSS FILES --}}
    <link rel="stylesheet" href="{{asset('backend/icons')}}/bootstrap-icons-1.4.0/bootstrap-icons.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('backend/css')}}/bootstrap-docs.css" type="text/css">
    <link rel="stylesheet" href="{{asset('backend/vendor')}}/slick/slick.css" type="text/css">
    <link rel="stylesheet" href="{{asset('backend/css')}}/app.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('backend/css')}}/main.core.min.css" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" type="text/css"/>

    {{-- CSS FILES --}}

    {{--  JQUERY JS LIBRARY --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{asset('backend/vendor')}}/ckeditor/ckeditor.js"></script>
    {{--  /JQUERY JS LIBRARY --}}

    <meta property="og:title" content="laravel">
    <meta property="og:description" content="laravel bootcamp">

    <title> Web Management Panel </title>
    <meta name="description" content="laravel bootcamp">
</head>

<body>
    <div class="preloader">
        <img src="{{asset('backend/images/logo')}}/logo.png" alt="logo">
        <div class="preloader-icon"></div>
    </div>

    <div class="menu">
        @include('admin.body.nav_header')
        @include('admin.body.sidebar')
    </div>

    <div class="layout-wrapper">

        {{-- header --}}
        @include('admin.body.header')
        {{-- ./ header --}}

        {{-- content --}}
        @yield('admin')
        {{-- ./ content --}}

        {{-- content-footer --}}
        @include('admin.body.footer')
        {{-- ./ content-footer --}}

    </div>

    {{-- JS FILES --}}
    <script src="{{asset('backend/js')}}/main.core.min.js"></script>
    <script src="{{asset('backend/vendor')}}/bundle.js"></script>
    <script src="{{asset('backend/vendor')}}/charts/apex/apexcharts.min.js"></script>
    <script src="{{asset('backend/vendor')}}/slick/slick.min.js"></script>
    <script src="{{asset('backend/js')}}/examples/dashboard.js"></script>
    <script src="{{asset('backend/js')}}/app.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if(Session::has('message'))
        var type="{{Session::get('alert-type','info')}}"
        switch (type)
        {
            case 'info':
                toastr.info("{{Session::get('message')}}");
                break;
    
            case 'success':
                toastr.success("{{Session::get('message')}}");
                break;
    
            case 'warning':
                toastr.warning("{{Session::get('message')}}");
                break;
    
            case 'error':
                toastr.error("{{Session::get('message')}}");
                break;
        }
        @endif

    </script>
    {{-- JS FILES --}}
</body>

</html>