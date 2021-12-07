<!-- ======== Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
            <img src="{{ asset('img') }}/white-logo.png" alt="Growth2data Logo" />
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto {{ (request()->segment(1) == 'planos-clube') ? 'active' : '' }}" href="{{ route('subscription.plan') }}">Clube de conteúdo</a></li>
                <li><a class="nav-link scrollto" href="#hero">Consultoria</a></li>
                <li><a href="{{ route('school') }}" class="nav-link scrollto {{ (request()->segment(1) == 'escola') ? 'active' : '' }}" href="#hero">Escola</a></li>
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
                <li><a href="{{ route('contact') }}" class="nav-link scrollto {{ (request()->segment(1) == 'contato') ? 'active' : '' }}">Contato</a></li>
                <li><a class="login-btn scrollto" href="{{ route('login') }}">Log In</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Heaer -->