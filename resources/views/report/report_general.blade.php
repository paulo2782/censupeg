@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<body id="body-container">
  @include('includes/header')
<div id="container-main">
    <div class="container">
        <div class="content-details">
            <div class="top-bar-report">
                <h1>Relatórios</h1>
                <div class="period-bar">
                    <a href="#" class="previous round">&#8249;</a>
                        Novembro de 2020
                    <a href="#" class="next round">&#8250;</a>
                </div>
            </div>
            <div class="show-details-block">
                <div class="row">
                    <div class="col-md-3">Contatos</div>
                    <div class="col-md-3">Cursos</div>
                    <div class="col-md-3">Ligações</div>
                </div>
            </div>
            <div class="show-details-block">
                <h2>Contatos</h2>
                    <div class="row">
                        <div class="col-md-6">
                            Escolaridade
                        </div>
                        <div class="col-md-6">
                            Origem do contato
                        </div>
                    </div>
            </div>
            <div class="show-details-block">
                <h2>Cursos</h2>
                    <div class="row">
                        <div class="col-md-6">
                            Graduação
                        </div>
                        <div class="col-md-6">
                            Pós-graduação
                        </div>
                    </div>
            </div>
            <div class="show-details-block">
                <h2>Ligações</h2>
                    <div class="row">
                        <div class="col-md-6">
                            Status
                        </div>
                    </div>
            </div>            
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('/js/course.js') }}"></script>
</body>  
</html>
<script src="{{ asset('js/function.js') }}"></script> 