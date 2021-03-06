@extends('layouts.app')
@include('contact/modal')
<body id="body-container">
@include('includes/header')
<div id="container-main">
    <div class="container">
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
        <div id="content-table" class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Ligação</th>
                        <th>Retorno</th>
                        <th>Horário</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody id="tabela">
                    @foreach($data as $data)
                    <tr>
                        <td><a href="{{ route('viewData',$data->contact_id) }}">{{ $data->Contact->name }}</a></td>
                        <td>{{ $data->Contact->phone }}</td>
                        <td>@if($data->date_contact != null) 
                            {{ date('d/m/Y',strtotime($data->date_contact)) }}
                            @endif
                        </td>
                        <td>@if($data->date_return != null) 
                            {{ date('d/m/Y',strtotime($data->date_return)) }}
                            @endif
                        </td>
                        <td>@if($data->schedule != null) 
                            {{ date('H:m', strtotime($data->schedule)) }}
                            @endif
                        </td>
                        <td id='toview'>
                            <a href="{{ route('viewData',$data->contact_id) }}" class="fa fa-eye btnToView" aria-hidden="true" title="Visualizar contato"></a>
                        </td>
                        @endforeach
                    </tr>                    
                </tbody>
            </table>
        </div>
    </div>
    <div class="content">
        <ul class="pagination"> </ul>
    </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('/js/contact.js') }}"></script>
</body>  
</html>
<script src="{{ asset('js/function.js') }}"></script> 