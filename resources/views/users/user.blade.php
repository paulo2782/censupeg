@extends('layouts.app')
@include('includes/header')
@include('users/add_modal_user')
@include('users/edit_modal_user')
@include('users/delete_modal_user')

<meta name="csrf-token" content="{{ csrf_token() }}">
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<form name="addUser" action="{{ route('register') }}" method="POST">
<body id="body-container">
	<div id="container-main">
		<div class="container">
			<div class="content">
				<div class="top-bar">
					<h1>Usuários</h1>
					<a data-toggle="modal" href="#myModalAdd"><img src="{{ asset('img/button-add.png') }}" alt="Botão adicionar" id="btnAdd"></a>
	                <span id="message">@foreach($errors->all() as $error) <p><b>{{ $error }}</b></p> @endforeach</span>
				</div>
				<div class="aux-bar">
					<h2>Usuários</h2>
				</div>
				<span id="alert"> {{ Session::get('alert') }} </span>
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
								@switch($dado->level)
									@case(0)
										@php $level = 'Operador' @endphp 
										@break
									@case(1)
										@php $level = 'Administrador' @endphp
										@break
								@endswitch 
							<tr>
								<td> {{ $dado->name }} </td>
								<td> {{ $dado->email }} </td>
								<td> {{ $level }} </td>
								<td>
									<a data-toggle="modal" href="#modalEdit" class="fa fa-pencil editUser" aria-hidden="true" title="Editar usuário"
									data-id    ="{{ $dado->id }}"
									data-level ="{{ $dado->level }}"
									data-name  ="{{ $dado->name }}"
									data-email ="{{ $dado->email }}">
									</a>

									<a href="#" class="fa fa-trash deleteUser" aria-hidden="true" 
									   title="Apagar usuário" 
									   data-id="{{ $dado->id }}"
									   data-name="{{ $dado->name }}">
									</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('/js/users.js?Date(d-m-Y,h:i:s)') }}"></script>

<script>
</script>
