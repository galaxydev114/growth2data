@extends('layouts.simple_app', ['title' => 'Submetido com sucesso!', 'page' => 'success_submitted'])

@section('content')
<div class="gradient-primary" style="min-height: 100vh">
    <div class="consultancy-service">
        <div class="container">
            <div class="light-box p-3">
                <div class="light-box-boday">
                    <div class="msg-sent">
                        <div class="msg-sent-content container p-3">
                            <div class="msg-sent-body text-center px-lg-5">
                                <h3>Suas informações foram enviadas!</h3>
                                <p>Não se preocupe, a gente responde rápido!</p>
                                <div data-aos="fade-up" data-aos-delay="200">
                                    <div class="text-center">
                                        <a href="{{ route('home') }}" class="btn-goto-home scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                            <i class="bi bi-arrow-left"></i>
                                            <span>Voltar para a página inicial</span>
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
</div>
@endsection