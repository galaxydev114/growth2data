@extends('admin.layouts.app', ['pageTitle' => 'Paienl G2D', 'page' => 'admin_dashboard'])

@section('content')
<div id="dashboard" class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- Start page title -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title-box">
                        <h4>Dashboard</h4>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">G2D</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /. -->
            <div class="row">
                <div class="col-xl-4 col-sm-6">
                    <div class="card mini-stat bg-primary">
                        <div class="card-body mini-stat-img">
                            <div class="mini-stat-icon">
                                <i class="fas fa-user-tie float-end"></i>
                            </div>
                            <div class="text-white">
                                <h6 class="text-uppercase mb-3 font-size-16 text-white"># MEMBROS CLUBE DE CONTEÚDO</h6>
                                <h2 class="mb-4 text-white">78</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <div class="card mini-stat bg-primary">
                        <div class="card-body mini-stat-img">
                            <div class="mini-stat-icon">
                                <i class="fas fa-user-graduate float-end"></i>
                            </div>
                            <div class="text-white">
                                <h6 class="text-uppercase mb-3 font-size-16 text-white"># Alunos Escola</h6>
                                <h2 class="mb-4 text-white">38</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <div class="card mini-stat bg-primary">
                        <div class="card-body mini-stat-img">
                            <div class="mini-stat-icon">
                                <i class="fas fa-user float-end"></i>
                            </div>
                            <div class="text-white">
                                <h6 class="text-uppercase mb-3 font-size-16 text-white"># Cadastros Newsletter</h6>
                                <h2 class="mb-4 text-white">178</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Chart -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">TRÁFEGO</h4>
                            <div class="row text-center mt-4">
                                <div class="row">
                                    <ul class="nav nav-pills trafic-period justify-content-end" role="tablist">
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#dailyTraffic" role="tab">
                                                <span>DIAS</span>
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link" data-bs-toggle="tab" href="#weeklyTraffic" role="tab">
                                                <span>SEMANAS</span>
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link" data-bs-toggle="tab" href="#monthlyTraffic" role="tab">
                                                <span>MESES</span>
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light">
                                            <a class="nav-link" data-bs-toggle="tab" href="#yearlyTraffic" role="tab">
                                                <span>ANOS</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active p-3" id="dailyTraffic" role="tabpanel">
                                    <canvas id="dailyVisitsLineChart" height="300"></canvas>
                                    <div class="row text-center justify-content-center mt-4">
                                        <ul class="nav nav-pills trafic-type nav-justified p-0" role="tablist">
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link active" data-bs-toggle="tab" href="" role="tab">
                                                    <span>VISITAS</span>
                                                </a>
                                            </li>
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link" data-bs-toggle="tab" href="" role="tab">
                                                    <span>LOGINS</span>
                                                </a>
                                            </li>
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link" data-bs-toggle="tab" href="" role="tab">
                                                    <span>VIDEO VIEWS</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane p-3" id="weeklyTraffic" role="tabpanel">
                                    <canvas id="weeklyVisitsLineChart" height="300"></canvas>
                                </div>
                                <div class="tab-pane p-3" id="monthlyTraffic" role="tabpanel">
                                    <canvas id="monthlyVisitsLineChart" height="300"></canvas>
                                </div>
                                <div class="tab-pane p-3" id="yearlyTraffic" role="tabpanel">
                                    <canvas id="yearlyVisitsLineChart" height="300"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /. Chart -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-3 mb-3">
                                    <div class="info-card">
                                        <div class="info-card-header">
                                            <h5 class="fw-bolder">Origem tráfego</h5>
                                        </div>
                                        <div class="info-card-body p-2">
                                            <div class="d-table w-100 fw-bolder">
                                                <span class="float-start">LinkedIn</span>
                                                <span class="float-end">73%</span>
                                            </div>
                                            <div class="d-table w-100">
                                                <span class="float-start">Instagram</span>
                                                <span class="float-end">4%</span>
                                            </div>
                                            <div class="d-table w-100">
                                                <span class="float-start">Site</span>
                                                <span class="float-end">7%</span>
                                            </div>
                                            <div class="d-table w-100">
                                                <span class="float-start">Google</span>
                                                <span class="float-end">12%</span>
                                            </div>
                                            <div class="d-table w-100">
                                                <span class="float-start">Mail MKT</span>
                                                <span class="float-end">4%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <div class="info-card">
                                        <div class="info-card-header">
                                            <h5 class="fw-bolder">Tempo médio permanência</h5>
                                        </div>
                                        <div class="info-card-body p-2 d-flex justify-content-center align-items-center">
                                            <h2 class="fw-bolder">0:07</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <div class="info-card">
                                        <div class="info-card-header">
                                            <h5 class="fw-bolder">TOP 5 Vídeos (E-learning)</h5>
                                        </div>
                                        <div class="info-card-body p-2">
                                            <div class="d-table w-100 fw-bolder">
                                                <span class="float-start">Fundamentos Tableau</span>
                                                <span class="float-end">73%</span>
                                            </div>
                                            <div class="d-table w-100">
                                                <span class="float-start">SQL Básico</span>
                                                <span class="float-end">4%</span>
                                            </div>
                                            <div class="d-table w-100">
                                                <span class="float-start">Pivotagem no PBI</span>
                                                <span class="float-end">7%</span>
                                            </div>
                                            <div class="d-table w-100">
                                                <span class="float-start">Storytelling de Dados</span>
                                                <span class="float-end">12%</span>
                                            </div>
                                            <div class="d-table w-100">
                                                <span class="float-start">Phyton Básico</span>
                                                <span class="float-end">4%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <div class="info-card">
                                        <div class="info-card-header">
                                            <h5 class="fw-bolder">Cliques Newsletter</h5>
                                        </div>
                                        <div class="info-card-body p-2 d-flex justify-content-center align-items-center">
                                            <h2 class="fw-bolder">0,32%</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <div class="info-card">
                                        <div class="info-card-header">
                                            <h5 class="fw-bolder">Termos de Busca</h5>
                                        </div>
                                        <div class="info-card-body p-2">
                                            <div class="d-table w-100 fw-bolder">
                                                <span class="float-start">Banco de Dados</span>
                                                <span class="float-end">73%</span>
                                            </div>
                                            <div class="d-table w-100">
                                                <span class="float-start">Dashboard</span>
                                                <span class="float-end">4%</span>
                                            </div>
                                            <div class="d-table w-100">
                                                <span class="float-start">Desenvolvimento painel</span>
                                                <span class="float-end">7%</span>
                                            </div>
                                            <div class="d-table w-100">
                                                <span class="float-start">Tableau</span>
                                                <span class="float-end">12%</span>
                                            </div>
                                            <div class="d-table w-100">
                                                <span class="float-start">Power BI</span>
                                                <span class="float-end">3%</span>
                                            </div>
                                            <div class="d-table w-100">
                                                <span class="float-start">Consultoria Big Data</span>
                                                <span class="float-end">1%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <div class="info-card">
                                        <div class="info-card-header">
                                            <h5 class="fw-bolder">Acesso Menu</h5>
                                        </div>
                                        <div class="info-card-body p-2">
                                            <div class="d-table w-100 fw-bolder">
                                                <span class="float-start">E-Learning</span>
                                                <span class="float-end">73%</span>
                                            </div>
                                            <div class="d-table w-100">
                                                <span class="float-start">Consultoria</span>
                                                <span class="float-end">4%</span>
                                            </div>
                                            <div class="d-table w-100">
                                                <span class="float-start">Blog</span>
                                                <span class="float-end">7%</span>
                                            </div>
                                            <div class="d-table w-100">
                                                <span class="float-start">Escola</span>
                                                <span class="float-end">12%</span>
                                            </div>
                                            <div class="d-table w-100">
                                                <span class="float-start">Sobre</span>
                                                <span class="float-end">3%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <div class="info-card">
                                        <div class="info-card-header">
                                            <h5 class="fw-bolder">Download de arquivos</h5>
                                        </div>
                                        <div class="info-card-body p-2">
                                            <div class="d-table w-100 fw-bolder">
                                                <span class="float-start">Base de dados 1</span>
                                                <span class="float-end">73%</span>
                                            </div>
                                            <div class="d-table w-100">
                                                <span class="float-start">Base de dados 2</span>
                                                <span class="float-end">4%</span>
                                            </div>
                                            <div class="d-table w-100">
                                                <span class="float-start">Template Tableau</span>
                                                <span class="float-end">7%</span>
                                            </div>
                                            <div class="d-table w-100">
                                                <span class="float-start">Template PBI</span>
                                                <span class="float-end">16%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-3">
                                    <div class="info-card">
                                        <div class="info-card-header">
                                            <h5 class="fw-bolder">Localização acesso</h5>
                                        </div>
                                        <div class="info-card-body p-2">
                                            <div class="d-table w-100 fw-bolder">
                                                <span class="float-start">São Paulo, BR</span>
                                                <span class="float-end">73%</span>
                                            </div>
                                            <div class="d-table w-100">
                                                <span class="float-start">Rio de Janeiro, BR</span>
                                                <span class="float-end">4%</span>
                                            </div>
                                            <div class="d-table w-100">
                                                <span class="float-start">Florida, US</span>
                                                <span class="float-end">7%</span>
                                            </div>
                                            <div class="d-table w-100">
                                                <span class="float-start">Londres, UK</span>
                                                <span class="float-end">16%</span>
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
    </div>
