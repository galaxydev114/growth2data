@extends('layouts.app', ['title' => 'Contato', 'page' => 'contact'])

@section('content')
<div class="gradient-primary">
    <div id="contact">
        <div class="container">
            <div class="light-box">
                <div class="light-box-header my-4">
                    <div class="title text-center">
                        <h3>Seus dados para contato</h3>
                        <h4>Estamos quase lá!</h4>
                    </div>
                </div>
                <div class="light-box-body">
                    <div class="row px-lg-5 mx-lg-5 pt-4 pb-5 px-md-3">
                        <div class="col-lg-7 pe-lg-5 contact-left-section">
                            <div class="contact-detail-form">
                                <form method="post" action="{{ route('contact.save') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="gm-form-group">
                                                <label for="name">Nome</label>
                                                <input type="text" name="name" class="gm-form-control" id="name" autocomplete="off" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="gm-form-group">
                                                <label for="surname">Sobrenome</label>
                                                <input type="text" name="surname" class="gm-form-control" id="surname" autocomplete="off" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="gm-form-group">
                                                <label for="email">E-mail</label>
                                                <input type="text" name="email" class="gm-form-control" id="email" autocomplete="off" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="gm-form-group">
                                                <label for="telephone">Telefone</label>
                                                <input type="text" name="telephone" class="gm-form-control" id="telephone" autocomplete="off" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="gm-form-group">
                                                <label for="company">Empresa</label>
                                                <input type="text" name="company" class="gm-form-control" id="company" autocomplete="off" />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="gm-form-group">
                                                <label for="description">Comentários que você considera relevantes</label>
                                                <textarea name="description" id="description" class="gm-form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-start mt-3">
                                        <button type="submit" class="btn outline-btn primary px-5"><span class="bs-spinner spinner-border spinner-border-sm d-none"></span> ENVIAR</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-5 ps-lg-5 pt-3 contact-right-section">
                            <div class="or-horizontal-divider mb-4"><span>ou</span></div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="https://api.whatsapp.com/send?phone=55xxxxxxxxxxx">
                                        <div class="info-box">
                                            <span class="info-box-icon"><i class="bi bi-whatsapp"></i></span>
                                            <h3>Mensagem via WhatsApp</h3>
                                            <span class="d-block text-black">+55 000 00000-0000</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-12">
                                    <a href="mailto:contato@growth2data.com.br">
                                        <div class="info-box">
                                            <span class="info-box-icon"><i class="bi bi-envelope"></i></span>
                                            <h3>Envie um email para</h3>
                                            <span class="d-block text-black">contato@growth2data.com.br</span>
                                        </div>
                                    </a>
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