@extends('layouts.app')
@include('course/viewDataModal')
<meta name="csrf-token" content="{{ csrf_token() }}">
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<body id="body-container">
  @include('includes/header')
<div id="container-main">
    <div class="container">
        <div class="content-details">
            <div class="top-bar-block">
                <h1>Cursos</h1>
                <a href="#"><img src="{{ asset('img/button-add.png') }}" alt="Botão adicionar" id="btnAdd"></a>
                <span id="message">@foreach($errors->all() as $error) <p><b>{{ $error }}</b></p> @endforeach</span>
            </div>
            <div class="show-details-block">
                <h2>Graduação</h2>
                <ul class="list-group list-group-flush">
                @foreach($data_level_graduacao as $data_level1)
                <li class="list-group-item">{{ $data_level1->course }}
                    <div class="pull-right">
                        <a href="#" class="fa fa-pencil" aria-hidden="true"></a>
                        <a href="{{ route('destroyCourse',$data_level1->id) }}" class="fa fa-trash btnDelete" aria-hidden="true"></a>
                    </div>
                    @endforeach
                </li>
            </div>
            <div class="show-details-block">
                <h2>Pós-graduação</h2>
                <ul class="list-group list-group-flush">
                @foreach($data_level_pos as $data_level2)
                <li class="list-group-item">{{ $data_level2->course }}
                    <div class="pull-right">
                        <a href="#" class="fa fa-pencil" aria-hidden="true"></a>
                        <a href="{{ route('destroyCourse',$data_level2->id) }}" class="fa fa-trash btnDelete" aria-hidden="true"></a>
                    </div>
                @endforeach

                </ul>
            </div>
            <div class="content">
                <ul class="pagination"> </ul>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('/js/course.js') }}"></script>
</body>  
</html>
<script src="{{ asset('js/function.js') }}"></script> 

