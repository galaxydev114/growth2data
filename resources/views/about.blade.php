@extends('layouts.app', ['title' => 'Sobre a G2D', 'page' => 'about'])

@section('content')
<div class="gradient-primary">
    <div id="about-us">
        <div class="container">
            <div class="light-box">
                <div class="light-box-header my-4">
                    <div class="title text-center">
                        <h3>SOBRE A G2D</h3>
                    </div>
                </div>
                <div class="light-box-body">
                    <div class="about-us-text px-lg-5 px-md-3 px-sm-2 px-1">
                        <p>
                            A <b>Growth2Data</b> nasceu da união de profissionais dedicados com experiência em empresas multinacionais de pequeno, médio e grande porte. Com seriedade e profissionalismo, ao longo de mais de 10 anos, desenvolvemos competências essenciais para o mercado de Business Intelligence.
                            Com a <b>G2D Consultoria</b>, temos a missão de ajudar pessoas e empresas a transformarem dados em insights poderosos. Para isso, oferecemos soluções nas áreas de TI, com foco em Business Intelligence e Banco de Dados e levamos para a sua empresa as melhores práticas de mercado, considerando as necessidades específicas do seu negócio.
                        </p>
                        <p>
                            Buscando disseminar nosso conhecimento e capacitar profissionais, desenvolvemos o <b>G2D Training Center</b> para oferecer treinamentos exclusivos nas áreas de Business Intelligence. Nossos cursos são ministrados por profissionais extremamente talentosos e especialistas nas mais diversas áreas de Business Intelligence e tecnologia.
                        </p>
                    </div>
                    <div id="team">
                        <h3>NOSSO TIME</h3>
                        <div class="member-cards">
                            <div class="member">
                                <div class="member-img">
                                    <img src="{{ asset('img') }}/blank-img.png" />
                                </div>
                                <div class="member-detail">
                                    <span class="head">
                                        <h6>MAURO VALERI</h6>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </span>
                                    <p>
                                        Pós-graduado em Business Intelligence e Big Data e  experiência em proposição e gerenciamento de ações e soluções de arquiteturas de BI, Big Data, integração de dados, processamento e análise de dados, além de um vasto conhecimento da ferramenta Tableau.
                                    </p>
                                </div>
                            </div>
                            <div class="member">
                                <div class="member-img">
                                    <img src="{{ asset('img') }}/blank-img.png" />
                                </div>
                                <div class="member-detail">
                                    <span class="head">
                                        <h6>MAURO VALERI</h6>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </span>
                                    <p>
                                        Pós-graduado em Business Intelligence e Big Data e  experiência em proposição e gerenciamento de ações e soluções de arquiteturas de BI, Big Data, integração de dados, processamento e análise de dados, além de um vasto conhecimento da ferramenta Tableau.
                                    </p>
                                </div>
                            </div>
                            <div class="member">
                                <div class="member-img">
                                    <img src="{{ asset('img') }}/blank-img.png" />
                                </div>
                                <div class="member-detail">
                                    <span class="head">
                                        <h6>MAURO VALERI</h6>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </span>
                                    <p>
                                        Pós-graduado em Business Intelligence e Big Data e  experiência em proposição e gerenciamento de ações e soluções de arquiteturas de BI, Big Data, integração de dados, processamento e análise de dados, além de um vasto conhecimento da ferramenta Tableau.
                                    </p>
                                </div>
                            </div>
                            <div class="member">
                                <div class="member-img">
                                    <img src="{{ asset('img') }}/blank-img.png" />
                                </div>
                                <div class="member-detail">
                                    <span class="head">
                                        <h6>MAURO VALERI</h6>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </span>
                                    <p>
                                        Pós-graduado em Business Intelligence e Big Data e  experiência em proposição e gerenciamento de ações e soluções de arquiteturas de BI, Big Data, integração de dados, processamento e análise de dados, além de um vasto conhecimento da ferramenta Tableau.
                                    </p>
                                </div>
                            </div>
                            <div class="member">
                                <div class="member-img">
                                    <img src="{{ asset('img') }}/blank-img.png" />
                                </div>
                                <div class="member-detail">
                                    <span class="head">
                                        <h6>MAURO VALERI</h6>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </span>
                                    <p>
                                        Pós-graduado em Business Intelligence e Big Data e  experiência em proposição e gerenciamento de ações e soluções de arquiteturas de BI, Big Data, integração de dados, processamento e análise de dados, além de um vasto conhecimento da ferramenta Tableau.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('css')
<link href="{{ asset('vendor') }}/form-validation/form-validation.min.css" rel="stylesheet" />
@endpush

@push('js')
<script src="{{ asset('js') }}/jquery-3.6.0.min.js"></script>
<script src="{{ asset('vendor') }}/form-validation/jquery.validate.min.js"></script>
<script>
    $(function() {
        $('form').validate({
            rules: {
                'name': {
                    required: true
                },
                'surname': {
                    required: true
                },
                'email': {
                    required: true,
                    email: true
                },
                'telephone': {
                    required: true
                },
                'company': {
                    required: true
                },
                'description': {
                    required: true
                }
            },
            messages: {
                'name': 'Por favor, insira o nome',
                'surname': 'Por favor, insira o sobrenome',
                'email': {
                    'required': 'Por favor insira o email',
                    'email': "Por favor insira um endereço de e-mail válido"
                },
                'telephone': 'Por favor insira o telefone',
                'company': 'Por favor, insira a empresa',
                'description': 'Por favor insira a descrição' 
            },
            submitHandler: function(form) {
                $('.bs-spinner').removeClass('d-none');
                form.submit();
            }
        });
    });
</script>
@endpush