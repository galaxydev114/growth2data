<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" theme="growth2data-v1">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Title -->
        <title>{{ __('auth.login_page_title') }}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- Social tags -->
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img') }}/apple-icon.png">
        <link rel="icon" type="image/png" href="{{ asset('img') }}/favicon.png">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,600,600i,700,700i|Inter:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />
        <!-- Vendor CSS Files -->
        <link href="{{ asset('vendor') }}/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="{{ asset('vendor') }}/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
        <!-- Form Validation -->
        <link href="{{ asset('vendor') }}/form-validation/form-validation.min.css" rel="stylesheet" />
        <!-- Style CSS -->
        <link href="{{ asset('css') }}/style.css" rel="stylesheet" />
    </head>
    <body>
        <div class="gradient-primary login-page">
            <!-- Header -->
            <header id="header" class="header">
                <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
                    <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
                        <img src="{{ asset('img') }}/white-logo.png" alt="Growth2data Brand">
                    </a>
                </div>
            </header>
            <!-- End header -->
            <div class="container">
                <div class="login-wrap">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-5">
                            <div class="login-form">
                                <div class="login-title">
                                    <h3></h3>
                                </div>
                                <div class="social-logins">
                                    <div class="mt-2">
                                        <button class="facebook-login-btn"><i class="bi bi-facebook"></i>{{ __('auth.login_with_facebook') }}</button>
                                    </div>
                                    <div class="mt-2">
                                        <button class="google-login-btn"><i class="bi bi-google"></i>{{ __('auth.login_with_google') }}</button>
                                    </div>
                                    <div class="mt-2">
                                        <button class="linkedin-login-btn"><i class="bi bi-linkedin"></i>{{ __('auth.login_with_linkedin') }}</button>
                                    </div>
                                </div>
                                <div class="or-horizontal-divider my-4"><span>{{ __('auth.or') }}</span></div>

                                <!-- Main Form -->
                                <form action="{{ route('login') }}" method="POST" id="login-form" data-parsley-validate>
                                    @csrf
                                    <div class="gm-form-group">
                                        <input type="text" name="username" id="username" class="gm-form-control" placeholder="{{ __('auth.email_or_username') }}" required data-parsley-required-message="{{ __('auth.email_or_username_required') }}" value="{{ old('username') }}" />
                                    </div>
                                    <div class="gm-form-group mt-4">
                                        <input type="text" class="gm-form-control" placeholder="{{ __('auth.password') }}" required data-parsley-required-message="{{ __('auth.password_required') }}" />
                                    </div>
                                    <div class="pt-4 d-flex justify-content-between">
                                        <label class="color-checkbox primary-color">{{ __('auth.remember_me') }}
                                            <input type="checkbox" name="remember" />
                                            <span class="checkmark"></span>
                                        </label>
                                        <a href="">{{ __('auth.forgot_password') }}</a>
                                    </div>
                                    <button type="submit" class="login-btn">Log In</button>
                                </form>
                                <!-- End form -->

                                <div class="or-horizontal-divider mt-4"></div>
                                <div class="text-center py-3">
                                    <p>{{ __('auth.no_g2d_account?') }} <a href="">{{ __('auth.register') }}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery core -->
        <script src="{{ asset('js') }}/jquery-3.6.0.min.js"></script>
        <!-- Vendor JS Files -->
        <script src="{{ asset('vendor') }}/parsleyjs/parsley.min.js"></script>
    </body>
</html>