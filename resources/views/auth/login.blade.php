<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" theme="growth2data-v1">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Title -->
        <title>Login to {{ env('APP_NAME') }}</title>
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
                                        <button class="facebook-login-btn"><i class="bi bi-facebook"></i>Log in com Facebook</button>
                                    </div>
                                    <div class="mt-2">
                                        <button class="google-login-btn"><i class="bi bi-google"></i>Log in com Google</button>
                                    </div>
                                    <div class="mt-2">
                                        <button class="linkedin-login-btn"><i class="bi bi-linkedin"></i>Log in com Linkedin</button>
                                    </div>
                                </div>
                                <div class="or-horizontal-divider my-4"><span>ou</span></div>

                                <!-- Main Form -->
                                <form action="{{ route('login') }}" method="POST" id="login-form">
                                    @csrf
                                    <div class="gm-form-group">
                                        <input type="text" name="username" id="username" class="gm-form-control" placeholder="Email ou username" />
                                    </div>
                                    <div class="gm-form-group mt-4">
                                        <input type="text" class="gm-form-control" placeholder="Senha" />
                                    </div>
                                    <div class="pt-4 d-flex justify-content-between">
                                        <label class="color-checkbox primary-color">Lembre me
                                            <input type="checkbox" name="remember" />
                                            <span class="checkmark"></span>
                                        </label>
                                        <a href="">Esqueceu senha?</a>
                                    </div>
                                    <button type="submit" class="login-btn">Log In</button>
                                </form>
                                <!-- End form -->

                                <div class="or-horizontal-divider mt-4"></div>
                                <div class="text-center py-3">
                                    <p>Não tem uma conta G2D? <a href="">Cadastre-se</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Vendor JS Files -->
        <script src="{{ asset('vendor') }}/bootstrap/js/bootstrap.bundle.js"></script>
        <!-- jQuery core -->
        <script src="{{ asset('js') }}/jquery-3.6.0.min.js"></script>
        <!-- Form Validation JS -->
        <script src="{{ asset('vendor') }}/form-validation/jquery.validate.min.js"></script>

        <script>
            $(function() {
                $('form').validate({
                    rules: {
                        'name': {
                            required: true
                        },
                        'surname': {
                            required: true
                        },
                        'email': {
                            required: true,
                            email: true
                        },
                        'telephone': {
                            required: true
                        },
                        'company': {
                            required: true
                        },
                        'description': {
                            required: true
                        }
                    },
                    messages: {
                        'name': 'Por favor, insira o nome',
                        'surname': 'Por favor, insira o sobrenome',
                        'email': {
                            'required': 'Por favor insira o email',
                            'email': "Por favor insira um endereço de e-mail válido"
                        },
                        'telephone': 'Por favor insira o telefone',
                        'company': 'Por favor, insira a empresa',
                        'description': 'Por favor insira a descrição' 
                    },
                    submitHandler: function(form) {
                        $('.bs-spinner').removeClass('d-none');
                        form.submit();
                    }
                });
            });
        </script>
    </body>
</html>