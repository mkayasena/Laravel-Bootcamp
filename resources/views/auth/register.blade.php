<!doctype html>
<html lang="en">
<head>
    {{-- CSS FILES --}}
    <link rel="stylesheet" href="{{asset('backend/css')}}/bootstrap-docs.css" type="text/css">
    <link rel="stylesheet" href="{{asset('backend/css')}}/prism.css">
    <link rel="stylesheet" href="{{asset('backend/css')}}/app.min.css">
    <link rel="stylesheet" href="{{asset('backend/css')}}/main.core.min.css">
    {{-- CSS FILES --}}

    <meta property="og:title" content="Register - Web Yönetim Paneli">
    <meta property="og:description" content="Görüntülemekte olduğunuz panel Web Yönetim Paneli'dir. Kullanıcı adı ve Kullanıcı Şifreniz ile kayıt olunabilir ve web sisteminiz üzerinde güncelleme, ekleme ve silme işlemlerini yapabilirsiniz.">

    <title>Register - Web Yönetim Paneli</title>
    <meta name="description" content="Görüntülemekte olduğunuz panel Web Yönetim Paneli'dir. Kullanıcı adı ve Kullanıcı Şifreniz ile kayıt olunabilir ve web sisteminiz üzerinde güncelleme, ekleme ve silme işlemlerini yapabilirsiniz.">
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
                                    <h1 class="display-8">Kayıt Ol</h1>
                                    <p class="text-muted mt-4 login-text">Web Yönetim Paneli</p>
                                </div>

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <input type="text" name="username" class="form-control text-center lowercase" autofocus="autofocus" placeholder="Name Surname *">
                                        </div>
                                
                                        <div class="col-md-6 mb-3">
                                            <input type="email" name="email" class="form-control text-center lowercase" autofocus="autofocus" placeholder="Email Address *">
                                        </div>
                                    </div>
                                
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <input type="password" name="password" class="form-control text-center" placeholder="Password *">
                                        </div>
                                
                                        <div class="col-md-6 mb-3">
                                            <input type="password" name="password-again" class="form-control text-center" placeholder="Password Again *">
                                        </div>
                                    </div>
                                
                                    <div class="text-center text-lg-start">
                                        <button type="submit" name="login" id="login-button" class="btn btn-primary" style="width: 100%;">Kayıt ol</button>
                                    </div>
                                
                                    <ul class="list-inline text-center mt-4">
                                        <li class="list-inline-item">Already have an account? <a href="" class="text-red"><b>Sign in</b></a></li>
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