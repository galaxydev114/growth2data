<!-- ======== Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
            <img src="{{ asset('img') }}/white-logo.png" alt="Growth2data Logo" />
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="#hero">Clube de conteúdo</a></li>
                <li><a class="nav-link scrollto" href="#hero">Consultoria</a></li>
                <li><a class="nav-link scrollto" href="#hero">Escola</a></li>
                <li class="dropdown"><a href="#"><span>E-Learning</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li class="dropdown"><a href="#"><span>Lorem ipsum</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                            <li><a href="#">Lorem ipsum</a></li>
                            <li><a href="#">Lorem ipsum</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                        <li><a href="#">Lorem ipsum</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#">Blog</a></li>
                <li><a href="#about">Sobre a G2D</a></li>
                <li><a class="nav-link scrollto" href="{{ route('contact') }}">Contato</a></li>
                <li><a class="login-btn scrollto" href="#about">Log In</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Heaer -->