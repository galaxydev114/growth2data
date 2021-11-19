@extends('layouts.simple_app', ['title' => 'Quoter', 'page' => 'quoter'])

@section('content')
<div class="gradient-primary-wrap" style="min-height: 100vh">
    <div class="quoter">
        <div class="container">
            <div class="light-box p-3">
                <a href="{{ route('home') }}" class="goto-prev-page-link"><i class="bi bi-chevron-left"></i> VOLTAR</a>
                <div class="light-box-header my-4">
                    <div class="title text-center">
                        <h3>COMO PODEMOS AJUDAR VOCÊ?</h3>
                        <p>esponda algumas perguntas para conhecermos você melhor.</p>
                    </div>
                </div>
                <div class="light-box-body px-lg-5 pt-lg-4 pt-md-4 pb-5 pt-sm-0">
                    <div class="row">
                        <div class="col-lg-6 mb-4 mb-md-3 mb-sm-3">
                            <a href="{{ url('consultoria-servico') }}">
                                <div class="quoter-consultancy quoter-item mx-xl-3">
                                    <div class="quoter-consultancy-content quoter-item-content">
                                        <div class="quoter-consultancy-header mb-3 text-end">
                                            <div class="increase-icon">
                                                <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M55 35C55 33.6193 56.1193 32.5 57.5 32.5H70C71.3807 32.5 72.5 33.6193 72.5 35V72.5C72.5 73.8807 71.3807 75 70 75H57.5C56.1193 75 55 73.8807 55 72.5V35ZM30 45C30 43.6193 31.1193 42.5 32.5 42.5H45C46.3807 42.5 47.5 43.6193 47.5 45V72.5C47.5 73.8807 46.3807 75 45 75H32.5C31.1193 75 30 73.8807 30 72.5V45ZM5 55C5 53.6193 6.11929 52.5 7.5 52.5H20C21.3807 52.5 22.5 53.6193 22.5 55V72.5C22.5 73.8807 21.3807 75 20 75H7.5C6.11929 75 5 73.8807 5 72.5V55Z" fill="white"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M60 7.5C60 6.11929 61.1193 5 62.5 5H72.5C73.8807 5 75 6.11929 75 7.5V17.5C75 18.8807 73.8807 20 72.5 20C71.1193 20 70 18.8807 70 17.5V13.0671L51.6609 29.3685C50.8316 30.1056 49.6158 30.208 48.675 29.62L29.9252 17.9014L8.71407 29.6854C7.50712 30.3559 5.98511 29.9211 5.31457 28.7141C4.64404 27.5071 5.0789 25.9851 6.28586 25.3146L28.7859 12.8146C29.5811 12.3728 30.5535 12.3979 31.325 12.88L49.7379 24.3881L65.9245 10H62.5C61.1193 10 60 8.88071 60 7.5Z" fill="white"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="quoter-consultancy-body px-3 px-lg-5 px-md-4 pt-md-2 pt-lg-3 pb-4 pb-lg-5">
                                            <h2>CONSULTORIA</h2>
                                            <p>Conheça nossa consultoria especializada em Business Intelligence e saiba como organizar a coleta de dados empresariais da melhor maneira possível.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 mb-4 mb-md-3 mb-sm-3">
                            <a href="">
                                <div class="quoter-school quoter-item mx-xl-3">
                                    <div class="quoter-school-content quoter-item-content">
                                        <div class="quoter-school-header mb-3 text-end">
                                            <div class="presentation-icon">
                                                <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.99998 12.5C4.99998 8.35786 8.35786 5 12.5 5H67.5C71.6421 5 75 8.35786 75 12.5C75 16.6421 71.6421 20 67.5 20H12.5C8.35786 20 4.99998 16.6421 4.99998 12.5ZM-83 15C-84.3807 15 -85.5 16.1193 -85.5 17.5C-85.5 18.8807 -84.3807 20 -83 20H-28C-26.6193 20 -25.5 18.8807 -25.5 17.5C-25.5 16.1193 -26.6193 15 -28 15H-55.5H-83Z" fill="white"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5 52.5C5 48.3579 8.35786 45 12.5 45H67.5C71.6421 45 75 48.3579 75 52.5C75 56.6421 71.6421 60 67.5 60H12.5C8.35786 60 5 56.6421 5 52.5ZM-77.5 42.5C-78.8807 42.5 -80 43.6193 -80 45C-80 46.3807 -78.8807 47.5 -77.5 47.5H-22.5C-21.1193 47.5 -20 46.3807 -20 45C-20 43.6193 -21.1193 42.5 -22.5 42.5H-77.5Z" fill="white"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 17.5C10 16.1193 11.1193 15 12.5 15H67.5C68.8807 15 70 16.1193 70 17.5V47.5C70 48.8807 68.8807 50 67.5 50H12.5C11.1193 50 10 48.8807 10 47.5V17.5Z" fill="white"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M40.0001 55C40.8031 55 41.5573 55.3858 42.0273 56.037L52.8526 71.037C53.6606 72.1566 53.408 73.7192 52.2884 74.5272C51.1688 75.3352 49.6062 75.0826 48.7982 73.963L40.0001 61.772L31.202 73.963C30.394 75.0826 28.8313 75.3352 27.7117 74.5272C26.5921 73.7192 26.3395 72.1566 27.1475 71.037L37.9728 56.037C38.4428 55.3858 39.197 55 40.0001 55Z" fill="white"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M59.3429 23.3107C60.2759 24.3285 60.2072 25.9099 59.1894 26.8429L44.1894 40.5929C43.3186 41.3911 42.0081 41.4709 41.0469 40.7843L33.8903 35.6725L26.627 41.8982C25.5787 42.7967 24.0005 42.6753 23.1019 41.627C22.2033 40.5787 22.3248 39.0004 23.3731 38.1019L32.1231 30.6019C32.9962 29.8535 34.2673 29.7972 35.2031 30.4657L42.3044 35.538L55.8107 23.1571C56.8285 22.2241 58.41 22.2929 59.3429 23.3107Z" fill="#81828B"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="quoter-school-body px-3 px-lg-5 px-md-4 pt-md-2 pt-lg-3 pb-4 pb-lg-5">
                                            <h2>ESCOLA</h2>
                                            <p>Deseja aprender mais sobre como lidar com os dados e aprimorar o seu conhecimento em BI e Tableau? Conheça nossos cursos disponíveis.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    (function() {
       
    })();
</script>
@endpush