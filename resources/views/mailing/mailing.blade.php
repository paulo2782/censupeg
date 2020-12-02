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
                        @if($iMonth >= 2)
                        <li class="prev"><a href="{{ route('mailingShow',intval($iMonth)-1) }}">&#10094;</a></li>
                        @endif

                        @if($iMonth <= 11)
                        <li class="next"><a href="{{ route('mailingShow',intval($iMonth)+1) }}">&#10095;</a></li>
                        @endif
                        <li>{{ $strMonth }} de <span style="font-size:18px">{{ date('Y') }} </span></li>
                    </ul>
                </div>
            </div>
            @for($i = 1 ; $i <= $iDay ; $i++)
            <div class="show-details-block">
                <div class = "container">
                    <div class = "panel-group">
                        <div class = "panel panel-default">
                            <div class = "panel-heading">
                                <div class = "panel-title">
                                    <a data-toggle = "collapse" href = "#test1">
                                        @if($i < 10) 0{{ $i }} / @else {{ $i }} / @endif
                                        @if($iMonth < 10) 0{{ $iMonth }} @else {{ $iMonth }} @endif


                                        <i class="fas fa-angle-down rotate-icon"></i>
                                    </a>
                                    <span class="export-file text-4">
                                        <a href="#">Exportar</a>
                                    </span>
                                </div>
                            </div>
                            <div id = "test1" class="panel-collapse collapse">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
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
                                        <tbody>
                                            <tr>
                                                <td>1</th>
                                                <td><a href="#">joao manuel</td>
                                                <td>01/01/2020 11:00</td>
                                                <td>02/01/2020 12:00</td>
                                                <td>História</td>
                                                <td>Tem interesse</td>
                                                <td>
                                                    <a href="#"><i class="fas fa-pen-square"></i></a>
                                                    <a href="#"><i class="fas fa-times"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('/js/mailing.js') }}"></script>
</body>  
</html>