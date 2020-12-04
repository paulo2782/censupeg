@extends('layouts.app')
 

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
                        <li class="prev"><a href="#" id="btnPrev" style="display:none">&#10094;</a></li>
                        <li class="next"><a href="#" id="btnNext">&#10095;</a></li>
                        <li><span id="nameMonth"></span>
                            <input type="number" value="{{ date('Y') }}" id="year" style="border-style: none"> 
                        </div>
                        <span style="font-size:18px"> </span>
                        </li>
                    </ul>
                </div>
                <div id="details"></div>
        </div>
    </div>
</div>
         

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('/js/mailing.js?Date(d-m-Y,h:i:s)') }}"></script>

</body>  
</html>
<script> 

var month        = 1
var auxMonth
var date_contact = []
var year         = $('#year').val()

$.get("{{ route('mailingAjax') }}", {month:2,year:year,btn:0}, function( data ) {
    object = JSON.parse(data.dataJson)
    dataDayMonth = data.dataDayMonth

    $('#nameMonth').html(data.nameMonth+' de ')

    auxMonth = 1

    details(data.iCount,data.month, object, data.iCountDayMonth, dataDayMonth)
})

$('#year').click(function(event) {
    var year = $('#year').val()
    $('#details').html('')

    $.get("{{ route('mailingAjax') }}", {month:auxMonth,year:year,btn:2}, function( data ) {
        object = JSON.parse(data.dataJson);
        auxMonth = data.month

        $('#nameMonth').html(data.nameMonth+' de ')

        
        details(data.iCount,data.month, object, data.iCountDayMonth, dataDayMonth)
    });
});

$('#btnPrev').click(function(event) {
    var year = $('#year').val()
    $('#details').html('')

    $.get("{{ route('mailingAjax') }}", {month:auxMonth,year:year,btn:0}, function( data ) {
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
    $('#details').html('')

    $.get("{{ route('mailingAjax') }}", {month:auxMonth,year:year,btn:1}, function( data ) {
    
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