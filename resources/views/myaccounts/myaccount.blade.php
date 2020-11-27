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
                <h3 class="py-4 text-center">FULANO</h3>
				<form class="contact-info" method="post">
					<div class="form-row">
						<div class="form-group col-12">
							<label class="text-4" for="nameCourse">Fulano</label>
							<input type="text" class="form-control" readonly="" id="nameCourse" name="course" value="#" />
						</div>
						<div class="form-group col-md-6 col-12">
							<label class="text-4" for="emailContact">Email</label>
							<input type="email" class="form-control" readonly="" id="emailContact" name="email" value="#" />
						</div>
						<div class="form-group col-md-6 col-12">
							<label class="text-4" for="levelCourse">Senha</label>
							<input type="text" class="form-control" readonly="" id="levelCourse" name="level" value="#"/>    
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
