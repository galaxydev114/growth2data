@extends('layouts.simple_app', ['title' => 'Consultoria Serviço', 'page' => 'consultanty_service'])

@section('content')
<div class="gradient-primary" style="min-height: 100vh">
    <div class="consultancy-service">
        <div class="container">
            <div class="light-box p-3">
                <a href="{{ route('home') }}" class="goto-prev-page-link"><i class="bi bi-chevron-left"></i> VOLTAR PARA CASA</a>
                <div class="light-box-header my-4">
                    <div class="title text-center">
                        <div class="increase-icon">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M55 35C55 33.6193 56.1193 32.5 57.5 32.5H70C71.3807 32.5 72.5 33.6193 72.5 35V72.5C72.5 73.8807 71.3807 75 70 75H57.5C56.1193 75 55 73.8807 55 72.5V35ZM30 45C30 43.6193 31.1193 42.5 32.5 42.5H45C46.3807 42.5 47.5 43.6193 47.5 45V72.5C47.5 73.8807 46.3807 75 45 75H32.5C31.1193 75 30 73.8807 30 72.5V45ZM5 55C5 53.6193 6.11929 52.5 7.5 52.5H20C21.3807 52.5 22.5 53.6193 22.5 55V72.5C22.5 73.8807 21.3807 75 20 75H7.5C6.11929 75 5 73.8807 5 72.5V55Z" fill="#939496"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M60 7.5C60 6.11929 61.1193 5 62.5 5H72.5C73.8807 5 75 6.11929 75 7.5V17.5C75 18.8807 73.8807 20 72.5 20C71.1193 20 70 18.8807 70 17.5V13.0671L51.6609 29.3685C50.8316 30.1056 49.6158 30.208 48.675 29.62L29.9252 17.9014L8.71407 29.6854C7.50712 30.3559 5.98511 29.9211 5.31457 28.7141C4.64404 27.5071 5.0789 25.9851 6.28586 25.3146L28.7859 12.8146C29.5811 12.3728 30.5535 12.3979 31.325 12.88L49.7379 24.3881L65.9245 10H62.5C61.1193 10 60 8.88071 60 7.5Z" fill="#939496"/>
                            </svg>
                        </div>
                        <h3 id="main-title">CONSULTORIA</h3>
                        <h4 id="bi-q-title" class="d-none">Solução em Business Intelligence</h4>
                        <h4 id="bd-q-title" class="d-none">Solução em Base de Dados</h4>
                        <h4 id="app-q-title" class="d-none">Aplicativo</h4>
                        <div id="contact-detail-form-title" class="d-none">
                            <h3>Seus dados para contato</h3>
                            <h5>Estamos quase lá!</h5>
                        </div>
                        <div id="profile-title" class="d-none">
                            <h3>Desenvolvimento de Dashboards</h3>
                            <h5>Só mais uma coisa: com qual descrição você se identifica?</h5>
                        </div>
                    </div>
                </div>
                <form method="post" action="{{ url('consultoria-servico') }}">
                    @csrf
                    <div id="interest" role="stepForm">
                        <div class="light-box-body px-lg-5 pt-lg-4 pt-md-4 pt-sm-0 pb-md-5 pb-sm-4 pb-3">
                            <div class="row">
                                <div class="col-12 mb-4 mb-md-3 mb-sm-3">
                                    <div class="consultancy-service-items">
                                        <div class="text-center">
                                            <div class="d-inline-block">
                                                <div class="form-message form-message-error alert alert-danger d-flex alert-dismissible fade show d-none" role="alert">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                                    </svg>
                                                    <div>Escolha um dos abaixo</div>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                                <h4>Escolha o serviço que você precisa:</h4>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <label class="color-radio primary">
                                                        <input type="radio" name="interest" value="1" />
                                                        <span>Soluções em Business Intelligence</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="color-radio primary">
                                                        <input type="radio" name="interest" value="2" />
                                                        <span>Soluções em Base de Dados</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="color-radio primary">
                                                        <input type="radio" name="interest" value="3" />
                                                        <span>Aplicativos</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="color-radio primary">
                                                        <input type="radio" name="interest" value="4" />
                                                        <span>Sites</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Questionario (Soluções em Business Intelligence / Soluções em Base de Dados) -->
                    <div id="serviceQuestion" class="d-none" role="stepForm">
                        <div class="light-box-body px-lg-5 pb-md-5 pb-sm-4 pb-3">
                            <div class="row">
                                <div class="col-12 mb-4 mb-md-3 mb-sm-3">
                                    <div class="consultancy-service-items">
                                        <div class="text-center">
                                            <div class="d-inline-block">
                                                <div class="form-message form-message-error alert alert-danger d-flex alert-dismissible fade show d-none" role="alert">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                                    </svg>
                                                    <div>Por favor, preencha o formulário corretamente</div>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-item" data-alias="dashboards_amt">
                                            <h4 class="text-center">Quantos dashboards você precisa desenvolver?</h4>
                                            <ul class="list-unstyled d-flex flex-wrap justify-content-center">
                                                <li>
                                                    <label class="color-radio primary">
                                                        <input type="radio" name="dashboards_amt" value="1-3" />
                                                        <span>1 a 3</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="color-radio primary">
                                                        <input type="radio" name="dashboards_amt" value="4-10" />
                                                        <span>4 a 10</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="color-radio primary">
                                                        <input type="radio" name="dashboards_amt" value="10+" />
                                                        <span>10+</span>
                                                    </label>
                                                </li>
                                            </ul>
                                            <div class="error text-center d-none">O campo é obrigatório.</div>
                                        </div>
                                        <div class="service-item" data-alias="data_sources_amt">
                                            <h4 class="text-center">Quantas fontes de dados você tem?</h4>
                                            <ul class="list-unstyled d-flex flex-wrap justify-content-center">
                                                <li>
                                                    <label class="color-radio primary">
                                                        <input type="radio" name="data_sources_amt" value="1" />
                                                        <span>1</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="color-radio primary">
                                                        <input type="radio" name="data_sources_amt" value="2-3" />
                                                        <span>2 a 3</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="color-radio primary">
                                                        <input type="radio" name="data_sources_amt" value="4+" />
                                                        <span>4+</span>
                                                    </label>
                                                </li>
                                            </ul>
                                            <div class="error text-center d-none">O campo é obrigatório.</div>
                                        </div>
                                        <div class="service-item" data-alias="data_engineering_amt">
                                            <h4 class="text-center">Você precisa de ajuda com a engenharia dos dados?</h4>
                                            <ul class="list-unstyled d-flex flex-wrap justify-content-center">
                                                <li>
                                                    <label class="color-radio primary">
                                                        <input type="radio" name="data_engineering_amt" value="yes" />
                                                        <span>Sim</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="color-radio primary">
                                                        <input type="radio" name="data_engineering_amt" value="no" />
                                                        <span>Não</span>
                                                    </label>
                                                </li>
                                            </ul>
                                            <div class="error text-center d-none">O campo é obrigatório.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Consultoria app -->
                    <div id="app" class="d-none" role="stepForm">
                        <div class="light-box-body px-lg-5 pb-md-5 pb-sm-4 pb-3">
                            <div class="row">
                                <div class="col-12 mb-4 mb-md-3 mb-sm-3">
                                    <div class="consultancy-service-items">
                                        <div class="text-center">
                                            <div class="d-inline-block">
                                                <div class="form-message form-message-error alert alert-danger d-flex alert-dismissible fade show d-none" role="alert">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                                    </svg>
                                                    <div>Por favor, escolha um dos seguintes</div>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-item">
                                            <h4 class="text-center">Você já tem a ideia de seu aplicativo?</h4>
                                            <ul class="list-unstyled d-flex flex-wrap justify-content-center">
                                                <li>
                                                    <label class="color-radio primary">
                                                        <input type="radio" name="app_service_type" value="1" />
                                                        <span>Sim, preciso apenas que seja desenvolvido!</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="color-radio primary">
                                                        <input type="radio" name="app_service_type" value="2" />
                                                        <span>Não, preciso de ajuda para elaborá-la!</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact detail -->
                    <div id="contactDetail" class="contact-detail-form d-none" role="stepForm">
                        <div class="light-box-body px-lg-5 pb-md-5 pb-sm-4 pb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="gm-form-group">
                                        <label for="name">Nome</label>
                                        <input type="text" name="name" id="name" class="gm-form-control" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="gm-form-group">
                                        <label for="surname">Sobrenome</label>
                                        <input type="text" name="surname" id="surname" class="gm-form-control" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="gm-form-group">
                                        <label for="email">E-mail</label>
                                        <input type="email" name="email" id="email" class="gm-form-control" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="gm-form-group">
                                        <label for="telephone">Telefone</label>
                                        <input type="text" name="telephone" id="telephone" class="gm-form-control" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="gm-form-group">
                                        <label for="company">Empresa</label>
                                        <input type="text" name="company" id="company" class="gm-form-control" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="gm-form-group">
                                        <label for="description">Comentários que você considera relevantes</label>
                                        <textarea name="description" id="description" class="gm-form-control" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Consultancy profile -->
                    <div id="profile" class="consultancy-profile d-none" role="stepForm">
                        <div class="light-box-body px-lg-5 pb-md-5 pb-sm-4 pb-3">
                            <div class="text-center">
                                <div class="d-inline-block">
                                    <div class="form-message form-message-error alert alert-danger d-flex alert-dismissible fade show d-none" role="alert">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                        </svg>
                                        <div>Por favor, escolha um dos seguintes</div>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="col-lg-6">
                                    <label for="radio_1">
                                        <input type="radio" name="dashboard_type" id="radio_1" value="1" hidden />
                                        <div class="card-box text-center">
                                            <div class="card-box-top">
                                                <h5>Inteligente, prescritivo e prefere pistas visuais.</h5>
                                            </div>
                                            <div class="card-box-body">
                                                <h5>TIPO DE DASHBOARD</h5>
                                                <p>Ferramentas de tomada de decisões.</p>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label for="radio_2">
                                        <input type="radio" name="dashboard_type" id="radio_2" value="2" hidden />
                                        <div class="card-box text-center">
                                            <div class="card-box-top">
                                                <h5>Previdente, tático, confiante.</h5>
                                            </div>
                                            <div class="card-box-body">
                                                <h5>TIPO DE DASHBOARD</h5>
                                                <p>Estilo alerta.</p>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label for="radio_3">
                                        <input type="radio" name="dashboard_type" id="radio_3" value="3" hidden />
                                        <div class="card-box text-center">
                                            <div class="card-box-top">
                                                <h5>Descritivo, minimalista, social.</h5>
                                            </div>
                                            <div class="card-box-body">
                                                <h5>TIPO DE DASHBOARD</h5>
                                                <p>Insights automáticos.</p>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label for="radio_4">
                                        <input type="radio" name="dashboard_type" id="radio_4" value="4" hidden />
                                        <div class="card-box text-center">
                                            <div class="card-box-top">
                                                <h5>Confiável, simples, honesto.</h5>
                                            </div>
                                            <div class="card-box-body">
                                                <h5>TIPO DE DASHBOARD</h5>
                                                <p>Tabelas de texto.</p>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="light-box-footer">
                        <div class="text-center mt-lg-3 mb-3">
                            <button type="button" id="prev" class="btn outline-btn primary me-3 d-none">VOLTAR</button>
                            <button type="button" id="next" class="btn outline-btn primary">PRÓXIMA</button>
                            <button type="submit" id="submit" class="btn outline-btn primary d-none"><span class="bs-spinner spinner-border spinner-border-sm d-none"></span>ENVIAR</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('css')
