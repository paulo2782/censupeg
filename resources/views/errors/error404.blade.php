@extends('layouts.app')
@include('contact/modal')
<meta name="csrf-token" content="{{ csrf_token() }}">
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<body id="body-container">
  @include('includes/header')
<div id="container-main">
    <div class="container">
        <div class="content">
            <div class="top-bar">
                <h1>PÁGINA NÃO ENCONTRADA</h1>
            </div>
            <div id="content-table">
                <p class="error">Infelizmente não encontramos a página que você está procurando.
                    Clique em voltar para página inicial.
                </p>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('/js/contact.js') }}"></script>
</body>  
</html>
<script src="{{ asset('js/function.js') }}"></script> 
