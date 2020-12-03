@section('content')
<div class="modal fade" id="myModalAdd">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Nova Parceria <span class="text-5">* Campo Obrigatório</span></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="callback"></div>
            <form class="form-dialog registerForm" id="#" action="#" method="post">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <div class="form-row">
                <div class="form-group col-12">
                        <label class="text-4" for="name">Nome da Empresa <span>*</span></label>
                        <input type="text" class="form-control" id="name" name="#" placeholder="Informe o nome da empresa" required autocomplete="course" autofocus/>
                    </div>
                    <div class="form-group col-md-7 col-12">
                        <label class="text-4" for="email">Email <span>*</span></label>
                        <input type="email" class="form-control" id="email" name="#" placeholder="fulano@email.com" autocomplete="course" autofocus/>
                    </div>
                    <div class="form-group col-md-5 col-12">
                        <label class="text-4" for="phone">Telefone <span>*</span></label>
                        <input type="text" class="form-control" id="phone" name="#" placeholder="(00) 00000-0000" required autocomplete="course" autofocus/>
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" for="observation">Informações adicionais</label>
                        <textarea class="form-control" id="observation" name="additional_information"></textarea>
                    </div>
                </div>
                <div class="line-horizontal"></div>
                <button type="submit" id="add" class="btn btn-outline-success" data-dismiss=" ">Salvar</button>            
            </form>
        </div>
   </div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/partners.js') }}"></script>