<link href="{{ asset('vendor') }}/form-validation/form-validation.min.css" rel="stylesheet" />
@endpush

@push('js')
<script src="{{ asset('vendor') }}/form-validation/jquery.validate.min.js"></script>
<script>
    $(function() {
        var sourceStep = '';
        var targetStep = '';

        $('#next').on('click', function() {
            if (sourceStep === '' && targetStep === '') {
                if (validateStepForm('interest')) {
                    var interest = $('[name="interest"]:checked').val();
                    if (interest == 1) {
                        targetStep = 'bi-profile';
                        openStep('bi-q');
                    } else if (interest == 2) {
                        targetStep = 'bd-profile';
                        openStep('bd-q');
                    } else if (interest == 3) {
                        targetStep = 'final';
                        openStep('app-q');
                    } else if (interest == 4) {
                        openStep('final');
                    }
                    sourceStep = 'interest';
                }
            } else if (sourceStep === 'interest' && targetStep === 'bi-profile') {
                if (validateStepForm('bi-q')) {
                    openStep('bi-profile');
                    sourceStep = 'bi-q';
                    targetStep = 'final';
                }
            } else if (sourceStep === 'interest' && targetStep === 'bd-profile') {
                if (validateStepForm('bd-q')) {
                    openStep('bd-profile');
                    sourceStep = 'bd-q';
                    targetStep = 'final';
                }
            } else if (sourceStep === 'bi-q' && targetStep === 'final') {
                if (validateStepForm('profile')) {
                    openStep('final');
                    sourceStep = 'bi-profile';
                    targetStep = '';
                }
            } else if (sourceStep === 'bd-q' && targetStep === 'final') {
                if (validateStepForm('profile')) {
                    openStep('final');
                    sourceStep = 'bd-profile';
                    targetStep = '';
                }
            } else if (sourceStep === 'interest' && targetStep === 'final') {
                if (validateStepForm('app')) {
                    openStep('final');
                    sourceStep = 'app-q';
                    targetStep = '';
                }
            }
        });

        // returning to prev page
        $('#prev').on('click', function() {
            if (sourceStep === 'interest') {
                openStep('interest');
                sourceStep = '';
                targetStep = '';
            } else if (sourceStep === 'bi-q') {
                openStep('bi-q');
                sourceStep = 'interest';
                targetStep = 'bi-profile';
            } else if (sourceStep === 'bd-q') {
                openStep('bd-q');
                sourceStep = 'interest';
                targetStep = 'bd-profile';
            } else if (sourceStep === 'bi-profile') {
                openStep('bi-profile');
                sourceStep = 'bi-q';
                targetStep = 'final';
            } else if (sourceStep === 'bd-profile') {
                openStep('bd-profile');
                sourceStep = 'bd-q';
                targetStep = 'final';
            } else if (sourceStep === 'app-q') {
                openStep('app-q');
                sourceStep = 'interest';
                targetStep = 'final';
            }
        });

        $('[name="interest"]').on('change', function() {
            $('form').find('input:radio:not([name="interest"])').prop('checked', false);
            $('form').find('input:text, textarea').val('');
            $('form').find('.form-message, .error').addClass('d-none');
            $('form').find('input:text, textarea').removeClass('invalid');
        });

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

        // validate each step form
        function validateStepForm(stepForm) {
            var invalids = 0;
            
            // interest form validation
            if (stepForm === 'interest') {
                if ($('[name="interest"]:checked').length === 0) {
                    invalids++;
                    $('#interest .form-message').removeClass('d-none');
                } else {
                    $('#interest .form-message').addClass('d-none');
                }
            } else if (stepForm === 'bi-q' || stepForm === 'bd-q') {
                var inputs = ['dashboards_amt', 'data_sources_amt', 'data_engineering_amt'];
                inputs.forEach(function(input) {
                    if ($(`[name="${input}"]:checked`).length === 0) {
                        invalids++;
                        $(`#serviceQuestion .form-message, [data-alias="${input}"] .error`).removeClass('d-none');
                    } else {
                        $(`[data-alias="${input}"] .error`).addClass('d-none');
                    }
                });

                if (invalids === 0) {
                    $('#serviceQuestion .form-message').addClass('d-none');
                }
            } else if (stepForm === 'profile') {
                if ($('[name="dashboard_type"]:checked').length === 0) {
                    invalids++;
                    $('#profile .form-message').removeClass('d-none');
                } else {
                    $('#profile .form-message').addClass('d-none');
                }
            } else if (stepForm === 'app') {
                if ($('[name="app_service_type"]:checked').length === 0) {
                    invalids++;
                    $('#app .form-message').removeClass('d-none');
                } else {
                    $('#app .form-message').addClass('d-none');
                }
            }

            return !invalids;
        }

        // function to continue steps
        function openStep(step) {
            var hideEls = [],
                showEls = [];

            if (step === 'interest') {
                hideEls = ['.title h4', '#contact-detail-form-title', '#profile-title', '[role="stepForm"]', '#submit', '#prev'];
                showEls = ['#main-title', '#interest', '.increase-icon', '#next'];
            } else if (step === 'bi-q') {
                hideEls = ['.title h4', '#contact-detail-form-title', '#profile-title', '[role="stepForm"]', '#submit'];
                showEls = ['#main-title', '#bi-q-title', '#serviceQuestion', '.increase-icon', '#next', '#prev'];
            } else if (step === 'bd-q') {
                hideEls = ['.title h4', '#contact-detail-form-title', '#profile-title', '[role="stepForm"]', '#submit'];
                showEls = ['#main-title', '#bd-q-title', '#serviceQuestion', '.increase-icon', '#next', '#prev'];
            } else if (step === 'app-q') {
                hideEls = ['.title h4', '#contact-detail-form-title', '#profile-title', '[role="stepForm"]', '#submit'];
                showEls = ['#main-title', '#app-q-title', '#app', '.increase-icon', '#next', '#prev'];
            } else if (step === 'final') {
                hideEls = ['.title h4', '#main-title', '.increase-icon', '#profile-title', '[role="stepForm"]', '#next'];
                showEls = ['#contact-detail-form-title', '#contactDetail', '#submit', '#prev'];
            } else if (step === 'bi-profile' || step === 'bd-profile') {
                hideEls = ['.title h4', '#main-title', '#contact-detail-form-title', '.increase-icon', '[role="stepForm"]', '#submit'];
                showEls = ['#profile-title', '#profile', '#next', '#prev'];
            }

            hideEls.forEach(function(hideEl) {
                $(hideEl).addClass('d-none');
            });
            showEls.forEach(function(showEl) {
                $(showEl).removeClass('d-none');
            });
        }
    });
</script>
@endpush