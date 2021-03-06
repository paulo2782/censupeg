@extends('layouts.app')
@include('includes/header')
@include('contact/modalEdit')
 
@include('contact/modal_contact_courses')
@include('contact/modal_contact_schedule')
@include('contact/modal_contact_edit_courses')
@include('contact/modal_contact_edit_schedule')
@include('contact/modal_contact_view_schedule')

<body id="body-container">
<div id="container-main">
	<div class="container">
		<div class="content-details">
			<div class="top-bar-block">
				<h3 class="py-4 text-center">{{ $dados[0]->name }}</h3>
			</div>
			<div class="show-details-block">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Perfil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="courses-tab" data-toggle="tab" href="#courses" role="tab" aria-controls="courses" aria-selected="false">Cursos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="schedules-tab" data-toggle="tab" href="#schedules" role="tab" aria-controls="schedules" aria-selected="false">Ligações</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<h2>Dados básicos
							<a href="#" class="fa fa-pencil" title="Editar contato" aria-hidden="true" id="btnAdd"></a>
						</h2>
						<form id="contact-info" method="post">
							<div class="form-row">
								<div class="form-group col-12">
									<label class="text-4" for="nameContact">Nome completo</label>
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
									<label class="text-4" for="additional_information">Informações adicionais</label>
									<textarea class="form-control" readonly="readonly" id="additional_information" name="additional_information"> {{ $dados[0]->additional_information }}</textarea>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane fade" id="courses" role="tabpanel" aria-labelledby="courses-tab">
						<h2>Cursos
							<i class="fa fa-plus-circle" aria-hidden="true" id="btnAddCourse"> </i>
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
											<a href="#" class="fa fa-pencil btnEditCourse" aria-hidden="true" title="Editar curso" id="{{ $data->id }}"></a>
											@if(auth()->user()->level == 1)
											<a href="{{ route('destroyInterestCourse',$data->id) }}" class="fa fa-trash btnDelete" aria-hidden="true" title="Excluir curso"></a>
											@endif
										</td>
									</tr>
									@php $i++; @endphp
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
					<div class="tab-pane fade" id="schedules" role="tabpanel" aria-labelledby="schedules-tab">
						<h2>Ligações
							<i class="fa fa-plus-circle" aria-hidden="true" id="btnAddSchedule"></i>
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
										<th>Ação</th>
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
										<td>
											<a href="#" class="btnViewCall fa fa-eye" aria-hidden="true" title="Visualizar ligação" id="{{ $data->id }}"></a>
										</td>
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
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('/js/contact.js?date(d-m-y h:i:s)') }}"></script>

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

$('.btnViewCall').click(function(event) {
    $('#myModalViewCall').modal('toggle')
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
 	    	$('#course_view').val('')
 	    	$('#course_view').val(data.course_name.course)
	    	$('#date_contact_view').val(data.date_contact)
	    	$('#time_view').val(data.time)
	    	$('#date_return_view').val(data.date_return)
	    	$('#schedule_view').val(data.schedule)
      		$('#statusScheduleView option[value="'+data.status+'"]').prop('selected',true)
      		$('#additional_information_view').html(data.additional_information)
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
	    	console.log(data)
	    	$('#date_contact_edit').val(data.date_contact)
	    	$('#date_return_edit').val(data.date_return)
	    	$('#schedule_edit').val(data.schedule)
      		$('#statusSchedule option[value="'+data.status+'"]').prop('selected',true)
      		$('#additional_information_edit').html(data.additional_information)
	        console.log(data)
	    }
	});

});
</script>