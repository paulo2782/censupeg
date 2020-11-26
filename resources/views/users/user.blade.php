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
				</div>
				<div class="aux-bar">
					<h2>Usuários </h2>
				</div>
				<div id="content-table" class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Nome</th>
								<th>Usuário</th>
								<th>Permissão</th>
							</tr>
					</thead>  
						<tbody id="tabela">
							@foreach($dados as $dado)
							<tr>
								<td> {{ $dado->name }} </td>
								<td> {{ $dado->email }} </td>
								<td> </td>
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


<!--
	<div id="container-main">
    <div class="container">
        <div class="content">
            <div class="top-bar">
                <h1>Usuários</h1>
            </div>
            <div id="content-table" class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
 							<th>Nome</th>
 							<th>Usuário</th>
 							<th>Permissão</th>
 						</tr>
                   </thead>  
                    <tbody id="tabela">
                    	@foreach($dados as $dado)
 						<tr>
 							<td> {{ $dado->name }} </td>
 							<td> {{ $dado->email }} </td>
 							<td> </td>
 						</tr>
 						@endforeach
 					</tbody>
 				</table>
 			</div>
 		</div>
 	</div>
 </div>

-->