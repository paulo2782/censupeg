@extends('layouts.app')
@include('includes/header')
<body>
<section class="container-main">
    <div class="content border border-primary">
      <div class="top-bar">
	  	<h4 class="mt-4 text-center">{{ $dados[0]->name }}</h4>
      </div>
      <div class="line-horizontal"></div>
      <div class="content-table">
		<div class="row">
			<div class="col-12">
				<h5>Dados Pessoais
					<i class="fa fa-pencil" aria-hidden="true"></i>
				</h5>
			</div>
			<div class="col-12">
				<label>Nome:</label>
				<strong>{{ $dados[0]->name }}</strong>
			</div>
			<div class="col-12">
				<label>E-mail:</label>
				<strong>{{ $dados[0]->email }}</strong>
			</div>
			<div class="col-12">
				<label>Telefone:</label>
				<strong>{{ $dados[0]->phone }}</strong>
			</div>
			<div class="col-12">
				<label>Escolaridade:</label>
				<strong>{{ $dados[0]->schooling }}</strong>
			</div>
			<div class="col-12">
				<label>Estado:</label>
				<strong>{{ $dados[0]->state }}</strong>
			</div>
			<div class="col-12">
				<label>Cidade:</label>
				<strong>{{ $dados[0]->city }}</strong>
			</div>
			<div class="col-12">
				<label>Origem de Contato:</label>
				<strong>{{ $dados[0]->contact_origin }}</strong>
			</div>
			<div class="col-12">
				<label>Informações Adicionais:</label>
				<strong>{{ $dados[0]->additional_information }}</strong>
			</div>
      	</div>
		<div class="line-horizontal"></div>
		<div class="row">
			<div class="col-12">
				<h5>Cursos
					<i class="fa fa-pencil" aria-hidden="true"></i>
				</h5>
			</div>
      	</div>
		  <div class="line-horizontal"></div>
		<div class="row">
			<div class="col-12">
				<h5>Ligações
					<i class="fa fa-pencil" aria-hidden="true"></i>
				</h5>
			</div>
      	</div>
    </div>
</section>
