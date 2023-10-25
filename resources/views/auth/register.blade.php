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

    <meta property="og:title" content="Register - Web Management Panel">
    <meta property="og:description" content="Görüntülemekte olduğunuz panel Web Management Panel'dir. Kullanıcı adı ve Kullanıcı Şifreniz ile kayıt olunabilir ve web sisteminiz üzerinde güncelleme, ekleme ve silme işlemlerini yapabilirsiniz.">

    <title>Register - Web Management Panel</title>
    <meta name="description" content="Görüntülemekte olduğunuz panel Web Management Panel'dir. Kullanıcı adı ve Kullanıcı Şifreniz ile kayıt olunabilir ve web sisteminiz üzerinde güncelleme, ekleme ve silme işlemlerini yapabilirsiniz.">
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
                                    <h1 class="display-8">Sign Up</h1>
                                    <p class="text-muted mt-4 login-text">Web Management Panel</p>
                                </div>

                                <form method="POST" action="{{route('register')}}">
                                    @csrf
                                    <div class="row">
                                        <div class="mb-3">
                                            <input type="text" name="name" id="name" class="form-control text-center text-capitalize" autofocus="autofocus" placeholder="Name Surname *" required autofocus>
                                        </div>
                                
                                        <div class="mb-3">
                                            <input type="email" name="email" id="email" class="form-control text-center" autofocus="autofocus" placeholder="Email Address *" required autofocus>
                                        </div>
                                    </div>
                                
                                    <div class="row">
                                        <div class="mb-3">
                                            <input type="password" name="password" id="password" class="form-control text-center" placeholder="Password *" required autofocus>
                                        </div>
                                
                                        <div class="mb-3">
                                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control text-center" placeholder="Confirm Password *" required autofocus>
                                        </div>
                                    </div>
                                
                                    <div class="text-center text-lg-start">
                                        <button type="submit" name="register" id="register" class="btn btn-primary" style="width: 100%;">Sign Up</button>
                                    </div>
                                
                                    <ul class="list-inline text-center mt-4">
                                        <li class="list-inline-item">Already have an account? <a href="{{route('login')}}" class="text-red"><b>Sign in</b></a></li>
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
    <script src="{{asset('backend/vendor')}}/bundle.js"></script>
    <script src="{{asset('backend/js')}}/prism.js"></script>
    <script src="{{asset('backend/js')}}/app.min.js"></script>
    <script src="{{asset('backend/js')}}/main.core.min.js"></script>
    {{-- /JS FILES --}}

</body>
</html>