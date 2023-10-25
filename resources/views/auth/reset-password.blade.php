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

    <meta property="og:title" content="Reset Password - Web Management Panel">
    <meta property="og:description" content="Görüntülemekte olduğunuz panel Web Management Panel'dir. Kullanıcı adı ve Kullanıcı Şifreniz ile kayıt olunabilir ve web sisteminiz üzerinde güncelleme, ekleme ve silme işlemlerini yapabilirsiniz.">

    <title>Reset Password - Web Management Panel</title>
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

            <div class="logo mb-3 d-block text-center">
                <img src="{{asset('backend/images/logo')}}/logo.png" alt="logo" width="100px">
            </div>

            <div class="card w-75 align-items-center p-5" style="background: rgba(255, 255, 255, 0.6);">
                <div class="col-md-8">

                    <form method="POST" action="{{ route('password.store') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <div class="mb-3">
                            <input type="email" name="email" id="email" class="form-control" autofocus="autofocus" placeholder="Email Address *" required autofocus>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password *" required autofocus>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password *" required autofocus>
                        </div>

                        <div class="text-center text-lg-start">
                            <button type="submit" name="reset-password" id="reset-password" class="btn btn-primary" style="width: 100%;">Reset Password</button>
                        </div>
                        
                    </form>

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