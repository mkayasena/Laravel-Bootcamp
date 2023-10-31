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
    <link rel="stylesheet" href="{{asset('backend/css')}}/app.min.css">
    <link rel="stylesheet" href="{{asset('backend/css')}}/main.core.min.css">
    {{-- CSS FILES --}}

    {{--  JQUERY JS LIBRARY --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    {{--  /JQUERY JS LIBRARY --}}

    <meta property="og:title" content="Login - Web Management Panel">
    <meta property="og:description" content="Görüntülemekte olduğunuz panel Web Management Panel'dir. Kullanıcı adı ve Kullanıcı Şifreniz ile giriş yapılabilir ve web sisteminiz üzerinde güncelleme, ekleme ve silme işlemlerini yapabilirsiniz.">

    <title>Login - Web Management Panel</title>
    <meta name="description" content="Görüntülemekte olduğunuz panel Web Management Panel'dir. Kullanıcı adı ve Kullanıcı Şifreniz ile giriş yapılabilir ve web sisteminiz üzerinde güncelleme, ekleme ve silme işlemlerini yapabilirsiniz.">
<head>
<body class="auth">

    {{-- PRELOADER --}}
    <div class="preloader">
        <div class="preloader-icon"></div>
    </div>
    {{-- /PRELOADER --}}

    {{-- LOGIN FORM --}}
    <div class="form-wrapper">
        <div class="container">
            <div class="card" style="background: rgba(255, 255, 255, 0.6);">
                <div class="row g-0">

                    <div class="col">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">

                                <div class="logo mt-3 d-block text-center">
                                    <img src="{{asset('backend/images/logo')}}/logo.png" alt="logo" width="100px">
                                </div>

                                <div class="my-5 d-block text-center">
                                    <h1 class="display-8">Login</h1>
                                    <p class="text-muted mt-4 login-text">Web Management Panel</p>
                                </div>

                                <form method="POST" action="{{route('login')}}">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="email" name="email" id="email" class="form-control text-center lowercase" autofocus="autofocus" placeholder="Email Adress *" required autofocus>
                                    </div>

                                    <div class="mb-3">
                                        <input type="password" name="password" id="password" class="form-control text-center" placeholder="Password *" required autofocus>
                                    </div>

                                    <div class="block mt-4 mb-3">
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                            <span class="ml-2 text-sm text-gray-600">Remember me</span>
                                        </label>
                                    </div>

                                    <div class="text-center text-lg-start">
                                        <button type="submit" name="login" id="login" class="btn btn-primary w-100">Login</button>
                                    </div>

                                    <ul class="list-inline text-center mt-4 d-flex justify-content-between">
                                        @if (Route::has('password.request'))
                                        <li class="list-inline-item"><a href="{{route('password.request')}}" class="text-red"><b>Forgot your password?</b></a></li>
                                        @endif
                                        <li class="list-inline-item">Do you have an account? <a href="{{route('register')}}" class="text-red"><b>Sign up</b></a></li>
                                    </ul>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- /LOGIN FORM --}}

    {{-- JS FILES --}}
    <script src="{{asset('backend/js')}}/main.core.min.js"></script>
    <script src="{{asset('backend/vendor')}}/bundle.js"></script>
    <script src="{{asset('backend/js')}}/prism.js"></script>
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
    {{-- /JS FILES --}}

</body>
</html>