@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<body id="body-container">
@include('includes/header')
<div id="container-main">
    <div class="container">
        <div class="content-details">
            <div class="top-bar-block">
                <h1>Cursos</h1>
            </div>
            <div class="show-details-block">
                <h2>Graduação</h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#">Blablabla</a>
                        <div class="pull-right">
                            <a href="#" class="fa fa-pencil btnEdit" aria-hidden="true" ></a>
                            <a href="#" class="fa fa-trash btnDelete" aria-hidden="true" ></a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="show-details-block">
                <h2>Pós-graduação</h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#">Blablabla</a>
                        <div class="pull-right">
                            <a href="#" class="fa fa-pencil " aria-hidden="true"></a>
                            <a href="#" class="fa fa-trash btnDelete" aria-hidden="true"></a>
                        </div>
                </ul>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('/js/course.js') }}"></script>
</body>  
</html>
