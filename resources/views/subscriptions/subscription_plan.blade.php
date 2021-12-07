@extends('layouts.app', ['title' => 'Planos clube', 'page' => 'subscription_plan'])

@section('content')
<div class="gradient-primary">
    <div id="subscription-plan" class="default-wrap">
        <div class="container">
            <div class="light-box p-3">
                <a href="{{ route('home') }}" class="goto-prev-page-link"><i class="bi bi-chevron-left"></i> VOLTAR PARA CASA</a>
                <div class="light-box-header my-4">
                    <div class="title text-center">
                        <h3>ASSOCIADOS</h3>
                        <p style="max-width: 680px;display: inline-block">
                            Aproveite conteúdos valiosos para transformar dados crus em insights poderosos. 
                            Os membros do Clube de Conteúdo recebem acesso exclusivo a todos os tutoriais em vídeo, conteúdo relacionado às principais ferramentas de BI, atualizações mensais por e-mail, dashboard personalizado e muito mais. Além disso, os membros tem acesso a todo conteúdo atualizado!
                        </p>
                    </div>
                </div>
                <div class="light-box-body pt-3 pb-5">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                            <div class="box">
                                <h3>39,90/MÊS</h3>
                                <ul>
                                    <li>Fontes de Dados</li>
                                    <li>Vídeos de Tutoriais</li>
                                    <li>Dicas de BI dos especialistas</li>
                                    <li>Free-pass nos Workshops</li>
                                    <li>Acesso a todo conteúdo atualizado</li>
                                </ul>
                                <a href="#" class="btn-buy">ASSINAR</a>
                            </div>
                        </div>
                        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                            <div class="box">
                                <h3>349,90/ANO</h3>
                                <ul>
                                    <li>Fontes de Dados</li>
                                    <li>Vídeos de Tutoriais</li>
                                    <li>Dicas de BI dos especialistas</li>
                                    <li>Free-pass nos Workshops</li>
                                    <li>Acesso a todo conteúdo atualizado</li>
                                </ul>
                                <a href="#" class="btn-buy">ASSINAR</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
