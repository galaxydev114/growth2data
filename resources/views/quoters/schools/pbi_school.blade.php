@extends('layouts.simple_app', ['title' => 'Escola | PBI', 'page' => 'pbi_school'])

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
                                <h3 data-aos="fade-down" data-aos-delay="400">Treinamento Power BI</h3>
                                <h5 data-aos="fade-down" data-aos-delay="300"><b>Duração:</b> 12 horas</h5>
                            </div>
                            <div data-aos="fade-down" data-aos-delay="200">
                                <a href="" class="getstarted-course-btn">Comece um curso</a>
                            </div>
                        </div>
                        <div class="col-lg-8 text-end">
                            <div data-aos="flip-left" data-aos-delay="200" class="section-i-img glass-bg cylon-wrap d-inline-block position-relative p-2 p-lg-4 p-md-3">
                                <img src="{{ asset('img/schools/sections') }}/power-bi-section-i.png" />
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
                                <p>O Power BI é uma ferramenta indispensável para todas as pessoas que desejam trabalhar com Business Intelligence ou análise de dados. Sendo a opção mais popular quando se fala em grandes quantidades de dados, com o Power BI é possível criar dashboards interativos, relatórios dinâmicos e muito mais.</p>
                                <p>Além de proteção e análise profunda de dados, o Power BI possibilita um melhor entendimento das informações fornecidas, estejam elas em bancos de dados distintos ou em uma planilha do excel.</p>
                                <p>O Power BI é simples de usar, e nesse curso, você irá aprender a analisar dados disponíveis em tempo real, com diferentes fontes de dados. Dê o primeiro passo para se tornar especialista em Big Data.</p>
                                <p>O que você aprenderá?</p>
                                <p>Com o treinamento de Power BI da Growth2Data, você irá aprender a fazer análise de self service em escala corporativa, reduzir o custo e a complexidade dos dados disponíveis para seu objetivo.</p>
                                <p>Além disso, você vai encontrar e compartilhar insights significativos, com diversas visualizações, funcionalidades internas de IA, com integração ao excel. É possível também conectar dados personalizados e pré-criados conectando o Power BI com outras ferramentas.</p>
                                <p>Você também irá aprender:
                                    <ul>
                                        <li>Criar dashboards e relatórios dinâmicos;</li>
                                        <li>Construir gráficos, indicadores, mapas e outras funcionalidades;</li>
                                        <li>Construir relatórios próprios, intuitivos e com um visual incrível;</li>
                                        <li>Unificar dados de diversas fontes diferentes;</li>
                                        <li>E muito mais.</li>
                                    </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section-iii" data-aos="fade-down">
                    <h3>CONTEÚDO PROGRAMÁTICO:</h3>
                    <div class="section-iii-body mt-3">
                        <ul>
                            <li>O que é Power BI?</li>
                            <li>Versão Desktop x Online</li>
                            <li>Linguagens</li>
                            <li>Obter Dados Externos</li>
                            <li>Etapas Aplicadas</li>
                            <li>Tipos De Dados</li>
                            <li>Dividir Coluna e Mesclar Colunas</li>
                            <li>Acrescentar Consultas</li>
                            <li>Leitura da Pasta</li>
                            <li>Coluna Condiciona</li>
                            <li>Preenchimento</li>
                            <li>Criando Tabelas</li>
                            <li>Mesclar Consultas</li>
                            <li>Transpor e Transformar Colunas em Linhas</li>
                            <li>Colunas Dinâmicas</li>
                            <li>Modelagem</li>
                            <li>Resumo Padrão</li>
                            <li>Classificar por Coluna</li>
                            <li>Tabela Calendário</li>
                            <li>Construindo o Modelo de Dados</li>
                            <li>Introdução ao Modelo Relacional</li>
                            <li>Tabelas Fato e Dimensão</li>
                            <li>Cardinalidade</li>
                            <li>Gerenciando Relações</li>
                            <li>Criando Colunas Calculadas</li>
                            <li>Criando Medidas</li>
                            <li>Funções DAX Essenciais</li>
                            <li>SUM</li>
                            <li>MAX</li>
                            <li>MIN</li>
                            <li>AVERAGE</li>
                            <li>DISTINCTCOUNT</li>
                            <li>Visualização (Cartão, Indicador, KPI)</li>
                            <li>Cartão</li>
                            <li>Indicador (Velocímetro)</li>
                            <li>KPI</li>
                            <li>Visualização (BookMarks)</li>
                            <li>Visualização (Sincronização de filtro)</li>
                            <li>Visualização (Drill Down)</li>
                            <li>Visualização (Tooltips)</li>
                            <li>Publicação</li>
                            <li>Dashboard</li>
                            <li>Compartilhamento</li>
                            <li>RLS (segurança em nível de linha)</li>
                            <li>Automatização (Gateway)</li>
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