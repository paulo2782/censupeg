@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<body id="body-container">
@include('includes/header')
	<div id="container-main">
		<div class="container">
			<div class="content-details">
				<div class="top-bar-block">
					<h1>Minha conta</h1>
				</div>
				<div class="show-details-block">
					<h2>Informações do usuário
						<a href="#" class="fa fa-pencil btnEdit" aria-hidden="true" title="#"></a>
					</h2>
					<form id="contact-info" method="post">
						<div class="form-group row">
							<label class="card-text col-2 col-form-label">Nome:</label>
							<div class="col-6">
								<input type="text" class="form-control" readonly="" id="levelCourse" name="level" value="Fulano da silva"/>
							</div>
						</div>
						<div class="form-group row">
							<label class="card-text col-2 col-form-label">Email:</label>
							<div class="col-6">
								<input type="email" class="form-control" readonly="" id="levelCourse" name="level" value="fulanodasilva@email.com"/>
							</div>
						</div>
						<div class="form-group row">
							<label class="card-text col-2 col-form-label">Senha:</label>
							<div class="col-6">
								<input type="password" class="form-control" readonly="" id="levelCourse" name="level" value="***********"/>
							</div>
						</div>
						<div class="form-group row">
							<label class="card-text col-2 col-form-label">Tipo de usuário:</label>
							<div class="col-6">
								<input type="text" class="form-control" readonly="" id="levelCourse" name="level" value="Operador"/>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>  
</html>