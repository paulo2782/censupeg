@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<body id="body-container">
  @include('includes/header')
  <div id="container-main">
    <div class="container">
        <div class="content-details">
            <div class="top-bar-report">
                <h1>Dashboard</h1>
                <div class="period-bar">
                    <a href="#" class="fa fa-angle-double-left"></a>
                        Novembro de 2020
                    <a href="#" class="fa fa-angle-double-right"></a>
                </div>
            </div>
            <div class="list-reports">
                <ul class="nav">
                    <li class="nav-item mr-4">
                        <a href="#">Contato</a>
                    </li>
                    <li class="nav-item mr-4">
                        <a href="#">Ligações</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">Curso</a>
                    </li>
                </ul>
            </div>
            <div class="contact-reports">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-12 contact-reports-charts">
                            <h3>Escolaridade</h3>
                            <div id="escolaridade"></div>
                        </div>
                        <div class="col-md-6 col-12 contact-reports-charts">
                            <h3>Origem dos contatos</h3>
                            <div id="origem-contato"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>  
</html>
