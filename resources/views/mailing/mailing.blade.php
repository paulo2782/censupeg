@extends('layouts.app')
 
<meta name="csrf-token" content="{{ csrf_token() }}">
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

<body id="body-container">
@include('includes/header') 
@include('mailing/add_modal_mailing') 
@include('mailing/edit_modal_mailing') 
@include('mailing/delete_modal_mailing') 

<form action="{{ route('csvMailing') }}">

<input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
<input type="hidden" name="level"   id="level"   value="{{ auth()->user()->level }}">

<div id="container-main">
    <div class="container">
        <div class="content-details">
            <div class="top-bar-block">
                <h1>Mailing</h1>
                <a data-toggle="modal" href="#myModalAdd"><img src="{{ asset('img/button-add.png') }}" alt="Botão adicionar" id="btnAdd"></a>
                <span id="message">@foreach($errors->all() as $error) <p><b>{{ $error }}</b></p> @endforeach</span>
                <span id="alert" style="color:red"> {{ Session::get('alert') }} </span>

                <span class="export-file text-4">
                    <div class="dropdown">
                        <a href="" class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Exportar
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item text-4" type="submit">Registros total</button>
                            <button class="dropdown-item text-4" type="submit" name="month" value="mensal">Registros mensal</button>
                        </div>
                    </div>
                </span>
            </div>
            <div class="show-details-block">

                <div id="month">
                    <a href="#" class="prev-month fa fa-chevron-left fa-2x mr-4"></a> 
                    <div class="month-year text-center"></div>
                    <a href="#" class="next-month fa fa-chevron-right fa-2x ml-4"></a>
                </div>              
                <input type="hidden" value="{{ date('Y') }}" id="year" style="border-style: none"> 
                <input type="hidden" id="value_month" name="value_month">
                <input type="hidden" id="value_year"  name="value_year">
                <div id="details"></div>
        </div>
    </div>
</div>
         

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{ asset('/js/mailing.js?105') }}"></script>
<script src="{{ asset('/js/moment.min.js') }}"></script>

</body>  
</html>
<script> 

var user_id = $('#user_id').val()
var level   = $('#level').val()
var month   = moment().format('M')

var auxMonth
var date_contact = []
var year         = $('#year').val()

$('#value_year').val(year);

$.get("{{ route('mailingAjax') }}", {user_id:user_id,level:level,month:month,year:year,btn:0}, function( data ) {
    var d = new Date()
    var auxMonth = d.getUTCMonth()+1;
    

    object = JSON.parse(data.dataJson)
    dataDayMonth = data.dataDayMonth
    details(data.iCount,data.month, object, data.iCountDayMonth, dataDayMonth)
})

$(document).on('click','.editMailing[data-id]',function(data) {
    $('#id_contact').val($(this).attr('data-id'))
    $('#myModalEdit').modal('show')
    $.ajax({
        url: "{{ route('searchCallEdit') }}",
        method: 'GET',
        data: {id: $(this).attr('data-id') },
        success:function(data){
            $('#call_id_edit').val(data.call_id)
            $('#name_edit').val(data.contact_name)
            $('#email_edit').val(data.email)
            $('#phone_edit').val(data.phone)
            for(i = 0 ; i <= data.course_name.length-1 ; i++)
            {
                $('#course_name_edit').append('<option value='+data.course_name[i].id+'>'+data.course_name[i].course+'</option>')
            }
            $('#contact_id_edit').val(data.contact_id)
            $('#course_name_edit').val(data.id_course)
            $('#date_contact_edit').val(data.date_contact)
            $('#timeEdit').val(data.time)
            $('#date_return_edit').val(data.date_return)
            $('#schedule_edit').val(data.schedule)
            $('#status_schedule_edit').val(data.status)
            $('#additional_information_edit').html(data.additional_information)
            $('#status_edit').val(data.status)
        }   
    }) 
})


$(document).ready(function(){
    var d = new Date()
    function myCalendar() {
        var month = d.getUTCMonth();
        var day = d.getUTCDate();
        var year = d.getUTCFullYear();

        // Displays the current month in Strings and the actual year 
        switch(month) {
            case 0: $('.month-year').append("<h4 data-month='1'> Janeiro de "+  year + "</h4>"); break;
            case 1: $('.month-year').append("<h4 data-month='2'> Fevereiro de "+ year + "</h4>"); break;
            case 2: $('.month-year').append("<h4 data-month='3'> Março de "+ year + "</h4>"); break;
            case 3: $('.month-year').append("<h4 data-month='4'> Abril de "+ year + "</h4>"); break;
            case 4: $('.month-year').append("<h4 data-month='5'> Maio de "+ year + "</h4>"); break;
            case 5: $('.month-year').append("<h4 data-month='6'> Junho de "+ year + "</h4>"); break;
            case 6: $('.month-year').append("<h4 data-month='7'> Julho de "+ year + "</h4>"); break;
            case 7: $('.month-year').append("<h4 data-month='8'> Agosto de "+ year + "</h4>"); break;
            case 8: $('.month-year').append("<h4 data-month='9'> Setembro de "+ year + "</h4>"); break;
            case 9: $('.month-year').append("<h4 data-month='10'> Outubro de "+ year + "</h4>"); break;
            case 10: $('.month-year').append("<h4 data-month='11'> Novembro de "+ year + "</h4>"); break;
            case 11: $('.month-year').append("<h4 data-month='12'> Dezembro de "+ year + "</h4>"); break;
        default:
        break;
        }
    };

    myCalendar();   

//Navigation Buttons
$('.prev-month').click(function(){
    $('#details').html('')
    
    auxMonth = $('h4').attr('data-month')
    year     = d.getUTCFullYear()

    auxMonth = parseInt(auxMonth)-1
    
    if(auxMonth == 0){
        auxMonth = 12
        year = year-1
    }
        console.log(auxMonth + ' ' + year)


    $.get("{{ route('mailingAjax') }}", {user_id:user_id,level:level,month:auxMonth,year:year,btn:0}, function( data ) {
        details(data.iCount,data.month, object, data.iCountDayMonth, dataDayMonth)
    });

    $('.month-year').empty();
    d.setUTCMonth(d.getUTCMonth() - 1);
    myCalendar();
});

$('.next-month').click(function(){
    $('#details').html('')

    auxMonth = $('h4').attr('data-month')
    year     = d.getUTCFullYear()

    auxMonth = parseInt(auxMonth)+1

    if(auxMonth == 13){
        auxMonth = 1
        year = year+1
    }

    console.log(auxMonth + ' ' + year)
    $.get("{{ route('mailingAjax') }}", {user_id:user_id,level:level,month:auxMonth,year:year,btn:1}, function( data ) {
        details(data.iCount,data.month, object, data.iCountDayMonth, dataDayMonth)
    });

    $('.month-year').empty();
    d.setUTCMonth(d.getUTCMonth() + 1);
    myCalendar();
});

});

</script>