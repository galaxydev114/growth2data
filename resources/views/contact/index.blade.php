@extends('layouts.app', ['title' => 'Contato', 'page' => 'contact'])

@section('content')
<div class="gradient-primary-wrap">
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
                                <form>
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
                                        <button class="btn outline-btn primary px-5">ENVIAR</button>
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
                                            <i class="bi bi-whatsapp"></i>
                                            <h3>Mensagem via WhatsApp</h3>
                                            <span class="d-block text-black">+55 000 00000-0000</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-12">
                                    <a href="mailto:contato@growth2data.com.br">
                                        <div class="info-box">
                                            <i class="bi bi-envelope"></i>
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