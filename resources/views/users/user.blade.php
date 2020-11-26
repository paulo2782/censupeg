@extends('layouts.app')
@include('includes/header')

<meta name="csrf-token" content="{{ csrf_token() }}">
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<body id="body-container">
	<div id="container-main">
		<div class="container">
			<div class="content">
				<div class="top-bar">
					<h1>Usuários</h1>
					<a href="#"><img src="{{ asset('img/button-add.png') }}" alt="Botão adicionar" id="btnAdd"></a>
	                <span id="message">@foreach($errors->all() as $error) <p><b>{{ $error }}</b></p> @endforeach</span>
				</div>
				<div id="content-table" class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Nome</th>
								<th>Usuário</th>
								<th>Permissão</th>
								<th>Ação</th>
							</tr>
					</thead>  
						<tbody id="tabela">
							@foreach($dados as $dado)
							<tr>
								<td> {{ $dado->name }} </td>
								<td> {{ $dado->email }} </td>
								<td> Operador </td>
								<td>
									<a href="#" class="fa fa-pencil" aria-hidden="true" title="Editar usuário"></a>
									<a href="#" class="fa fa-trash" aria-hidden="true" title="Apagar usuário"></a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>  
</html>
