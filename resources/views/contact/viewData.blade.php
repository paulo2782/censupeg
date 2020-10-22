@extends('layouts.app')
@include('includes/header')
<body class="body-container">
<section class="container-main">
    <div class="content-details">
      	<div class="top-bar">
	  		<h4 class="py-4 text-center">{{ $dados[0]->name }}</h4>
      	</div>
		<div class="title-category">
			<h2>Dados básicos
				<a href="#" class="fa fa-pencil" aria-hidden="true"></a>
			</h2>
			<form class="form-dialog" method="post">
				<div class="form-row">
					<div class="form-group col-12">
						<label class="h6" for="nameContact">Nome Completo</label>
						<input type="text" class="form-control-plaintext" id="nameContact" name="name" value="{{ $dados[0]->name }}" />
					</div>
					<div class="form-group col-md-6 col-12">
						<label class="h6" for="emailContact">Email</label>
						<input type="email" class="form-control-plaintext" id="emailContact" name="email" value="{{ $dados[0]->email }}" />
					</div>
					<div class="form-group col-md-6 col-12">
						<label class="h6" for="phoneContact">Telefone</label>
						<input type="text" class="form-control-plaintext" id="phoneContact" name="phone" value="{{ $dados[0]->phone }}"/>    
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6 col-12">
						<label class="h6" for="stateContact">Estado</label>
						<input type="text" class="form-control-plaintext" id="stateContact" name="state" value="{{ $dados[0]->state }}"/>    
					</div>
					<div class="form-group col-md-6 col-12">
						<label class="h6" for="cityContact">Cidade</label>
						<input type="text" class="form-control-plaintext" id="cityContact" name="city" value="{{ $dados[0]->city }}"/>    
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-12">
						<label class="h6" for="schoolContact">Escolaridade</label>
						<input type="text" class="form-control-plaintext" id="schoolContact" name="school" value="{{ $dados[0]->schooling }}"/>    
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-12">
						<label class="h6" for="originContact">Origem do contato</label>
						<input type="text" class="form-control-plaintext" id="originContact" name="origin" value="{{ $dados[0]->contact_origin }}"/>    
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-12">
						<label class="h6" for="observation">Informações adicionais</label>
						<textarea class="form-control-plaintext" id="additional_information" name="additional_information"> {{ $dados[0]->additional_information }}</textarea>
					</div>
				</div>                
			</form>
		</div>
		<div class="title-category">
			<h2>Cursos
				<i class="fa fa-pencil" aria-hidden="true"></i>
			</h2>
			<div class="content-table">
				<table class="table-content">
					<thead>
						<tr>
							<th>Curso</th>
							<th>Modalidade</th>
							<th>Nível</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody id="tabela">
					@foreach($dados as $dado)
						<tr>
							<td>Matemática</td>
							<td>Semipresencial</td>
							<td>Graduação </td>
							<td>Concluído</td>
						</tr>
					@endforeach		
					</tbody>
				</table>
			</div>
		</div>
		<div class="title-category">
			<h2>Ligações
				<a href="#" class="fa fa-pencil" aria-hidden="true"></a>
			</h2>
			<div class="content-table">
				<table class="table-content">
					<thead>
						<tr>
							<th>Data</th>
							<th>Retorno</th>
							<th>Horário</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody id="tabela">
						<tr>
							<!-- <td>01-01-2020 </td> -->
							<!-- <td>01-09-2020 </td> -->
							<!-- <td>11:00 </td> -->
							<!-- <td>Aguardando retorno</td> -->
						</tr>
					</tbody>
				</table>
			</div>
      	</div>
	</div>
</section>