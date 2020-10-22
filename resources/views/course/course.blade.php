@extends('layouts.app')
@include('course/viewDatamodal')
<meta name="csrf-token" content="{{ csrf_token() }}">
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<body class="body-container">
  @include('includes/header')
  <section class="container-main">
    <div class="content-details">
      <div class="top-bar">
        <h1>Cursos</h1>
        <a href="#"><img src="{{ asset('img/button-add.png') }}" alt="Botão adicionar" id="btnAdd"></a>
      </div>
      <div class="title-category">
        <h2>Graduação</h2>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Administração
            <div class="pull-right">
                <a href="#" class="fa fa-pencil" aria-hidden="true"></a>
                <a href="#" class="fa fa-trash" aria-hidden="true"></a>
            </div>
          </li>
          <li class="list-group-item">Análise e Desenvolvimento de Sistemas
            <div class="pull-right">
                <a href="#" class="fa fa-pencil" aria-hidden="true"></a>
                <a href="#" class="fa fa-trash" aria-hidden="true"></a>
            </div>
          </li>
          <li class="list-group-item">Ciências Contábeis
            <div class="pull-right">
                <a href="#" class="fa fa-pencil" aria-hidden="true"></a>
                <a href="#" class="fa fa-trash" aria-hidden="true"></a>
            </div>
          </li>
          <li class="list-group-item">Educação Especial
            <div class="pull-right">
                <a href="#" class="fa fa-pencil" aria-hidden="true"></a>
                <a href="#" class="fa fa-trash" aria-hidden="true"></a>
            </div>
          </li>
          <li class="list-group-item">Gestão Ambiental
            <div class="pull-right">
                <a href="#" class="fa fa-pencil" aria-hidden="true"></a>
                <a href="#" class="fa fa-trash" aria-hidden="true"></a>
            </div>
          </li>
          <li class="list-group-item">Gestão Financeira
            <div class="pull-right">
                <a href="#" class="fa fa-pencil" aria-hidden="true"></a>
                <a href="#" class="fa fa-trash" aria-hidden="true"></a>
            </div>
          </li>
          <li class="list-group-item">História
            <div class="pull-right">
                <a href="#" class="fa fa-pencil" aria-hidden="true"></a>
                <a href="#" class="fa fa-trash" aria-hidden="true"></a>
            </div>
          </li>
          <li class="list-group-item">Letras- Língua Portuguesa
            <div class="pull-right">
                <a href="#" class="fa fa-pencil" aria-hidden="true"></a>
                <a href="#" class="fa fa-trash" aria-hidden="true"></a>
            </div>
          </li>
          <li class="list-group-item">Logística
            <div class="pull-right">
                <a href="#" class="fa fa-pencil" aria-hidden="true"></a>
                <a href="#" class="fa fa-trash" aria-hidden="true"></a>
            </div>
          </li>
          <li class="list-group-item">Matemática
            <div class="pull-right">
                <a href="#" class="fa fa-pencil" aria-hidden="true"></a>
                <a href="#" class="fa fa-trash" aria-hidden="true"></a>
            </div>
          </li>
          <li class="list-group-item">Pedagogia
            <div class="pull-right">
                <a href="#" class="fa fa-pencil" aria-hidden="true"></a>
                <a href="#" class="fa fa-trash" aria-hidden="true"></a>
            </div>
          </li>
          <li class="list-group-item">Processos Gerenciais
            <div class="pull-right">
                <a href="#" class="fa fa-pencil" aria-hidden="true"></a>
                <a href="#" class="fa fa-trash" aria-hidden="true"></a>
            </div>
          </li>
          <li class="list-group-item">Recursos Humanos
            <div class="pull-right">
                <a href="#" class="fa fa-pencil" aria-hidden="true"></a>
                <a href="#" class="fa fa-trash" aria-hidden="true"></a>
            </div>
          </li>
        </ul>
      </div>
      <div class="title-category">
        <h2>Pós-graduação</h2>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">ABA
            <div class="pull-right">
                <a href="#" class="fa fa-pencil" aria-hidden="true"></a>
                <a href="#" class="fa fa-trash" aria-hidden="true"></a>
            </div>
          </li>
          <li class="list-group-item">Arteterapia
            <div class="pull-right">
                <a href="#" class="fa fa-pencil" aria-hidden="true"></a>
                <a href="#" class="fa fa-trash" aria-hidden="true"></a>
            </div>
          </li>
          <li class="list-group-item">Duo Neuropsicopedagogia
            <div class="pull-right">
                <a href="#" class="fa fa-pencil" aria-hidden="true"></a>
                <a href="#" class="fa fa-trash" aria-hidden="true"></a>
            </div>
          </li>
          <li class="list-group-item">Musicoterapia
            <div class="pull-right">
                <a href="#" class="fa fa-pencil" aria-hidden="true"></a>
                <a href="#" class="fa fa-trash" aria-hidden="true"></a>
            </div>
          </li>
          <li class="list-group-item">Personal e Fisiologia
            <div class="pull-right">
                <a href="#" class="fa fa-pencil" aria-hidden="true"></a>
                <a href="#" class="fa fa-trash" aria-hidden="true"></a>
            </div>
          </li>
          <li class="list-group-item">Saúde
            <div class="pull-right">
                <a href="#" class="fa fa-pencil" aria-hidden="true"></a>
                <a href="#" class="fa fa-trash" aria-hidden="true"></a>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="content">
      <ul class="pagination"> </ul>
    </div>
  </section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('/js/contact.js') }}"></script>
</body>  
</html>
<script src="{{ asset('js/function.js') }}"></script> 

