@extends('layouts.app')
@include('includes/header')
@include('users/add_modal_user')
@include('users/edit_modal_user')
<meta name="csrf-token" content="{{ csrf_token() }}">
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
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
									<a data-toggle="modal" href="#myModalEdit" class="fa fa-pencil" aria-hidden="true" title="Editar usuário"></a>
									<a href="#" class="fa fa-trash" aria-hidden="true" 
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>  

<div id="modalDelete" class="modal fade" role="dialog">
  <div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">CENSUPEG</h4>
    </div>
    <div class="modal-body">
      Deseja mesmo apagar ? USUÁRIO: <span class="name"></span>
    </div>
    <div class="modal-footer">
      <a href="#" type="button" class="btn btn-default delete-yes">Sim</a>
      <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
    </div>
  </div>
   </div>
   </div>

</html>

<script>
	$('.fa-trash').click(function(event) {
		/* Act on the event */
		id = $(this).attr('data-id');
		name = $(this).attr('data-name');
		$('.name').html(name)
		$('#modalDelete').modal('show');
	});
</script>