@extends('layouts.app')
@include('contact/modal')
<meta name="csrf-token" content="{{ csrf_token() }}">
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<body class="body-container">
  @include('includes/header')
  <section class="container-main">
    <div class="content">
      <div class="top-bar">
        <h1>Contatos</h1>

        <a href="#"><img src="{{ asset('img/button-add.png') }}" alt="Botão adicionar" id="btnAdd"></a>
      </div>
      <span id="message">@foreach($errors->all() as $error) <p><b>{{ $error }}</b></p> @endforeach</span>
      <div class="aux-bar">
        <h2>Contatos </h2>

        <form class="search-contact" action="{{ route('searchContact') }}">
          <input type="search" id="search" name="search" class="form-control" placeholder=" Pesquisar contato" />
        </form>
      </div>
      <div class="content-table">
        <h5><span>{{ $dados->appends(['search'=>$dados])->links() }}</span></h5>
        <table class="table-content">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Email</th>
              <th>Telefone</th>
              <th>Operador</th>
              <th>Ação</th>
            </tr>
          </thead>  
          <tbody id="tabela">
            @foreach($dados as $dado)
              <tr>
                <td><a href="{{ route('viewData',$dado->id) }}"> {{ $dado->name }} </td> </a>
                <td><a href="{{ route('viewData',$dado->id) }}"> {{ $dado->email }} </td> </a>
                <td><a href="{{ route('viewData',$dado->id) }}"> {{ $dado->phone }} </td> </a>
                <td><a href="{{ route('viewData',$dado->id) }}"> {{ $dado->user->name }}</td> </a>
                <td id='toview'>
                  <div class='dropdown'>
                    <img src='/img/tres-pontinhos.png' alt='três pontinhos' type='button' id='dropdownImage' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'/>
                    <div class='dropdown-menu' aria-labelledby='dropdownImage'>
                      <a href="{{ route('viewData',$dado->id) }}" class='dropdown-item btnToView' id="{{ $dado->id }}">Visualizar</a>
                      <a href="{{ route('destroy',$dado->id) }}" class='dropdown-item btnDelete'>Excluir</a>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
          </tbody>
        </table>
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

