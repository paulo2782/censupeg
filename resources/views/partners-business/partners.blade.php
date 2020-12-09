@extends('layouts.app')
@include('partners-business/add_modal_partner')
@include('partners-business/edit_modal_partner')
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<body id="body-container">
@include('includes/header') 
    <div id="container-main">
        <div class="container">
            <div class="content">
                <div class="top-bar">
                    <h1>Empresas parceiras</h1>
                    <a data-toggle="modal" href="#myModalAdd"><img src="{{ asset('img/button-add.png') }}" alt="Botão adicionar" id="btnAdd"></a>
                    <span id="alert"> {{ Session::get('alert') }} </span>
                    <span id="message">@foreach($errors->all() as $error) <p><b>{{ $error }}</b></p> @endforeach</span>
                </div>
                <div class="aux-bar">
                    <h2>Empresas parceiras </h2>
                    <form class="search-contact" action="{{ route('partnerShow') }}">
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
                                <th>Status</th>
                                <th>Operador</th>
                                <th>Ação</th>
                            </tr>
                        </thead>  
                        <tbody id="tabela">
                            @foreach($dados as $dado)
                            <tr>
                                <td><a href="#"> {{ $dado->name }} </td> </a>
                                <td>{{ $dado->email }} </td>
                                <td>{{ $dado->phone }} </td>
                                <td>{{ $dado->status }}</td>
                                <td>{{ $dado->user->name }} </td>
                                <td>
                                    <a data-toggle="modal" href="#myModalEdit" 
                                        data-id="{{ $dado->id }}" 
                                        data-name="{{ $dado->name }}"
                                        data-email="{{ $dado->email }}"
                                        data-phone="{{ $dado->phone }}"
                                        data-status="{{ $dado->status }}"
                                        data-additional_information="{{ $dado->additional_information }}"
                                        class="fa fa-pencil editPartner">
                                    </a>
                                    @if(auth()->user()->level == 1)
                                        <a href="{{ route('destroyPartner',$dado->id) }}" class='fa fa-trash deletePartner'></a> 
                                    @endif
                                </td>
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
    <script src="{{ asset('js/partners.js?1') }}"></script> 
</body>  
</html>

<script>
$('.editPartner').click(function(event) {
    /* Act on the event */
    $('#id_partner').val($(this).attr('data-id'))
    $('#edtName').val($(this).attr('data-name'))
    $('#edtEmail').val($(this).attr('data-email'))
    $('#edtPhone').val($(this).attr('data-phone'))
    $('#edtStatus').val($(this).attr('data-status'))
    $('#edtAdditional_information').html($(this).attr('data-additional_information'))

});

$('.deletePartner').click(function(event) {
    /* Act on the event */
    /* Act on the event */
    if(confirm('Confirma Excluir ?')){

    }else{
        return false;
    }

}); 

</script>
  