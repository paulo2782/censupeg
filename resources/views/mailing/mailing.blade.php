@extends('layouts.app')
@include('mailing/add_modal_mailing')
@include('mailing/edit_modal_mailing')
@include('mailing/delete_modal_mailing')
<meta name="csrf-token" content="{{ csrf_token() }}">
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
<body id="body-container">
@include('includes/header')
<div id="container-main">
    <div class="container">
        <div class="content-details">
            <div class="top-bar-block">
                <h1>Mailing</h1>
                <a href="#"><img src="{{ asset('img/button-add.png') }}" alt="Botão adicionar" id="btnAdd"></a>
                <span id="message">@foreach($errors->all() as $error) <p><b>{{ $error }}</b></p> @endforeach</span>
            </div>
            <div class="show-details-block">
                <div id="month">
                    <ul>
                        <li class="prev"><a href="#">&#10094;</a></li>
                        <li class="next"><a href="#">&#10095;</a></li>
                        <li>Novembro de <span style="font-size:18px">2020</span></li>
                    </ul>
                </div>
            </div>
            <div class="show-details-block">
            <!--Accordion wrapper-->
            <div class="accordion md-accordion accordion-blocks" id="accordionEx78" role="tablist"
                aria-multiselectable="true">

                <!-- Accordion card -->
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header" role="tab" id="heading01">
                        <!-- Heading -->
                        <a data-toggle="collapse" data-parent="#accordionEx78" href="#collapse01" aria-expanded="true"
                            aria-controls="collapse01">
                            <h6>
                                <span>01/01</span>
                                <i class="fas fa-angle-down rotate-icon"></i>
                            </h6>
                        </a>
                        <span class="export-file">
                            <a href="#">Exportar</a>
                        </span>
                    </div>
                    <!-- Card body -->
                    <div id="collapse01" class="collapse" role="tabpanel" aria-labelledby="heading01"
                        data-parent="#accordionEx78">
                        <div class="card-body">
                        <!-- Table responsive wrapper -->
                        <div class="table-responsive mx-3">
                            <!--Table-->
                            <table class="table table-hover mb-0">
                                <!--Table head-->
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Contato data/hora</th>
                                        <th>Retorno data/hora</th>
                                        <th>Curso de interesse</th>
                                        <th>Status</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <!--Table head-->
                                <!--Table body-->
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td><a href="#">joao manuel</td>
                                        <td>01/01/2020 11:00</td>
                                        <td>02/01/2020 12:00</td>
                                        <td>História</td>
                                        <td>Tem interesse</td>
                                        <td>
                                            <a><i class="fas fa-pen-square mx-1"></i></a>
                                            <a><i class="fas fa-times mx-1"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td><a href="#">joao manuel</td>
                                        <td>01/01/2020 11:00</td>
                                        <td>02/01/2020 12:00</td>
                                        <td>História</td>
                                        <td>Tem interesse</td>
                                        <td>
                                            <a><i class="fas fa-pen-square mx-1"></i></a>
                                            <a><i class="fas fa-times mx-1"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td><a href="#">joao manuel</td>
                                        <td>01/01/2020 11:00</td>
                                        <td>02/01/2020 12:00</td>
                                        <td>História</td>
                                        <td>Tem interesse</td>
                                        <td>
                                            <a><i class="fas fa-pen-square mx-1"></i></a>
                                            <a><i class="fas fa-times mx-1"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                                <!--Table body-->
                            </table>
                            <!--Table-->
                        </div>
                        <!-- Table responsive wrapper -->
                        </div>
                    </div>
                </div>
                <!-- Accordion card -->

                <!-- Accordion card -->
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header" role="tab" id="heading02">
                        <!-- Heading -->
                        <a data-toggle="collapse" data-parent="#accordionEx78" href="#collapse02" aria-expanded="true"
                            aria-controls="collapse02">
                            <h6>
                                <span>02/01</span>
                                <i class="fas fa-angle-down rotate-icon"></i>
                            </h6>
                        </a>
                        <span class="export-file">
                            <a href="#">Exportar</a>
                        </span>
                    </div>
                    <!-- Card body -->
                    <div id="collapse02" class="collapse" role="tabpanel" aria-labelledby="heading02"
                        data-parent="#accordionEx78">
                        <div class="card-body">
                        <!-- Table responsive wrapper -->
                        <div class="table-responsive mx-3">
                            <!--Table-->
                            <table class="table table-hover mb-0">
                                <!--Table head-->
                                <thead>
                                    <tr>
                                    <th>#</th>
                                        <th>Nome</th>
                                        <th>Contato data/hora</th>
                                        <th>Retorno data/hora</th>
                                        <th>Curso de interesse</th>
                                        <th>Status</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <!--Table head-->
                                <!--Table body-->
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td><a href="#">joao manuel</td>
                                        <td>01/01/2020 11:00</td>
                                        <td>02/01/2020 12:00</td>
                                        <td>História</td>
                                        <td>Tem interesse</td>
                                        <td>
                                            <a><i class="fas fa-pen-square mx-1"></i></a>
                                            <a><i class="fas fa-times mx-1"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td><a href="#">joao manuel</td>
                                        <td>01/01/2020 11:00</td>
                                        <td>02/01/2020 12:00</td>
                                        <td>História</td>
                                        <td>Tem interesse</td>
                                        <td>
                                            <a><i class="fas fa-pen-square mx-1"></i></a>
                                            <a><i class="fas fa-times mx-1"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td><a href="#">joao manuel</td>
                                        <td>01/01/2020 11:00</td>
                                        <td>02/01/2020 12:00</td>
                                        <td>História</td>
                                        <td>Tem interesse</td>
                                        <td>
                                            <a><i class="fas fa-pen-square mx-1"></i></a>
                                            <a><i class="fas fa-times mx-1"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                                <!--Table body-->
                            </table>
                            <!--Table-->
                        </div>
                        <!-- Table responsive wrapper -->
                        </div>
                    </div>
                </div>
                <!-- Accordion card -->
            
                <!-- Accordion card -->
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header" role="tab" id="heading03">
                        <!-- Heading -->
                        <a data-toggle="collapse" data-parent="#accordionEx78" href="#collapse03" aria-expanded="true"
                            aria-controls="collapse03">
                            <h6>
                                <span>03/01</span>
                                <i class="fas fa-angle-down rotate-icon"></i>
                            </h6>
                        </a>
                        <span class="export-file">
                            <a href="#">Exportar</a>
                        </span>
                    </div>
            
                    <!-- Card body -->
                    <div id="collapse03" class="collapse" role="tabpanel" aria-labelledby="heading03"
                        data-parent="#accordionEx78">
                        <div class="card-body">
                            <!-- Table responsive wrapper -->
                            <div class="table-responsive mx-3">
                                <!--Table-->
                                <table class="table table-hover mb-0">
                                    <!--Table head-->
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nome</th>
                                            <th>Contato data/hora</th>
                                            <th>Retorno data/hora</th>
                                            <th>Curso de interesse</th>
                                            <th>Status</th>
                                            <th>Ação</th>
                                        </tr>
                                    </thead>
                                    <!--Table head-->
                                    <!--Table body-->
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><a href="#">joao manuel</td>
                                            <td>01/01/2020 11:00</td>
                                            <td>02/01/2020 12:00</td>
                                            <td>História</td>
                                            <td>Tem interesse</td>
                                            <td>
                                                <a><i class="fas fa-pen-square mx-1"></i></a>
                                                <a><i class="fas fa-times mx-1"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><a href="#">joao manuel</td>
                                            <td>01/01/2020 11:00</td>
                                            <td>02/01/2020 12:00</td>
                                            <td>História</td>
                                            <td>Tem interesse</td>
                                            <td>
                                                <a><i class="fas fa-pen-square mx-1"></i></a>
                                                <a><i class="fas fa-times mx-1"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><a href="#">joao manuel</td>
                                            <td>01/01/2020 11:00</td>
                                            <td>02/01/2020 12:00</td>
                                            <td>História</td>
                                            <td>Tem interesse</td>
                                            <td>
                                                <a><i class="fas fa-pen-square mx-1"></i></a>
                                                <a><i class="fas fa-times mx-1"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--Table body-->
                                </table>
                                <!--Table-->
                            </div>
                            <!-- Table responsive wrapper -->
                        </div>
                    </div>
                </div>
                <!-- Accordion card -->
        
            <!--/.Accordion wrapper-->
        
            </div>

            </div>
            <div class="content">
                <ul class="pagination"> </ul>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('/js/mailing.js') }}"></script>
</body>  
</html>