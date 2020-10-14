@extends('layouts.app')
@include('includes/header')
<body>
<div class="card text-center">
	<div class="card-body">
		<h4 class="card-title">CONTATO</h4>
		<h6 class="card-subtitle mb-2 text-muted">{{ $dados[0]->name }}</h6>
	</div>
</div>

<div class="container-fluid">
    <div class="card-body">
		<div class="row">
			<div class="col-lg-12">
				<label>Nome:</label>
				<strong>{{ $dados[0]->name }}</strong>
			</div>
			<div class="col-lg-12">
				<label>e-mail:</label>
				<strong>{{ $dados[0]->email }}</strong>
			</div>
			<div class="col-lg-12">
				<label>Telefone:</label>
				<strong>{{ $dados[0]->phone }}</strong>
			</div>
			<div class="col-lg-12">
				<label>Escolaridade:</label>
				<strong>{{ $dados[0]->schooling }}</strong>
			</div>
			<div class="col-lg-12">
				<label>Estado:</label>
				<strong>{{ $dados[0]->state }}</strong>
			</div>
			<div class="col-lg-12">
				<label>Cidade:</label>
				<strong>{{ $dados[0]->city }}</strong>
			</div>
			<div class="col-lg-12">
				<label>Origem de Contato:</label>
				<strong>{{ $dados[0]->contact_origin }}</strong>
			</div>
			<div class="col-lg-12">
				<label>Informações Adicionais:</label>
				<strong>{{ $dados[0]->additional_information }}</strong>
			</div>
		</div>
	</div>
</div>

<div class="card text-center">
	<div class="card-body">
		<h4 class="card-title">CURSO
		<a href="#"><img src="{{ asset('img/button-add.png') }}" alt="Botão adicionar" id="btnAddCourse"></a>
		</h4>
	</div>
</div>

<div class="card text-center">
	<div class="card-body">
		<h4 class="card-title">LIGAÇÕES
		<a href="#"><img src="{{ asset('img/button-add.png') }}" alt="Botão adicionar" id="btnAddCall"></a>
		</h4>
	</div>
</div>