</div>
@endsection

@push('scripts')
<!--Morris Chart-->
<script src="{{ asset('admin-assets/libs') }}/chart.js/Chart.bundle.min.js"></script>

<script>
!function(d){
	"use strict";
    
    var pinkColor = '#E786D7',
        primaryLineColor = '#7F7FD5',
        tooltipTitleFontColor = '#343a40';

	function r(){}
	r.prototype.respChart=function(r,o,e,a){
		Chart.defaults.global.defaultFontColor="#adb5bd",
		Chart.defaults.scale.gridLines.color="rgba(108, 120, 151, 0.1)";

		var t=r.get(0).getContext("2d"),
			n=d(r).parent();
		function i(){
			r.attr("width",d(n).width());
			switch(o){
				case"Line":
					new Chart(t,{type:"line",data:e,options:a});
					break;
				case"Doughnut":
					new Chart(t,{type:"doughnut",data:e,options:a});
					break;
				case"Pie":
					new Chart(t,{type:"pie",data:e,options:a});
					break;
				case"Bar":
					new Chart(t,{type:"bar",data:e,options:a});
					break;
				case"Radar":
					new Chart(t,{type:"radar",data:e,options:a});
					break;
				case"PolarArea":
					new Chart(t,{data:e,type:"polarArea",options:a})
		    }
	    }d(window).resize(i),i()},
        r.prototype.init=function(){
            this.respChart(
                d("#dailyVisitsLineChart"),
                "Line",
                {
                    labels:["31/01","01/02","02/02","03/02","04/02","05/02","06/02"],
                    datasets:[
                        {
                            label:"Visits",
                            lineTension:.5,
                            borderWidth: 2,
                            backgroundColor:"transparent",
                            borderColor:primaryLineColor,
                            pointStyle: 'circle',
                            borderDash:[],
                            borderDashOffset:0,
                            borderJoinStyle:"miter",
                            pointBorderColor:pinkColor,
                            pointBackgroundColor:pinkColor,
                            pointBorderWidth:5,
                            pointHoverRadius:7,
                            pointHoverBackgroundColor:pinkColor,
                            pointHoverBorderColor:"#fff",
                            pointHoverBorderWidth:2,
                            pointRadius:1,
                            pointHitRadius:10,
                            data:[1,0,3,2,1,2,3]
                        }
                    ]
                },
                {
                    responsive: true,
                    scales: {
                        yAxes: [
                            {
                                display: true,
                                scaleLabel: {
                                    display: true
                                },
                            }
                        ]
                    },
                    legend: {
                        display: false
                    },
                    tooltips: {
                        // Updated default tooltip UI
                        shadowOffsetX: 1,
                        shadowOffsetY: 1,
                        shadowBlur: 8,
                        // shadowColor: tooltipShadow,
                        backgroundColor: 'rgba(248,249,250,.8)',
                        titleFontColor: tooltipTitleFontColor,
                        bodyFontColor: pinkColor,
                        borderWidth: 2,
                        borderColor: '#e9ecef',
                        titleAlign: 'center',
                        bodyAlign: 'center',
                        xPadding: 15,
                        yPadding: 18,
                        bodyFontSize : 13,
                        titleFontSize : 13,
                        displayColors: false
                    },
                }
            );
        },d.ChartJs=new r,d.ChartJs.Constructor=r
    }(window.jQuery),function(){"use strict";window.jQuery.ChartJs.init()}();
</script>
@endpush