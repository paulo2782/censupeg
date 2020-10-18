@extends('layouts.app')
@include('contact/modal')
<body class="body-container">
    @include('includes/header')
    <section class="container-main">
    <div class="content">
        <div class="top-bar">
            <h1>Ligações</h1>
        </div>
        <div class="aux-bar">
            <h2>Ligacões</h2>
            <form class="search-contact" action="{{ route('searchCall') }}" method="GET">
                <input type="search" id="botao" class="form-control" name="search" placeholder="Pesquisar contato" />
            </form>
        </div>
        <div class="content-table">
            <table class="table-content">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Ligação</th>
                    <th>Retorno</th>
                    <th>Ação</th>
                </tr>
                </thead>
            <tbody id="tabela">
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td id='toview'>
                      <div class='dropdown'>
                        <img src='/img/tres-pontinhos.png' alt='três pontinhos' type='button' id='dropdownImage' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'/>
                        <div class='dropdown-menu' aria-labelledby='dropdownImage'>
                          <a href="#" class='dropdown-item btnToView' id="#">Visualizar</a>
                          <a href="#" class='dropdown-item btnDelete'>Excluir</a>
                        </div>
                      </div>
                    </td>
                </tr>                    
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

