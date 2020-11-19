@extends('layouts.app')
@include('includes/header')

<body id="body-container">
<div id="container-main">
	<div class="container">
		<div class="content-details">
			<div class="top-bar-block">
				<h3 class="py-4 text-center">{{ $dados[0]->name }}</h3>
			</div>
			<div class="show-details-block">
				<h2>Dados básicos
					<a href="#" class="fa fa-pencil" aria-hidden="true" id="btnAdd"></a>
				</h2>
				<form class="contact-info" method="post">
					<div class="form-row">
						<div class="form-group col-12">
							<label class="text-4" for="nameCourse">Curso</label>
							<input type="text" class="form-control" readonly="" id="nameCourse" name="course" value="{{ $dados[0]->course }}" />
						</div>
						<div class="form-group col-md-6 col-12">
							<label class="text-4" for="emailContact">Modalidade</label>
							<input type="email" class="form-control" readonly="" id="emailContact" name="email" value="{{ $dados[0]->course_type }}" />
						</div>
						<div class="form-group col-md-6 col-12">
							<label class="text-4" for="levelCourse">Nível</label>
							<input type="text" class="form-control" readonly="" id="levelCourse" name="level" value="{{ $dados[0]->level_course }}"/>    
						</div>
						<div class="form-group col-md-6 col-12">
							<label class="text-4" for="price">Valor</label>
							<input type="text" class="form-control" readonly="" id="price" name="price" 
							value="{{ $dados[0]->price }}"/>    
						</div>
						<div class="form-group col-md-6 col-12">
							<label class="text-4" for="time_duration">Tempo de duração</label>
							<input type="text" class="form-control" readonly="readonly" id="time_duration" name="time_duration" value="{{ $dados[0]->time_duration }}"/>    
						</div>
						<div class="form-group col-md-6 col-12">
							<label class="text-4" for="link">Link Censupeg</label>
							<input type="url" class="form-control" readonly="readonly" id="link" name="link" value="{{ $dados[0]->link }}"/>    
						</div>
						<div class="form-group col-12">
							<label class="text-4" for="observation">Informações adicionais</label>
							<textarea class="form-control" readonly="readonly" id="additional_information" name="additional_information"> {{ $dados[0]->additional_information }}</textarea>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
