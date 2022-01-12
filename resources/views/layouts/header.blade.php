<!-- ======== Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
            <img src="{{ asset('img') }}/white-logo.png" alt="Growth2data Logo" />
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto {{ (request()->segment(1) == 'planos-clube') ? 'active' : '' }}" href="{{ route('subscription.plan') }}">{{ __('nav.content_club') }}</a></li>
                <li><a class="nav-link scrollto" href="{{ url('consultoria-servico') }}">{{ __('nav.consultancy') }}</a></li>
                <li><a href="{{ route('school') }}" class="nav-link scrollto {{ (request()->segment(1) == 'escola') ? 'active' : '' }}" href="{{ route('school') }}">{{ __('nav.school') }}</a></li>
                <li class="dropdown">
                    <a href="#"><span>{{ __('nav.e-learning') }}</span> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down ms-1" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </a>
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
                <li><a href="{{ route('contact') }}" class="nav-link scrollto {{ (request()->segment(1) == 'contato') ? 'active' : '' }}">{{ __('nav.contact') }}</a></li>
                <li><a class="login-btn scrollto" href="{{ route('login') }}">{{ __('nav.login') }}</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Heaer -->