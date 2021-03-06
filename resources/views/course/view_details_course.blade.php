@extends('layouts.app')
@include('includes/header')
@include('course/edit_modal_course')

<body id="body-container">
<div id="container-main">
	<div class="container">
		<div class="content-details">
			<div class="top-bar-block">
				<h3 class="py-4 text-center">{{ $dados[0]->course }}</h3>
			</div>
			<div class="show-details-block">
				<h2>Dados básicos
                    <a href="#" onclick="callEditModal(id=`{{ $dados[0]->id }}`)"  class="fa fa-pencil btnEdit" aria-hidden="true" title="{{ $dados[0]->course }}"></a>
				</h2>
				<form id="contact-info" method="post">
					<div class="form-row">
						<div class="form-group col-12">
							<label class="text-4" for="nameCourse">Curso</label>
							<input type="text" class="form-control" readonly="" id="nameCourse" name="course" value="{{ $dados[0]->course }}" />
						</div>
						<div class="form-group col-md-6 col-12">
							<label class="text-4" for="emailContact">Modalidade</label>
							<input type="email" class="form-control" readonly="" id="emailContact" name="email" value="{{ $dados[0]->course_type }}" />
						</div>
						<div class="form-group col-md-6 col-12">
							<label class="text-4" for="levelCourse">Nível</label>
							<input type="text" class="form-control" readonly="" id="levelCourse" name="level" value="{{ $dados[0]->level_course }}"/>    
						</div>
						<div class="form-group col-md-6 col-12">
							<label class="text-4" for="price">Valor</label>
							<input type="text" class="form-control" readonly="" id="price" name="price" 
							value="{{ $dados[0]->price }}"/>    
						</div>
						<div class="form-group col-md-6 col-12">
							<label class="text-4" for="time_duration">Tempo de duração</label>
							<input type="text" class="form-control" readonly="readonly" id="time_duration" name="time_duration" value="{{ $dados[0]->time_duration }}"/>    
						</div>
						<div class="form-group col-md-6 col-12">
							<label class="text-4" for="link">Link Censupeg</label>
							<input type="url" class="form-control" readonly="readonly" id="link" name="link" value="{{ $dados[0]->link }}"/>    
						</div>
						<div class="form-group col-12">
							<label class="text-4" for="additional_information">Informações adicionais</label>
							<textarea class="form-control" readonly="readonly" id="additional_information" name="additional_information"> {{ $dados[0]->additional_information }}</textarea>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

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