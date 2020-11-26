@extends('layouts.app')
@include('includes/header')

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

