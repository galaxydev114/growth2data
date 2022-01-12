@extends('layouts.app', ['title' => 'The Information Technology & Services', 'page' => 'home'])

@section('content')
<!-- ======= Hero Section ======= -->
<div class="gradient-primary">
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <div class="hero-left-content pt-md-4 text-left">
                        <h1 data-aos="fade-up">{{ __('home.hero_title') }}</h1>
                        <h2 data-aos="fade-up" data-aos-delay="400">{{ __('home.hero_subtitle') }}</h2>
                        <div data-aos="fade-up" data-aos-delay="600">
                            <a href="{{ route('quoter') }}" class="gx-animation-pulse-grow btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>{{ __('home.find_what_you_need') }}</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('img') }}/hero-img.png" class="img-fluid" alt="Hero Img" />
                </div>
            </div>
        </div>
    </section>
</div><!-- End Hero -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <div class="row gx-0">
            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="content">
                    <h2>{{ __('home.about_g2d') }}</h2>
                    <p>
                        {{ __('home.about_content_part_1') }} <a href="javascript:void(0)">Growth2Data</a> {{ __('home.about_content_part_2') }} <a href="{{ url('consultoria-servico') }}">G2D {{ __('home.about_content_part_consultancy') }}</a>, {{ __('home.about_content_part_3') }} <a href="quoter.html">G2D Training Center</a> {{ __('home.about_content_part_4') }}
                    </p>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{ asset('img') }}/sections/about.jpg" class="img-fluid" alt="About img">
            </div>
        </div>
    </div>
</section><!-- End About Section -->

<!-- ======= Services ======= -->
<section id="service" class="service">
    <div class="container">
        <div class="row mx-lg-5 justify-content-center">
            <div class="col-lg-6 px-lg-5 py-5 position-relative service-item">
                <a href="">
                    <div class="service-item-content">
                        <h3>{{ __('home.consultancy_block_title') }}</h3>
                        <p>{{ __('home.consultancy_block_content') }}</p>
                    </div>
                    <!-- Color cover -->
                    <div class="color-cover">
                        <div class="fit-image">
                            <img src="{{ asset('img') }}/sections/service-item-consultancy.jpg" alt="" loading="lazy" />
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 px-lg-5 py-5 position-relative service-item">
                <a href="">
                    <div class="service-item-content">
                        <h3>{{ __('home.school_block_title') }}</h3>
                        <p>{{ __('home.school_block_content') }}</p>
                    </div>
                    <!-- Color cover -->
                    <div class="color-cover">
                        <div class="fit-image">
                            <img src="{{ asset('img') }}/sections/service-item-school.jpg" alt="" loading="lazy" />
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section><!-- End service section -->

<!-- ======= Team Section ====== -->
<section id="team" class="team">
    <div class="container">
        <header class="section-header">
            <h2>{{ __('home.our_team') }}</h2>
        </header>
        <div class="row gy-5 justify-content-center">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="{{ asset('img') }}/team/member_1.jpg" class="img-fluid" alt="" />
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Mauro Valeri</h4>
                        <p>Pós-graduado em Business Intelligence e Big Data e  experiência em proposição e gerenciamento de ações e soluções de arquiteturas de BI, Big Data, integração de dados, processamento e análise de dados, além de um vasto conhecimento da ferramenta Tableau.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="{{ asset('img') }}/team/member_2.jpg" class="img-fluid" alt="" />
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Paulo Sotero</h4>
                        <p>Com experiência de mais de 5 anos em Business Intelligence e especialista certificado em Tableau Desktop, também ministra treinamentos de Tableau há mais de 4 anos, acompanhando a evolução da ferramenta e explorando suas principais funcionalidades.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="{{ asset('img') }}/team/member_3.jpg" class="img-fluid" alt="" />
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Eric Malzone</h4>
                        <p>Com 13 anos de carreira dentro da área de TI, e 8 anos em BI especializa-se há 2 anos em Big Data por meio do MBA pela FIA, um dos melhores institutos de tecnologia. Com seu conhecimento, presta consultoria sobre Big Data  e ministra treinamentos de Python.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="{{ asset('img') }}/team/member_4.jpg" class="img-fluid" alt="" />
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Arjuna Xxx</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member">
                    <div class="member-img">
                        <img src="{{ asset('img') }}/team/member_5.jpg" class="img-fluid" alt="" />
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Lucas Oliveira</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End team section -->

<!-- ======= Clients Section ======= -->
<section id="clients" class="clients">
    <div class="container">
        <header class="section-header">
            <h2>{{ __('home.our_clients') }}</h2>
        </header>
        <div class="clients-slider swiper">
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide"><img src="{{ asset('img/clients') }}/baermate-300x50.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('img/clients') }}/header-logo-desktop.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('img/clients') }}/logo-litoral-tinturaria@2x-300x49.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('img/clients') }}/montebravo-img-300x65.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('img/clients') }}/prime-clean_auto_x1_auto_x1.jpg" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('img/clients') }}/regular_ac7accd243ffe284584017c8bd3ceb04-1-300x141.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('img/clients') }}/tZ9zZ0XHJ7WlTkFZamkDTfDYXKp88gVjGYouidJf-300x117.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('img/clients') }}/unnamed-3-300x110.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset('img/clients') }}/vivo-logo-1-300x113.png" class="img-fluid" alt=""></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section><!-- End Clients Section -->
@endsection

@push('css')
<link href="{{ asset('vendor') }}/swiper/swiper-bundle.min.css" rel="stylesheet">
@endpush

@push('js')
<script src="{{ asset('vendor') }}/swiper/swiper-bundle.min.js"></script>
<script>
    (function() {
        /**
         * Clients Slider
        */
        new Swiper('.clients-slider', {
            speed: 400,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false
            },
            slidesPerView: 'auto',
            pagination: {
                el: '.swiper-pagination'
            },
            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
            breakpoints: {
                320: {
                    slidesPerView: 2,
                    spaceBetween: 40
                },
                480: {
                    slidesPerView: 3,
                    spaceBetween: 60
                },
                640: {
                    slidesPerView: 4,
                    spaceBetween: 80
                },
                992: {
                    slidesPerView: 6,
                    spaceBetween: 120
                }
            }
        });
    })();
</script>
@endpush