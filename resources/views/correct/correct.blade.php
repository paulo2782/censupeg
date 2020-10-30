@extends('layouts.app')
<table class="table table-responsive">
	<thead>
		<tr>
			<th>NOME</th>
			<th>E-MAIL</th>
			<th>FONE</th>
			<th>CURSO</th>
			<th>INFO ADD</th>
		</tr>
	</thead>
	<tbody>		
		{{ $dados->links() }}

		<h2> Total Restante: {{ $iCount }}</h2> 

		@foreach($dados as $dado)
		<tr>
			<td> {{ $dado->name }} </td>
			<td> {{ $dado->email }} </td>
			<td> {{ $dado->phone }} </td>
			<td> {{ $dado->course }} </td>
		 	<td> {{ $dado->additional_information }} </td>
		 	<td><a href="{{ route('correctRegister',$dado->id) }}"> {{ $dado->id }} </a></td>
		@endforeach
		</tr>

	</tbody>
</table>
