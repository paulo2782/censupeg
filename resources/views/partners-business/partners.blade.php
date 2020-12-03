@extends('layouts.app')
@include('partners-business/add_modal_partner')
@include('partners-business/edit_modal_partner')

<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<body id="body-container">
@include('includes/header')
 
<div id="container-main">
    <div class="container">
        <div class="content">
            <div class="top-bar">
                <h1>Empresas Parceiras</h1>
                <a href="#"><img src="{{ asset('img/button-add.png') }}" alt="Botão adicionar" id="btnAdd"></a>
                <span id="message">@foreach($errors->all() as $error) <p><b>{{ $error }}</b></p> @endforeach</span>
            </div>
            <div class="aux-bar">
                <h2>Empresas Parceiras </h2>
                <form class="search-contact" action="{{ route('searchContact') }}">
                    <input type="search" id="search" name="search" class="form-control" placeholder=" Pesquisar empresa" />
                </form>
            </div>
            <div id="content-table" class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Situação</th>
                            <th>Operador</th>
                            <th>Ação</th>
                        </tr>
                    </thead>  
                    <tbody id="tabela">
                        <tr>
                            <td><a href="#"> Ouro Negro Transportadora </td> </a>
                            <td>carolina@ouronegro.com </td>
                            <td> 4834614466 </td>
                            <td> Contrato</td>
                            <td> Helluza </td>
                            <td>
                                <a href='#'><i class='fas fa-pen-square'></i></a>
                                <a href='#'><i class='fas fa-times'></i></a></td> 
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
<script src="{{ asset('js/partners.js') }}"></script> 
</body>  
</html>
