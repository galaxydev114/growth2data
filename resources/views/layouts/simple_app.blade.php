<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" theme="growth2data-v1">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Title -->
        <title>{{ $title }} - {{ env('APP_NAME') }}</title>
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
        <link href="{{ asset('vendor') }}/aos/aos.css" rel="stylesheet" />
        <!-- Style CSS -->
        <link href="{{ asset('css') }}/style.css" rel="stylesheet" />

        @stack('css')
    </head>
    <body>
        <!-- ======== Header ======= -->
        <header id="header" class="header simple-header">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
                <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
                    <img src="{{ asset('img') }}/white-logo.png" alt="Growth2data Logo" />
                </a>
            </div>
        </header><!-- End Heaer -->

        <!-- Main content -->
        @yield('content')

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-bottom-links d-inline-block">
                                <ul>
                                    <li><a href="#">{{ __('footer.terms_and_conditions') }}</a></li>
                                    <li>|</li>
                                    <li><a href="#">{{ __('footer.privacy') }}</a></li>
                                    <li>|</li>
                                    <li><a href="#">Cookies</a></li>
                                    <li>|</li>
                                    <li><a href="#">&copy; <script>document.write(new Date().getFullYear())</script>, Growth2data, Inc. {{ __('footer.all_rights_reserved') }}</a></li>
                                </ul>
                            </div>
                            <div class="dropdown language-switch float-end">
                                <button class="btn btn-secondary dropdown-toggle p-0" type="button" id="language-home" data-bs-toggle="dropdown" aria-expanded="false">   
                                    @if (session()->get('locale') == 'en')
                                        <img src="{{ asset('img/flags/us.png') }}" width="25px" /> English
                                    @else
                                        <img src="{{ asset('img/flags/br.png') }}" width="25px" /> Português
                                    @endif
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="language-home">
                                    @if (session()->get('locale') == 'pt_BR')
                                    <li role="presentation">
                                        <a href="{{ url('lang', 'en') }}" class="dropdown-item" role="menuitem"><img src="{{ asset('img/flags/us.png') }}" width="25px" /> English</a>
                                    </li>
                                    @else
                                    <li role="presentation">
                                        <a href="{{ url('lang', 'pt_BR') }}" class="dropdown-item" role="menuitem"><img src="{{ asset('img/flags/br.png') }}" width="25px" /> Português</a>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- End Footer -->

        <!-- jQuery -->
        <script src="{{ asset('js') }}/jquery-3.6.0.min.js"></script>
        <!-- Vendor JS Files -->
        <script src="{{ asset('vendor') }}/bootstrap/js/bootstrap.bundle.js"></script>
        <!-- AOS JS -->
        <script src="{{ asset('vendor') }}/aos/aos.js"></script>
        
        <script>
            //===== Prealoder
            window.onload = function () {
                // preloader fadeout onload
                var preloader = document.querySelector('.preloader');
                if (preloader) {
                    document.querySelector('.preloader').style.opacity = '0';
                    document.querySelector('.preloader').style.display = 'none';
                }
            }

            /**
             * Animation on scroll
             */
            function aos_init() {
                AOS.init({
                    duration: 1000,
                    easing: "ease-in-out",
                    once: true,
                    mirror: false
                });
            }
            window.addEventListener('load', () => {
                aos_init();
            });
        </script>

        @stack('js')
    </body>
</html>