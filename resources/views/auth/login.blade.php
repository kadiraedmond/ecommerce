<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>AuRabais - Login</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/images/favicon.jpeg')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="{{ asset ('admin/css/style.css') }}" rel="stylesheet">
    
</head>

<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!-- <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="index.html">
                                <div class="row">
                                <div class="col"></div>
                                <div class="col">
                                <img src="{{ asset('front/images/logo.jpeg') }}" alt="" style="width:175px; heigth:87px; ">
                                </div>
                                <div class="col"></div>
                            </div>
                                </a>
                                <div class="row">
                                <div class="col"></div>
                                <div class="col">
                                  <H3 style="margin-top: 37px;">CONNEXION</H3>
                                </div>
                                <div class="col"></div>
                            </div>
        
                                <form class="mt-5 mb-5 login-input" method="POST" action="{{ route('login') }}">
                                @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control"type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <button class="btn login-form__btn submit w-100" style="background-color:#f05925;">S'identifier</button>
                                </form>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                <p class="mt-5 login-form__footer">Vous n'avez pas de compte? <a href="{{ route('register') }}" class="text-primary">S'inscrire</a> maintenant</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
                <div class="card rounded-3 text-black">
                <div class="row g-0">
                    <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">

                        <div class="text-center">
                            <a href="{{url('/')}}">
                                <img src="{{ asset('front/images/logo.jpeg') }}"
                                    style="width: 185px;" alt="logo">
                            </a>
                        <h4 class="mt-1 mb-5 pb-1"> </h4>
                        </div>

                        <form class="login-input" method="POST" action="{{ route('login') }}">
                        @csrf
                        <p>Veuillez vous connecter ?? votre compte</p>

                        <div class="form-outline mb-4">
                            <input type="email" id="form2Example11" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder=" email address" />
                            <label class="form-label" for="form2Example11"></label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" id="form2Example22" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  placeholder="Password"  />
                            <label class="form-label" for="form2Example22"> </label>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="text-center pt-1 mb-5 pb-1">
                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 login-form__btn submit">S'identifier</button>
                            @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                            @endif
                        </div>

                        <div class="d-flex align-items-center justify-content-center pb-4">
                            <p class="mb-0 me-2">Vous n'avez pas de compte?</p>
                            <a href="{{ route('register') }}">
                            <button type="button" class="btn btn-outline-danger">Cr??er un nouveau</button>
                            </a>
                        </div>

                        </form>

                    </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                        <img src="{{ asset('front/images/banniere 2.png') }}" class="img-fluid" alt="">
                    <!-- <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                        <h4 class="mb-4">We are more than just a company</h4>
                        <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div> -->
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{ asset('admin/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('admin/js/custom.min.js') }}"></script>
    <script src="{{ asset('admin/js/settings.js') }}"></script>
    <script src="{{ asset('admin/js/gleek.js') }}"></script>
    <script src="{{ asset('admin/js/styleSwitcher.js') }}"></script>
</body>
</html>









