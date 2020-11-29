@extends('layouts.app')
@include('mailing/add_modal_mailing')
@include('mailing/edit_modal_mailing')
@include('mailing/delete_modal_mailing')

<meta name="csrf-token" content="{{ csrf_token() }}">
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<body id="body-container">
@include('includes/header')

<div id="container-main">
    <div class="container">
        <div class="content">
            <div class="top-bar">
                <h1>Mailing</h1>
                <a href="#"><img src="{{ asset('img/button-add.png') }}" alt="Botão adicionar" id="btnAdd"></a>
                <span id="message">@foreach($errors->all() as $error) <p><b>{{ $error }}</b></p> @endforeach</span>
            </div>
            <div class="aux-bar">
                <h2>Mailing </h2>
                <form class="search-contact" action="{{ route('searchContact') }}">
                    <input type="search" id="search" name="search" class="form-control" placeholder=" Pesquisar contato" />
                </form>
            </div>
            <div id="content-table" class="table-responsive">
                <table class="table">
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
                        <tr>
                            <td><a href="#"> nome </td> </a>
                            <td>email </td>
                            <td> phone </td>
                            <td> operador</td>
                            <td id='toview'>
                                <div class='dropdown'>
                                <img src='img/tres-pontinhos.png' alt='três pontinhos' type='button' id='dropdownImage' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'/>
                                <div class='dropdown-menu' aria-labelledby='dropdownImage'>
                                    <a href="#" class='dropdown-item btnToView' id="">Visualizar</a>
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
            <ul class="pagination">
                <li>
                    <span class="text-4"></span>
                </li>
            </ul>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>  
</html>
