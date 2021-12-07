@extends('layouts.simple_app', ['title' => 'Escola | Tableau', 'page' => 'tableau_school'])

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
                                <h3 data-aos="fade-down" data-aos-delay="400">Treinamento Tableau</h3>
                                <h5 data-aos="fade-down" data-aos-delay="300"><b>Duração:</b> 12 horas</h5>
                            </div>
                            <div data-aos="fade-down" data-aos-delay="200">
                                <a href="" class="getstarted-course-btn">Comece um curso</a>
                            </div>
                        </div>
                        <div class="col-lg-8 text-end">
                            <div data-aos="flip-left" data-aos-delay="200" class="section-i-img glass-bg cylon-wrap d-inline-block position-relative p-2 p-lg-4 p-md-3">
                                <img src="{{ asset('img/schools/sections') }}/tableau.png" />
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
                                <p>O Tableau é um software especializado em dados que, além de traduzir a imensa quantidade de informações que a empresa recebe diariamente, ajuda o analista de dados e o profissional de Business Intelligence a interpretá-las e lidar com elas da melhor forma possível.</p>
                                <p>Quando o assunto é o poder que os dados têm para o sucesso de um negócio, somente o Tableau pode interpretar estas informações de maneira eficiente. Com uma plataforma sólida e escalável, é possível profissionalizar a tomada de decisão, a partir de  dados extremamente complexos.</p>
                                <p>O Tableau ajuda sua empresa a transformar dados em informações capazes de gerar ações e demonstrar resultados completos e efetivos.</p>
                                <p>Invista no seu futuro aprendendo uma das ferramentas líderes de mercado.</p>
                                <p>
                                    O que você aprenderá?
                                    Você terá a experiência de construir Dashboards do zero, desde a conexão com as fontes de dados até a divulgação do resultado no Tableau Public, possibilitando a criação de um portfólio pessoal de projetos.
                                </p>
                                <p>O treinamento inclui uma apostila com os principais conceitos e funcionalidades abordadas, exercícios para reforçar os conhecimentos adquiridos, além de acompanhar as fontes de dados que serão utilizadas nas atividades práticas. Utilizaremos dados públicos para criar indicadores e análises que solucionam problemas do cotidiano de qualquer empresa.</p>
                                <p>O treinamento não possui nenhum pré-requisito e foi elaborado para todas as pessoas que amam dados e que têm interesse em conhecer essa incrível ferramenta, além de entender como ele pode ajudar o dia-a-dia de uma empresa com seu conceito de self service BI.</p>
                                <p>Os participantes devem acessar ao treinamento de maneira online através do link que será enviado por e-mail para a realização das atividades práticas, os softwares necessários serão instalados e configurados durante o treinamento.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section-iii" data-aos="fade-down">
                    <h3>CONTEÚDO PROGRAMÁTICO:</h3>
                    <div class="section-iii-body mt-3">
                        <ul>
                            <li>Introdução ao Business Intelligence</li>
                            <li>Conhecendo o Tableau Desktop</li>
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
                        <p>Pós-graduado em Business Intelligence e Big Data, Mauro também possui experiência em gerenciamento e proposição de ações e soluções de arquiteturas de BI, Big Data, integração de dados, processamento e análise de dados, além de um vasto conhecimento da ferramenta Tableau.</p>
                    </div>
                    <div class="instructor-content">
                        <h4 class="fw-bold">Paulo Sotero</h4>
                        <p>Com experiência em Business Intelligence há 5 anos, Paulo também é certificado e especialista em Tableau Desktop. Ministra workshops e treinamentos Tableau há mais de 4 anos, e busca sempre acompanhar a evolução da ferramenta e explorar suas principais funcionalidades.</p>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection