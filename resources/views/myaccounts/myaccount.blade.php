@extends('layouts.app')
@include('includes/header') 
@include('myaccounts/edit_modal_password')

<body id="body-container">
<div id="container-main">
	<div class="container">
		<div class="content-details">
			<div class="top-bar-block">
				<h1>Minha conta</h1>
			</div>
			<div class="show-details-block">
				<h2>Dados básicos</h2>
				<form id="contact-info" method="post">
					<div class="form-row">
						<div class="form-group col-12">
							<label class="text-4" for="nameContact">Nome Completo</label>
							<a href="#" class="fa fa-pencil" aria-hidden="true" id="#"></a>
							<input type="text" class="form-control" id="nameContact" name="name" value="#" />
						</div>
						<div class="form-group col-12">
							<label class="text-4" for="emailContact">Email</label>
							<a href="#" class="fa fa-pencil" aria-hidden="true" id="#"></a>
							<input type="email" class="form-control" id="emailContact" name="email" value="#" />
						</div>						
						<div class="form-group col-12">
							<label class="text-4" for="stateContact">Tipo de usuário</label>
							<input type="text" class="form-control" disabled id="stateContact" name="state" value="Operador"/>    
						</div>
						<div class="form-group col-12">
							<label class="text-4" for="passwd">Senha</label>
							<a href="#" class="fa fa-pencil" aria-hidden="true" id="#"></a>
							<input type="text" class="form-control" readonly="readonly" id="passwd" name="passwd" value="********"/>    
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
