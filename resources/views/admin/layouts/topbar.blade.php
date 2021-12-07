<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- Logo -->
            <div class="navbar-brand-box">
                <a href="{{ route('admin.dashboard') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('admin-assets/images') }}/logo.png" alt="" height="22" />
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('admin-assets/images') }}/logo.png" alt="" height="32" />
                        <span class="brand-text">Painel G2D</span>
                    </span>
                </a>
            </div>
            <!--/. Logo -->
            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
                <i class="fas fa-bars font-size-18"></i>
            </button>
        </div>
        <div class="d-flex">
            <!-- App Search -->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Procurar...">
                    <span class="fa fa-search"></span>
                </div>
            </form>
            <!-- /. -->
            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                    aria-labelledby="page-header-search-dropdown">
                    
                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="fas fa-expand font-size-18"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-bell"></i>
                    <span class="badge bg-danger rounded-pill">3</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="m-0"> Notificações (258) </h5>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        <a href="javascript:void(0);" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-xs">
                                    <span class="avatar-title border-success rounded-circle ">
                                        <i class="mdi mdi-cart-outline"></i>
                                    </span>
                                </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Seu pedido foi feito</h6>
                                    <div class="text-muted">
                                        <p class="mb-1">Se várias línguas aglutinam a gramática</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript:void(0);" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-xs">
                                    <span class="avatar-title border-warning rounded-circle ">
                                        <i class="mdi mdi-message"></i>
                                    </span>
                                </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Nova mensagem recebida</h6>
                                    <div class="text-muted">
                                        <p class="mb-1">Você tem 87 mensagens não lidas</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript:void(0);" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-xs">
                                    <span class="avatar-title border-info rounded-circle ">
                                        <i class="mdi mdi-glass-cocktail"></i>
                                    </span>
                                </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Seu item é enviado</h6>
                                    <div class="text-muted">
                                        <p class="mb-1">É um fato estabelecido há muito tempo que um leitor irá</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript:void(0);" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-xs">
                                    <span class="avatar-title border-primary rounded-circle ">
                                        <i class="mdi mdi-cart-outline"></i>
                                    </span>
                                </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Seu pedido foi feito</h6>
                                    <div class="text-muted">
                                        <p class="mb-1">Texto fictício da indústria de impressão e composição.</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript:void(0);" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar-xs">
                                    <span class="avatar-title border-warning rounded-circle ">
                                        <i class="mdi mdi-message"></i>
                                    </span>
                                </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">New Message received</h6>
                                    <div class="text-muted">
                                        <p class="mb-1">Você tem 87 mensagens não lidas</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top">
                        <a class="btn btn-sm btn-link font-size-14 w-100 text-center" href="javascript:void(0)">
                            Ver tudo
                        </a>
                    </div>
                </div>
            </div>
            

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ asset('admin-assets/images') }}/galaxyme.png" alt="" />
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i class="fas fa-user-circle font-size-17 text-muted align-middle me-1"></i> Minha conta</a>
                    <a class="dropdown-item d-block" href="#"><i class="fas fa-cog font-size-17 text-muted align-middle me-1"></i> Configurações</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="#"><i class="fas fa-power-off font-size-17 text-muted align-middle me-1 text-danger"></i> Sair</a>
                </div>
            </div>
        </div>
    </div>
</header>