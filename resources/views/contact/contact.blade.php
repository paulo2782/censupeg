@extends('layouts.app')
@include('contact/modal')

<meta name="csrf-token" content="{{ csrf_token() }}">
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<body id="body-container">
@include('includes/header')

<!-- if(session('alert'))
<center>
    <div class="alert alert-success">
          session('alert') }}
    </div>
</center>
endif
 -->

 
<div id="container-main">
    <div class="container">
        <div class="content">
            <div class="top-bar">
                <h1>Contatos</h1>
                <a href="#"><img src="{{ asset('img/button-add.png') }}" alt="Botão adicionar" id="btnAdd"></a>
                <span id="message">@foreach($errors->all() as $error) <p><b>{{ $error }}</b></p> @endforeach</span>
            </div>
            <div class="aux-bar">
                <h2>Contatos </h2>
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
                    @foreach($dados as $dado)
                        <tr>
                            <td><a href="{{ route('viewData',$dado->id) }}"> {{ $dado->name }} </a></td>
                            <td>{{ $dado->email }} </td>
                            <td> {{ $dado->phone }} </td>
                            <td> {{ $dado->user->name }}</td>
                            <td id='toview'>
                                <a href="{{ route('viewData',$dado->id) }}" id="{{ $dado->id }}" class="fa fa-eye btnToView" aria-hidden="true" title="Visualizar contato"></a>
                                <a href="{{ route('destroy',$dado->id) }}" class="fa fa-trash btnDelete" aria-hidden="true" title="Excluir contato"></a>
                            </td>
                            <!--
                            <td id='toview'>
                                <div class='dropdown'>
                                <img src='img/tres-pontinhos.png' alt='três pontinhos' type='button' id='dropdownImage' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'/>
                                <div class='dropdown-menu' aria-labelledby='dropdownImage'>
                                    <a href="{{ route('viewData',$dado->id) }}" class='dropdown-item btnToView' id="{{ $dado->id }}">Visualizar</a>
                                    @if(auth()->user()->level == 1)
                                    <a href="{{ route('destroy',$dado->id) }}" class='dropdown-item btnDelete'>Excluir</a>
                                    @endif
                                </div>
                                </div>
                            </td>


                                -->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="content">
            <ul class="pagination">
                <li>
                    <span class="text-4">{{ $dados->appends(['search'=>$search])->links() }}</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('/js/contact.js') }}"></script>
</body>  
</html>
<script src="{{ asset('js/function.js') }}"></script> 
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      swal("Censupeg",msg, 'error');
    }
</script>