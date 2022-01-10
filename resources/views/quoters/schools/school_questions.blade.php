@extends('layouts.simple_app', ['title' => 'Quoter | Escola', 'page' => 'school_questions'])

@section('content')
<div class="gradient-primary" style="min-height: 100vh">
    <div class="consultancy-service">
        <div class="container">
            <div class="light-box p-3">
                <a href="javascript:;" class="goto-prev-page-link"><i class="bi bi-chevron-left"></i> VOLTAR</a>
                <div class="light-box-header my-4">
                    <div class="title text-center">
                        <h3>ESCOLA - 
                            @if (request()->segment('3') == 'tableau-escola')
                                Tableau
                            @elseif (request()->segment('3') == 'pbi-escola')
                                Power BI
                            @elseif (request()->segment('3') == 'python-escola')
                                Python
                            @else
                                SQL
                            @endif
                        </h3>
                    </div>
                </div>
                <form method="post" action="{{ url('consultoria-servico') }}">
                    @csrf
                    <div id="question_form">
                        <div class="light-box-body px-lg-5 pb-md-5 pb-sm-4 pb-3">
                            <div class="row">
                                <div class="col-12 mb-4 mb-md-3 mb-sm-3 d-flex justify-content-center">
                                    <div class="questions-list">
                                        <div class="text-center">
                                            <div class="d-inline-block">
                                                <div class="form-message form-message-error alert alert-danger d-flex alert-dismissible fade show" role="alert">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                                    </svg>
                                                    <div>Por favor, preencha o formulário corretamente</div>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="question-school-option">
                                            <h4 class="quoter-question-title text-center">Quantas pessoas você precisa treinar?</h4>
                                            <ul class="list-unstyled d-flex flex-wrap justify-content-center mb-0">
                                                <li>
                                                    <label class="color-radio primary">
                                                        <input type="radio" name="trainers_amt" value="1-3" />
                                                        <span>1 a 3 </span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="color-radio primary">
                                                        <input type="radio" name="trainers_amt" value="4-10" />
                                                        <span>4 a 10 </span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="color-radio primary">
                                                        <input type="radio" name="trainers_amt" value="10+" />
                                                        <span>10+</span>
                                                    </label>
                                                </li>
                                            </ul>
                                            <div class="error text-center">O campo é obrigatório.</div>
                                        </div>
                                        <div class="question-school-option mt-4">
                                            <h4 class="quoter-question-title text-center">Qual o nível de experiência do público do treinamento?</h4>
                                            <ul class="list-unstyled d-flex flex-wrap justify-content-center mb-0">
                                                <li>
                                                    <label class="color-radio primary">
                                                        <input type="radio" name="experience_level" value="beginner" />
                                                        <span>Iniciante</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="color-radio primary">
                                                        <input type="radio" name="experience_level" value="intermediary" />
                                                        <span>Intermediário</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="color-radio primary">
                                                        <input type="radio" name="experience_level" value="advanced" />
                                                        <span>Avançado</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="color-radio primary">
                                                        <input type="radio" name="experience_level" value="mix" />
                                                        <span>Mix</span>
                                                    </label>
                                                </li>
                                            </ul>
                                            <div class="error text-center">O campo é obrigatório.</div>
                                        </div>
                                        <div class="question-school-option mt-4">
                                            <h4 class="quoter-question-title text-center">Onde você está localizado?</h4>
                                            <div class="gm-form-group mb-3">
                                                <input type="text" name="location" class="gm-form-control" />
                                            </div>
                                        </div>
                                        <div class="question-school-option mt-4">
                                            <h4 class="quoter-question-title text-center">Qual formato de treinamento você prefere?</h4>
                                            <ul class="list-unstyled d-flex flex-wrap justify-content-center mb-0">
                                                <li>
                                                    <label class="color-radio primary">
                                                        <input type="radio" name="training_format" value="" />
                                                        <span>Presencial</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="color-radio primary">
                                                        <input type="radio" name="training_format" value="online" />
                                                        <span>Online</span>
                                                    </label>
                                                </li>
                                            </ul>
                                            <div class="error text-center">O campo é obrigatório.</div>
                                        </div>
                                    </div>
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

@push('js')
@endpush
