<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" theme="growth2data-admin-v1">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Title -->
        <title>Login para G2D Admin</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- Social tags -->
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin-assets/images') }}/apple-icon.png">
        <link rel="icon" type="image/png" href="{{ asset('admin-assets/images') }}/favicon.png">

        <!-- Bootstrap Css -->
        <link href="{{ asset('admin-assets/css') }}/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('admin-assets/css') }}/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('admin-assets/css') }}/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <!-- Custom Css -->
        <link href="{{ asset('admin-assets/css') }}/custom.css" id="app-style" rel="stylesheet" type="text/css" />
    </head>
    <body>
       <div class="login-page my-5 pt-sm-5">
           <div class="container">
               <div class="row justify-content-center">
                   <div class="col-md-8 col-lg-6 col-xl-5">
                       <div class="card overflow-hidden">
                           <div class="card-body pt-0">
                               <h3 class="text-center mt-5 mb-3">
                                   <a href="" class="d-block auth-logo">
                                       <img src="{{ asset('admin-assets') }}/images/logo.png" alt="G2D Auth" height="60" />
                                   </a>
                               </h3>
                               <div class="p-3">
                                   <h4 class="text-muted font-size-18 mb-1 text-center auth-title">LOGIN PARA G2D ADMIN</h4>
                                   <p class="text-muted text-center">Insira seu e-mail e senha abaixo</p>
                                   <form class="form-horizontal mt-4" action="" data-parsley-validate>
                                        <div class="mb-3">
                                            <label for="email">EMAIL</label>
                                            <input type="text" name="email" class="form-control" id="email" autocomplete="off" required data-parsley-type="email" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="password">SENHA</label>
                                            <input type="password" name="password" class="form-control" id="password" autocomplete="off" required />
                                        </div>
                                        <div class="mb-3 row mt-4">
                                            <div class="col-6">
                                                <div class="form-check">
                                                    <input type="checkbox" name="remember" class="form-check-input" id="rememberMe">
                                                    <label class="form-check-label" for="rememberMe">Lembre me</label>
                                                </div>
                                            </div>
                                            <div class="col-6 text-end">
                                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 row">
                                            <div class="col-12 mt-4">
                                                <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Esqueceu sua senha?</a>
                                            </div>
                                        </div>
                                   </form>
                               </div>
                           </div>
                       </div>
                       <div class="mt-5 text-center">
                            <!-- <p>Não tem uma conta? <a href="pages-register.html" class="text-primary"> Cadastrar </a></p> -->
                            © <script>document.write(new Date().getFullYear())</script> Growth2data <span class="d-none d-sm-inline-block">- Todos direitos reservados.</span>
                        </div>
                   </div>
               </div>
           </div>
       </div>
    </body>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('admin-assets') }}/libs/jquery/jquery.min.js"></script>
    <script src="{{ asset('admin-assets') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin-assets') }}/libs/parsleyjs/parsley.min.js"></script>
    <script src="{{ asset('admin-assets') }}/libs/parsleyjs/i18n/pt-br.js"></script>

    <script src="{{ asset('admin-assets') }}/js/parsley-validation.init.min.js"></script>
</html>