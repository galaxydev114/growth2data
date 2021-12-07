@extends('layouts.simple_app', ['title' => 'Escola | SQL', 'page' => 'pbi_school'])

@section('content')
<!-- Preloader -->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- /End Preloader -->

<div class="gradient-primary">
    <div class="default-wrap">
        <div class="container">
            <!-- Breadcrumb -->
            <div class="breadcrumb">
                <a href="{{ route('home') }}" class="goto-prev-page-link"><i class="bi bi-chevron-left"></i> VOLTAR PARA CASA</a>
            </div>
            <!-- /. Breadcrumb -->

            <div id="power-bi-school" class="school">
                <section class="section-i">
                    <div class="row">
                        <div class="col-lg-4 px-lg-3 mt-lg-5">
                            <div class="section-i-text">
                                <p  data-aos="fade-down" data-aos-delay="500">Desenvolva-se conosco</p>
                                <h3 data-aos="fade-down" data-aos-delay="400">Treinamento SQL</h3>
                                <h5 data-aos="fade-down" data-aos-delay="300"><b>Duração:</b> 50 horas</h5>
                            </div>
                            <div data-aos="fade-down" data-aos-delay="200">
                                <a href="" class="getstarted-course-btn">Comece um curso</a>
                            </div>
                        </div>
                        <div class="col-lg-8 text-end">
                            <div data-aos="flip-left" data-aos-delay="200" class="section-i-img glass-bg cylon-wrap d-inline-block position-relative p-2 p-lg-4 p-md-3">
                                <img src="{{ asset('img/schools/sections') }}/python.png" />
                                <div class="glass-cover"></div>
                                <div class="cylon_eye"></div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section-ii">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="section-ii-image-group text-end">
                                <div data-aos="zoom-out">
                                    <div id="glass-square" class="glass-bg"></div>
                                </div>
                                <div data-aos="zoom-in-right" class="text-start">
                                    <div class="time-image glass-bg d-inline-block p-1 p-lg-2 p-md-2">
                                        <img src="{{ asset('img/schools/sections') }}/time.png" />
                                    </div>
                                </div>
                                <div data-aos="zoom-in-up" class="text-end">
                                    <div class="research-image glass-bg d-inline-block p-2 p-lg-3 p-md-3">
                                        <img src="{{ asset('img/schools/sections') }}/research.png" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="section-ii-right-text" data-aos="fade-down" data-aos-easing="linear"  data-aos-duration="1500">
                                <p>
                                    Sobre o Curso
                                    O curso de Python da Growth2Data apresenta os conceitos básicos e fundamentos dessa linguagem de programação.
                                </p>
                                <p>Com uma experiência prática que leva em conta exemplos, exercícios e projetos de análise de dados, esse curso é ideal para você que quer dar início em projetos de Data Science e deseja se especializar em Python.</p>
                                <p>
                                    O que você aprenderá?
                                    Quem já se deparou com um problema de análise de dados que uma ferramenta de mercado não solucionou completamente ou de forma eficiente?
                                </p>
                                <p>No mundo da análise de dados, é cada vez mais necessário sair da zona de conforto e buscar outras ferramentas que sejam úteis para o universo de um cientista de dados. Felizmente nesse cenário, Python é a linguagem certa.</p>
                                <p>Se você tem uma inclinação ou curiosidade para começar a criar códigos, este é o momento para colocar a mão na massa, de uma maneira simples. Acredite, codificar nunca foi tão fácil.</p>
                                <p>Se você ainda não está convencido a dar uma chance para o Python, confira as vantagens desta escolha:</p>
                                <p>Python é uma linguagem de programação de alto nível, que possui código aberto, comunidade online muito ativa e é fácil de aprender.</p>
                                <p>
                                    Além disso, ela também é:
                                    Imperativa;
                                    Interpretada por scriptis;
                                    Orientada a objetos;
                                    Funcional;
                                    De forte tipagem;
                                    Dinâmica.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section-iii" data-aos="fade-down">
                    <h3>CONTEÚDO PROGRAMÁTICO:</h3>
                    <div class="section-iii-body mt-3">
                        <ul>
                            <li>Introdução ao Business Intelligence</li>
                            <li>Conhecendo o sql Desktop</li>
                            <li>Aprofundando os conhecimentos</li>
                            <li>Tipos de gráficos abordados</li>
                        </ul>
                        <h4>Ao final desse curso você será capaz de:</h4>
                        <ul>
                            <li>Entender o processador de dados, extrações e métodos de conexão eficientes;</li>
                            <li>Preparar os dados para análise;</li>
                            <li>Criar visualizações e tipos de gráficos avançados;</li>
                            <li>Criar cálculos complexos para manipulação de dados;</li>
                            <li>Usar técnicas estatísticas para analisar os dados;</li>
                            <li>Implementar técnicas avançadas de mapeamento geográfico;</li>
                            <li>Criar painéis interativos aplicando as melhores técnicas e práticas de análises visuais.</li>
                        </ul>
                    </div>
                </section>

                <section class="instructors" data-aos="fade-down">
                    <h4 class="fw-bold mt-4">INSTRUTORES:</h4>
                    <div class="instructor-content">
                        <h4 class="fw-bold">Mauro Valeri</h4>
                        <p>Pós-graduado em Business Intelligence e Big Data, Mauro também possui experiência em gerenciamento e proposição de ações e soluções de arquiteturas de BI, Big Data, integração de dados, processamento e análise de dados, além de um vasto conhecimento da ferramenta sql.</p>
                    </div>
                    <div class="instructor-content">
                        <h4 class="fw-bold">Paulo Sotero</h4>
                        <p>Com experiência em Business Intelligence há 5 anos, Paulo também é certificado e especialista em sql Desktop. Ministra workshops e treinamentos sql há mais de 4 anos, e busca sempre acompanhar a evolução da ferramenta e explorar suas principais funcionalidades.</p>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection