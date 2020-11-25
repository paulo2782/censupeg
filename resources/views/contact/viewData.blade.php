@extends('layouts.app')
@include('includes/header')
@include('contact/modalEdit')

@include('contact/modal_contact_courses')
@include('contact/modal_contact_schedule')
@include('contact/modal_contact_edit_courses')
@include('contact/modal_contact_edit_schedule')

<body id="body-container">
<div id="container-main">
	<div class="container">
		<div class="content-details">
			<div class="top-bar-block">
				<h3 class="py-4 text-center">{{ $dados[0]->name }}</h3>
			</div>
			<div class="show-details-block">
				<h2>Dados básicos
					<a href="#" class="fa fa-pencil" aria-hidden="true" id="btnAdd"></a>
				</h2>
				<form class="contact-info" method="post">
					<div class="form-row">
						<div class="form-group col-12">
							<label class="text-4" for="nameContact">Nome Completo</label>
							<input type="text" class="form-control" readonly="readonly" id="nameContact" name="name" value="{{ $dados[0]->name }}" />
						</div>
						<div class="form-group col-md-6 col-12">
							<label class="text-4" for="emailContact">Email</label>
							<input type="email" class="form-control" readonly="readonly" id="emailContact" name="email" value="{{ $dados[0]->email }}" />
						</div>
						<div class="form-group col-md-6 col-12">
							<label class="text-4" for="phoneContact">Telefone</label>
							<input type="text" class="form-control" readonly="readonly" id="phoneContact" name="phone" value="{{ $dados[0]->phone }}"/>    
						</div>
						<div class="form-group col-md-6 col-12">
							<label class="text-4" for="stateContact">Estado</label>
							<input type="text" class="form-control" readonly="readonly" id="stateContact" name="state" value="{{ $dados[0]->state }}"/>    
						</div>
						<div class="form-group col-md-6 col-12">
							<label class="text-4" for="cityContact">Cidade</label>
							<input type="text" class="form-control" readonly="readonly" id="cityContact" name="city" value="{{ $dados[0]->city }}"/>    
						</div>
						<div class="form-group col-md-6 col-12">
							<label class="text-4" for="schoolContact">Escolaridade</label>
							<input type="text" class="form-control" readonly="readonly" id="schoolContact" name="school" value="{{ $dados[0]->schooling }}"/>    
						</div>
						<div class="form-group col-md-6 col-12">
							<label class="text-4" for="originContact">Origem do contato</label>
							<input type="text" class="form-control" readonly="readonly" id="originContact" name="origin" value="{{ $dados[0]->contact_origin }}"/>    
						</div>
						<div class="form-group col-12">
							<label class="text-4" for="observation">Informações adicionais</label>
							<textarea class="form-control" readonly="readonly" id="additional_information" name="additional_information"> {{ $dados[0]->additional_information }}</textarea>
						</div>
					</div>
				</form>
			</div>
			<div class="show-details-block">
				<h2>Cursos
					<a href="#" class="fa fa-plus-circle" aria-hidden="true" id="btnAddCourse"> </a>
				</h2>
				<div id="content-table" class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Curso</th>
								<th>Modalidade</th>
								<th>Nível</th>
								<th>Status</th>
								<th>Ação</th>
							</tr>
						</thead>
						<tbody>
							@php $i = 1; @endphp
							@foreach($dataInterests as $data)
							<tr>				
								<td> {{ $i }}</td>			
								<td> {{ $data->course }}</td>
								<td> {{ $data->course_type }}</td>
								<td> {{ $data->level_course }}</td>
 								<td> {{ $data->status }}</td>
								<td>
									<a href="#" class="fa fa-pencil btnEditCourse" aria-hidden="true" title="Editar Registro" id="{{ $data->id }}"></a>

									<a href="{{ route('destroyInterestCourse',$data->id) }}" class="fa fa-trash btnDelete" aria-hidden="true" title="Apagar Registro"></a>
								</td>
							</tr>
							@php $i++; @endphp
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<div class="show-details-block">
				<h2>Ligações
					<a href="#" class="fa fa-plus-circle" aria-hidden="true" id="btnAddSchedule"></a>
				</h2>
				<div id="content-table" class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Data</th>
								<th>Retorno</th>
								<th>Horário</th>
								<th>Status</th>
								<th>Operador</th>
							</tr>
						</thead>
						<tbody>
							@php $i = 1; @endphp
							@foreach($dataCalls as $data)
							<tr>
								<td>{{ $i }}</th>
								<td>{{ date('d/m/Y',strtotime($data->date_contact)) }}</td>
								<td>@if($data->date_return != null) 
									{{ date('d/m/Y',strtotime($data->date_return)) }}
									@endif 
								</td>
								<td>@if($data->schedule != null) 
										{{ date('H:i', strtotime($data->schedule)) }}
								 	@endif </td>
								<td>{{ $data->status }}</td>
								<td>{{ $data->user->name }}</td>
								<!--<td>
									<a href="#" class="btnEditCall fa fa-pencil" aria-hidden="true" id="{{ $data->id }}"></a>
									<a href="{{ route('destroyCall',$data->id) }}" class="fa fa-trash btnDelete" aria-hidden="true" title="Apagar Registro"></a>
								</td>-->
							@php $i++; @endphp
							@endforeach
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('/js/contact.js') }}"></script>

<script>
$('.btnEditCourse').click(function(event) {
    $('#myModalEditCourse').modal('toggle')
    $('#interest_id_edit').val(this.id)

    
    $.ajax({
    	url: "{{ route('searchInterest')}}",
    	method: 'GET',
    	dataType:'json',
    	data: {id: $('#interest_id_edit').val()},
    	success:function(data)
    	{
    		console.log(data)
    		if(data.level_course == 'Graduação'){
    			$('#Graduacao').trigger('click')
			    $('#modalityEdit').val(data.course_type)
			    $('#course_id_edit').val(data.course_id);
			    $('#statusEdit').val(data.status)
    		}
    		if(data.level_course == 'Pós-graduação'){
    			$('#PosGraduacao').trigger('click')
			    $('#modalityEdit').val(data.course_type)
				$('#course_id_edit').val(data.course_id);
				$('#statusEdit').val(data.status)
    		}
    	}
    });
    
});

$('.btnEditCall').click(function(event) {
    $('#myModalEditCall').modal('toggle')
    $('#call_id_edit').val(this.id)
    $.ajax({
	    url: "{{ route('searchCallEdit') }}",
	    method: 'GET',
	    dataType: 'json',
	    data: {
	            id:$('#call_id_edit').val()
	    },
	    success:function(data)
	    {
	    	
	    	$('#date_contact_edit').val(data.date_contact)
	    	$('#date_return_edit').val(data.date_return)
	    	$('#schedule_edit').val(data.schedule)
      		$('#statusSchedule option[value="'+data.status+'"]').prop('selected',true)
	        console.log(data)
	    }
	});

});
</script>