@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<body id="body-container">
  @include('includes/header')
  <div id="container-main">
    <div class="container">
        <div class="content-details">
            <div class="top-bar-report">
                <h1>Relatórios</h1>
                
                <div id="navigate-months">
                    <a href="#" class="prev-month fa fa-chevron-left fa-2x mr-3"></a> 
                    <div class="month-year text-center"></div>
                    <a href="#" class="next-month fa fa-chevron-right fa-2x ml-3"></a>
                </div>
                <!--<div class="period-bar">
                    <a href="#" class="fa fa-angle-double-left"></a>
                        Novembro de 2020
                    <a href="#" class="fa fa-angle-double-right"></a>
                </div>-->
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>  
</html>
<script src="{{ asset('js/navigate-months.js') }}"></script> 
<script src="{{ asset('js/reports/charts.js') }}"></script> 
<script src="{{ asset('js/function.js') }}"></script> 