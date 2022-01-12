<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-3 col-md-4 col-sm-12 footer-links">
                    <h4>{{ __('footer.consultancy') }}</h4>
                    <ul>
                        <li><a href="#">{{ __('footer.business_intelligence') }}</a></li>
                        <li><a href="#">{{ __('footer.big_data') }}</a></li>
                        <li><a href="#">{{ __('footer.digital_solutions') }}</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 footer-links">
                    <h4>{{ __('footer.school') }}</h4>
                    <ul>
                        <li><a href="{{ route('school.pbi') }}">{{ __('footer.power_bi_training') }}</a></li>
                        <li><a href="{{ route('school.tableau') }}">{{ __('footer.tableau_training') }}</a></li>
                        <li><a href="{{ route('school.python') }}">{{ __('footer.python_training') }}</a></li>
                        <li><a href="{{ route('school.sql') }}">{{ __('footer.sql_training') }}</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-612 footer-links">
                    <h4>G2D</h4>
                    <ul>
                        <li><a href="{{ route('about') }}">{{ __('footer.about_g2d') }}</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="{{ route('contact') }}">{{ __('footer.contact') }}</a></li>
                        <li><a href="#">{{ __('footer.content_club') }}</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 footer-subscribe">
                    <form action="" method="post">
                        <h4>{{ __('footer.subscribe') }}</h4>
                        <div class="d-flex align-items-center">
                            <input type="text" id="" class="" placeholder="Email" />
                            <button type="button" class="subscribe-btn"><i class="bi bi-arrow-right-short"></i></button>
                        </div>
                    </form>
                    <p>{{ __('footer.subscribe_text') }}</p>
                    <div class="">
                        <div class="dropdown language-switch d-inline-block me-5 mt-5">
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
                        <div class="social-links d-inline-block mt-5">
                            <a href="#" class="youtube"><i class="bi bi-youtube"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-bottom-links">
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
                </div>
            </div>
        </div>
    </div>
</footer><!-- End Footer -->

<!-- Back to top button -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>