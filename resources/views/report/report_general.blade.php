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
        </div>
    </div>
</div>
<script src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('/js/course.js') }}"></script>
</body>  
</html>
<script src="{{ asset('js/charts.js') }}"></script> 
<script src="{{ asset('js/function.js') }}"></script> 