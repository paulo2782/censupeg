@extends('layouts.app')
@include('includes/header')
@include('contact/modal_contact_courses')
@include('contact/modal_contact_schedule')
<body id="body-container">
<div id="container-main">
	<div class="container">
		<div class="content-details">
			<div class="top-bar-block">
				<h3 class="py-4 text-center">{{ $dados[0]->name }}</h3>
			</div>
			<div class="show-details-block">
				<h2>Dados básicos
					<a href="#" class="fa fa-pencil" aria-hidden="true"></a>
				</h2>
				<form class="contact-info" method="post">
					<div class="form-row">
						<div class="form-group col-12">
							<label class="text-4" for="nameContact">Nome Completo</label>
							<input type="text" class="form-control" readonly="readonly" id="nameContact" name="name" value="{{ $dados[0]->name }}" />
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6 col-12">
							<label class="text-4" for="emailContact">Email</label>
							<input type="email" class="form-control" readonly="readonly" id="emailContact" name="email" value="{{ $dados[0]->email }}" />
						</div>
						<div class="form-group col-md-6 col-12">
							<label class="text-4" for="phoneContact">Telefone</label>
							<input type="text" class="form-control" readonly="readonly" id="phoneContact" name="phone" value="{{ $dados[0]->phone }}"/>    
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6 col-12">
							<label class="text-4" for="stateContact">Estado</label>
							<input type="text" class="form-control" readonly="readonly" id="stateContact" name="state" value="{{ $dados[0]->state }}"/>    
						</div>
						<div class="form-group col-md-6 col-12">
							<label class="text-4" for="cityContact">Cidade</label>
							<input type="text" class="form-control" readonly="readonly" id="cityContact" name="city" value="{{ $dados[0]->city }}"/>    
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6 col-12">
							<label class="text-4" for="schoolContact">Escolaridade</label>
							<input type="text" class="form-control" readonly="readonly" id="schoolContact" name="school" value="{{ $dados[0]->schooling }}"/>    
						</div>
						<div class="form-group col-md-6 col-12">
							<label class="text-4" for="originContact">Origem do contato</label>
							<input type="text" class="form-control" readonly="readonly" id="originContact" name="origin" value="{{ $dados[0]->contact_origin }}"/>    
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-12">
							<label class="text-4" for="observation">Informações adicionais</label>
							<textarea class="form-control" readonly="readonly" id="additional_information" name="additional_information"> {{ $dados[0]->additional_information }}</textarea>
						</div>
					</div>
				</form>
			</div>
			<div class="show-details-block">
				<h2>Cursos
					<i class="fa fa-plus-circle" aria-hidden="true" id="btnAddCourse"> </i>
				</h2>
				<div id="content-table">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Curso</th>
								<th scope="col">Modalidade</th>
								<th scope="col">Nível</th>
								<th scope="col">Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</th>
								<td>Matemática</td>
								<td>Semipresencial</td>
								<td>Graduação </td>
								<td>Concluído</td>
								<td><span><i class="fa fa-pencil" aria-hidden="true"></i></span><span><i class="fa fa-trash btnDelete" aria-hidden="true"></i></span></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="show-details-block">
				<h2>Ligações
					<i class="fa fa-plus-circle" aria-hidden="true" id="btnAddSchedule"> </i>
				</h2>
				<div id="content-table">
				<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Data</th>
								<th scope="col">Retorno</th>
								<th scope="col">Horário</th>
								<th scope="col">Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</th>
								<td>01-01-2020</td>
								<td>01-01-2020</td>
								<td>12:00 </td>
								<td>Aguardando retorno</td>
								<td><span><i class="fa fa-pencil" aria-hidden="true"></i></span><i class="fa fa-trash btnDelete" aria-hidden="true"></i></span></td>
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


