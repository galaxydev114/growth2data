@extends('layouts.app', ['title' => 'The Information Technology & Services', 'page' => 'home'])

@section('content')
<!-- ======= Hero Section ======= -->
<div class="gradient-primary-wrap">
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('img') }}/hero-img.png" class="img-fluid" alt="Hero Img" />
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <div class="hero-right-content ps-lg-5 text-lg-start text-md-center">
                        <h1 data-aos="fade-up">Consultoria em Business Intelligence, Big Data, Soluções Digitais e Treinamentos</h1>
                        <h2 data-aos="fade-up" data-aos-delay="400">Temos a solução mais inteligente para você e para seu negócio</h2>
                        <div data-aos="fade-up" data-aos-delay="600">
                            <div class="text-center text-lg-start">
                                <a href="{{ route('quoter') }}" class="gx-animation-pulse-grow btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>ENCONTRE O QUE PRECISA</span>
                                </a>
                            </div>
                        </div>
                    </div>
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
                    <h2>Sobre a G2D</h2>
                    <p>
                        A <a href="javascript:void(0)">Growth2Data</a> nasceu da união de profissionais dedicados com experiência em empresas multinacionais de pequeno, médio e grande porte. Com seriedade e profissionalismo, ao longo de mais de 10 anos, desenvolvemos competências essenciais para o mercado de Business Intelligence.
                        Com a <a href="quoter.html">G2D Consultoria</a>, temos a missão de ajudar pessoas e empresas a transformarem dados em insights poderosos. Para isso, oferecemos soluções nas áreas de TI, com foco em Business Intelligence e Banco de Dados e levamos para a sua empresa as melhores práticas de mercado, considerando as necessidades específicas do seu negócio.
                        Buscando disseminar nosso conhecimento e capacitar profissionais, desenvolvemos o <a href="quoter.html">G2D Training Center</a> para oferecer treinamentos exclusivos nas áreas de Business Intelligence. Nossos cursos são ministrados por profissionais extremamente talentosos e especialistas nas mais diversas áreas de Business Intelligence e tecnologia.
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
    <div class="container" data-aos="fade-up">
        <div class="row mx-lg-5 justify-content-center">
            <div class="col-lg-6 px-lg-5 py-5 position-relative service-item">
                <a href="">
                    <div class="service-item-content">
                        <h3>CONSULTORIA</h3>
                        <p>Conheça nossa consultoria especializada em Business Intelligence e saiba como organizar a coleta de dados empresariais da melhor maneira possível.</p>
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
                        <h3>ESCOLA</h3>
                        <p>Deseja aprender mais sobre como lidar com os dados e aprimorar o seu conhecimento em BI e Tableau? Conheça nossos cursos disponíveis.</p>
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
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <h2>Nosso Time</h2>
        </header>
        <div class="row gy-5 justify-content-center">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
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
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
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
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
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
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
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
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
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
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <h2>Nossos clientes</h2>
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

@push('scripts')
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