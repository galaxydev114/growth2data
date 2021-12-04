@extends('layouts.simple_app', ['title' => 'Escola', 'page' => 'school'])

@section('content')
<div class="gradient-primary-wrap" style="min-height: 100vh">
    <div class="quoter">
        <div class="container">
            <div class="light-box p-3">
                <a href="{{ route('home') }}" class="goto-prev-page-link"><i class="bi bi-chevron-left"></i> VOLTAR PARA CASA</a>
                <div class="light-box-header my-4">
                    <div class="title text-center">
                        <div class="presentation-icon">
                            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.99998 12.5C4.99998 8.35786 8.35786 5 12.5 5H67.5C71.6421 5 75 8.35786 75 12.5C75 16.6421 71.6421 20 67.5 20H12.5C8.35786 20 4.99998 16.6421 4.99998 12.5ZM-83 15C-84.3807 15 -85.5 16.1193 -85.5 17.5C-85.5 18.8807 -84.3807 20 -83 20H-28C-26.6193 20 -25.5 18.8807 -25.5 17.5C-25.5 16.1193 -26.6193 15 -28 15H-55.5H-83Z" fill="#939496"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5 52.5C5 48.3579 8.35786 45 12.5 45H67.5C71.6421 45 75 48.3579 75 52.5C75 56.6421 71.6421 60 67.5 60H12.5C8.35786 60 5 56.6421 5 52.5ZM-77.5 42.5C-78.8807 42.5 -80 43.6193 -80 45C-80 46.3807 -78.8807 47.5 -77.5 47.5H-22.5C-21.1193 47.5 -20 46.3807 -20 45C-20 43.6193 -21.1193 42.5 -22.5 42.5H-77.5Z" fill="#939496"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10 17.5C10 16.1193 11.1193 15 12.5 15H67.5C68.8807 15 70 16.1193 70 17.5V47.5C70 48.8807 68.8807 50 67.5 50H12.5C11.1193 50 10 48.8807 10 47.5V17.5Z" fill="#939496"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M40.0001 55C40.8031 55 41.5573 55.3858 42.0273 56.037L52.8526 71.037C53.6606 72.1566 53.408 73.7192 52.2884 74.5272C51.1688 75.3352 49.6062 75.0826 48.7982 73.963L40.0001 61.772L31.202 73.963C30.394 75.0826 28.8313 75.3352 27.7117 74.5272C26.5921 73.7192 26.3395 72.1566 27.1475 71.037L37.9728 56.037C38.4428 55.3858 39.197 55 40.0001 55Z" fill="#939496"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M59.3429 23.3107C60.2759 24.3285 60.2072 25.9099 59.1894 26.8429L44.1894 40.5929C43.3186 41.3911 42.0081 41.4709 41.0469 40.7843L33.8903 35.6725L26.627 41.8982C25.5787 42.7967 24.0005 42.6753 23.1019 41.627C22.2033 40.5787 22.3248 39.0004 23.3731 38.1019L32.1231 30.6019C32.9962 29.8535 34.2673 29.7972 35.2031 30.4657L42.3044 35.538L55.8107 23.1571C56.8285 22.2241 58.41 22.2929 59.3429 23.3107Z" fill="#ffffff"/>
                            </svg>
                        </div>
                        <h3>ESCOLA</h3>
                    </div>
                </div>
                <div class="light-box-body px-lg-5 pt-lg-4 pt-md-4 pt-sm-0 pb-md-5 pb-sm-4 pb-3">
                    <div class="row schools">
                        <div class="col-lg-6">
                            <a href="#">
                                <div class="school-card">
                                    <img src="{{ asset('img/schools') }}/power-bi.png" height="75px" ondragstart="return false;" />
                                    <h3>Power BI</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6">
                             <a href="#">
                                <div class="school-card">
                                    <img src="{{ asset('img/schools') }}/tableau.png" height="75px" ondragstart="return false;" />
                                    <h3>Tableau</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <a href="#">
                                <div class="school-card">
                                    <img src="{{ asset('img/schools') }}/python.png" height="75px" ondragstart="return false;" />
                                    <h3>Python</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <a href="#">
                                <div class="school-card">
                                    <img src="{{ asset('img/schools') }}/sql.png" height="75px" ondragstart="return false;" />
                                    <h3>SQL</h3>
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
