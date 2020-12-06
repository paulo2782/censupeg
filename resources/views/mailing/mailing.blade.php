@extends('layouts.app')
 

<meta name="csrf-token" content="{{ csrf_token() }}">
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

<body id="body-container">
@include('includes/header') 
<form action="{{ route('csvMailing') }}">
<input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
<input type="hidden" name="level"   id="level"   value="{{ auth()->user()->level }}">

<div id="container-main">
    <div class="container">
        <div class="content-details">
            <div class="top-bar-block">
                <h1>Mailing</h1>
                <a href="#"><img src="{{ asset('img/button-add.png') }}" alt="Botão adicionar" id="btnAdd"></a>
                <span id="message">@foreach($errors->all() as $error) <p><b>{{ $error }}</b></p> @endforeach</span>
                <span class="export-file">
                    <div class="dropdown">
                        <a href="" class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Exportar
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="submit">Registros total</button>
                            <button class="dropdown-item" type="submit" name="month" value="mensal">Registros mensal</button>
                        </div>
                    </div>
                </span>
            </div>
            <div class="show-details-block">
                <div id="month">
                    <ul>
                        <li class="prev"><a href="#" id="btnPrev" style="display:none">&#10094;</a></li>
                        <li class="next"><a href="#" id="btnNext">&#10095;</a></li>
                        <li><span id="nameMonth"></span>
                            <input type="number" value="{{ date('Y') }}" id="year" style="border-style: none"> 
                        </div>
                        <span style="font-size:18px"> </span>
                        </li>
                    </ul>
                </div>
                <!--<div class="row">
                <div class="col-lg-6">
                    <input type="submit" class="form-control btn btn-success" value="Exportar todos os registros"> 
                </div>
                <div class="col-lg-6">
                    <input type="submit" class="form-control btn btn-warning" 
                    name="month"
                    value="Exportar todos os registros mensal"> 
                </div>
                </div>-->
                <input type="hidden" id="value_month" name="value_month">
                <input type="hidden" id="value_year"  name="value_year">

                <div id="details"></div>
        </div>
    </div>
</div>
         

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('/js/mailing.js?100') }}"></script>
<script src="{{ asset('/js/moment.min.js') }}"></script>

</body>  
</html>
<script> 

var user_id = $('#user_id').val()
var level   = $('#level').val()
var month        = 0
var auxMonth
var date_contact = []
var year         = $('#year').val()

$('#value_year').val(year);
$.get("{{ route('mailingAjax') }}", {user_id:user_id,level:level,month:2,year:year,btn:0}, function( data ) {
    console.log(data)
    $('#value_month').val(data.month)

    object = JSON.parse(data.dataJson)
    dataDayMonth = data.dataDayMonth

    $('#nameMonth').html(data.nameMonth+' de ')

    auxMonth = 1

    details(data.iCount,data.month, object, data.iCountDayMonth, dataDayMonth)
})

 
$('#year').change(function(event) {
    var year = $('#year').val()
    $('#value_year').val(year);

    $('#details').html('')

    $.get("{{ route('mailingAjax') }}", {user_id:user_id,level:level,month:auxMonth,year:year,btn:2}, function( data ) {
        $('#value_month').val(data.month)
    
        object = JSON.parse(data.dataJson);
        auxMonth = data.month

        $('#nameMonth').html(data.nameMonth+' de ')

        
        details(data.iCount,data.month, object, data.iCountDayMonth, dataDayMonth)
    });
});

$('#btnPrev').click(function(event) {
    var year = $('#year').val()
    $('#value_year').val(year);

    $('#details').html('')

    $.get("{{ route('mailingAjax') }}", {user_id:user_id,level:level,month:auxMonth,year:year,btn:0}, function( data ) {
        $('#value_month').val(data.month)
        object = JSON.parse(data.dataJson);
        auxMonth = data.month

        $('#nameMonth').html(data.nameMonth+' de ')

        if(data.month >= 1){
            $('#btnNext').show();
        }
        if(data.month == 1){
            $('#btnPrev').hide();
        }
        details(data.iCount,data.month, object, data.iCountDayMonth, dataDayMonth)
    });
});

$('#btnNext').click(function(event) {
    var year = $('#year').val()
    $('#value_year').val(year);

    $('#details').html('')

    $.get("{{ route('mailingAjax') }}", {user_id:user_id,level:level,month:auxMonth,year:year,btn:1}, function( data ) {
        $('#value_month').val(data.month)

        object = JSON.parse(data.dataJson);
        auxMonth = data.month

        $('#nameMonth').html(data.nameMonth+' de ')

        if(data.month >= 12){
            $('#btnNext').hide();
        }
        if(data.month > 1){
           $('#btnPrev').show();
        }
        details(data.iCount,data.month, object, data.iCountDayMonth, dataDayMonth)
    });
});


</script>