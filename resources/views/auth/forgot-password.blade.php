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

    <meta property="og:title" content="Forgot Password - Web Management Panel">
    <meta property="og:description" content="Görüntülemekte olduğunuz panel Web Management Panel'dir. Kullanıcı adı ve Kullanıcı Şifreniz ile giriş yapılabilir ve web sisteminiz üzerinde güncelleme, ekleme ve silme işlemlerini yapabilirsiniz.">

    <title>Forgot Password - Web Management Panel</title>
<head>
<body class="auth">

    {{-- PRELOADER --}}
    <div class="preloader">
        <div class="preloader-icon"></div>
    </div>
    {{-- /PRELOADER --}}

    <div class="form-wrapper">
        <div class="container">
            <div class="card w-75" style="background: rgba(255, 255, 255, 0.6);">
                <div class="d-flex justify-content-center">
                    <div class="col-md-6">
                        <div class="logo mt-3 d-block text-center">
                            <img src="{{asset('backend/images/logo')}}/logo.png" alt="logo" width="100px">
                        </div>

                        <div class="my-5 d-block">
                            <p class="text-muted mt-4 login-text">
                                That's okay, happens to the best of us. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
                            </p>
                        </div>

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="mb-3">
                                <input type="email" name="email" id="email" class="form-control lowercase" autofocus="autofocus" placeholder="Email Adress *" required autofocus>
                            </div>

                            <div class="mb-5 text-center text-lg-start">
                                <button type="submit" name="reset" id="reset" class="btn btn-primary w-100">Email Password Reset Link</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- JS FILES --}}
    <script src="{{asset('backend/vendor')}}/bundle.js"></script>
    <script src="{{asset('backend/js')}}/prism.js"></script>
    <script src="{{asset('backend/js')}}/app.min.js"></script>
    <script src="{{asset('backend/js')}}/main.core.min.js"></script>
    {{-- /JS FILES --}}

</body>
</html>