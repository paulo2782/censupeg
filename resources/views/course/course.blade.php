@extends('layouts.app')
@include('course/viewDataModal')
@include('course/editDataModal')
<meta name="csrf-token" content="{{ csrf_token() }}">
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<body id="body-container">
@include('includes/header')
<div id="container-main">
    <div class="container">
        <div class="content-details">
            <div class="top-bar-block">
                <h1>Cursos</h1>
                <a href="#"><img src="{{ asset('img/button-add.png') }}" alt="Botão adicionar" id="btnAdd"></a>
                <span id="message">@foreach($errors->all() as $error) <p><b>{{ $error }}</b></p> @endforeach</span>
            </div>
            <div class="show-details-block">
                <h2>Graduação</h2>
                <ul class="list-group list-group-flush">
                    @foreach($data_level_graduacao as $data_level1)
                    <li class="list-group-item"><a href="#">{{ $data_level1->course }}</a>
                        <div class="pull-right">
                            <a href="#" onclick="callEditModal(id=`{{ $data_level1->id }}`)"  class="fa fa-pencil btnEdit" aria-hidden="true" title="{{ $data_level1->course }}"></a>
                            <a href="{{ route('destroyCourse',$data_level1->id) }}" class="fa fa-trash btnDelete" aria-hidden="true" title="{{ $data_level1->course }}"></a>
                        </div>
                        @endforeach
                    </li>
                </ul>
            </div>
            <div class="show-details-block">
                <h2>Pós-graduação</h2>
                <ul class="list-group list-group-flush">
                    @foreach($data_level_pos as $data_level2)
                    <li class="list-group-item">{{ $data_level2->course }}
                        <div class="pull-right">
                            <a href="#" onclick="callEditModal(id=`{{ $data_level2->id }}`)" class="fa fa-pencil " aria-hidden="true" title="{{ $data_level1->course }}"></a>
                            <a href="{{ route('destroyCourse',$data_level2->id) }}" class="fa fa-trash btnDelete" aria-hidden="true" title="{{ $data_level2->course }}"></a>
                        </div>
                    @endforeach
                </ul>
            </div>
            <div class="content">
                <ul class="pagination"> </ul>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('/js/course.js') }}"></script>
</body>  
</html>
<script src="{{ asset('js/function.js') }}"></script> 

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      swal(
          "Censupeg",msg, 'error');
    }

    function callEditModal(id){
        $('#EAD').prop('checked',false)
        $('#Presencial').prop('checked',false)
        $('#Semipresencial').prop('checked',false)
        $.ajax({
            url: "{{ route('searchCourse') }}",
            method: 'GET',
            dataType: 'json',
            data: {id:id},
            success:function(data){
                $('#myModalEdit').modal('toggle')
                $('#edtCourse').val(data.course)
                $('#edtAdditional_information').val(data.additional_information)
                $('#idCourse').val(data.id)
                $('#edtLink').val(data.link)
                $('#edtPrice').val(data.price)
                $('#edtTime_duration').val(data.time_duration)

                if(data.level_course == 'Graduação'){
                    $('#level_courseG').attr('checked', true);
                }else{
                    $('#level_courseP').attr('checked', true);
                }

                let split = data.course_type.split(',');
                
                let i = split.length;

                for(x = 0 ; x <= i-1 ; x++){
                    let cType = split[x];
                    $('#'+cType).prop('checked',true)
                }


            }
        });
    }
</script>