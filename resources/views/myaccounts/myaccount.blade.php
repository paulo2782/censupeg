@extends('layouts.app')
@include('includes/header') 
@include('myaccounts/edit_modal_password')
@include('myaccounts/edit_modal_profile')
<body id="body-container">
<div id="container-main">
	<div class="container">
		<div class="content-details">
			<div class="top-bar-block">
				<h1>Minha conta</h1>
			</div>
			<span id="alert"> {{ Session::get('alert') }} </span>
            <span id="message">@foreach($errors->all() as $error) <p><b>{{ $error }}</b></p> @endforeach</span>

			<div class="show-details-block">
				<h2>Dados básicos</h2>
				<form id="contact-info" method="#">
					<div class="form-row">
						<input type="hidden" value="{{ $dados[0]->id }}" id="id">
						<div class="form-group col-12">
							<label class="text-4" for="nameContact">Nome Completo</label>
							<a data-toggle="modal" href="#myModalEdit" class="fa fa-pencil" aria-hidden="true"></a>
							<input type="text" class="form-control" id="nameContact" name="name" value="{{ $dados[0]->name }}" />
						</div>
						<div class="form-group col-12">
							<label class="text-4" for="emailContact">Email</label>
							<input type="email" class="form-control" id="emailContact" name="email" value="{{ $dados[0]->email }}" />
						</div>						
						<div class="form-group col-12">
							<label class="text-4" for="stateContact">Tipo de usuário</label>
							<input type="text" class="form-control" disabled id="stateContact" name="state" value="Operador"/>    
						</div>
						<div class="form-group col-12">
							<label class="text-4" for="passwd">Senha</label>
							<a data-toggle="modal" href="#myModalEdit" class="fa fa-pencil" aria-hidden="true" id="#"></a>
							<input type="text" class="form-control" readonly="readonly" id="passwd" name="passwd" value="********"/>    
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('/js/my_account.js') }}"></script>

