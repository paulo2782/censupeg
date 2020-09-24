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
      <div class="aux-bar">
        <h2>Contatos</h2>
        <form class="mr-1">
          <input type="search" id="botao" class="form-control" placeholder="Pesquisar contato" />
        </form>
      </div>
      <div class="content-table">
        <table class="table-content">
          <thead>
            <tr>

              <th></th>
              <th>Email</th>
              <th>Telefone</th>
              <th>Operador</th>
              <th>Ação</th>
            </tr>
            <tbody id="tabela">
              <tr>
            </tbody>
        </table>
      </div>
    </div>
    <div class="content">
      <ul class="pagination">
        
      </ul>
    </div>
  </section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('/js/contact.js') }}"></script>
</body>  
</html>
