<div class="modal fade" id="myModalEdit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Alterar senha </h3>
                <span class="text-5">Para sua segurança, use uma senha que contenha números, letras maiúsculas, minúsculas e caracteres especiais, e com no mínimo 8 caracteres</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="callback"></div>
            <form class="form-dialog registerForm" id="updateForm">
             <meta name="csrf-token" content="{{ csrf_token() }}">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                 <div class="form-row">
                    <div class="form-group col-12">
                        <label class="text-4" for="password">Senha atual</label>
                        <input type="password" class="form-control" id="password" name="#" placeholder="Informe a senha atual" required autofocus/>
                        <span toggle="#password" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" for="new-password">Nova senha</label>
                        <input type="password" class="form-control" id="new-password" name="#" placeholder="Informe a nova senha" required autofocus/>
                        <span toggle="#password" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" for="confirm-password">Repetir nova senha</label>
                        <input type="password" class="form-control" id="confirm-password" name="#" placeholder="Repetir nova senha" required autofocus/>
                        <span toggle="#password" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                    </div>
                </div>
                <div class="line-horizontal"></div>
                <button type="button" id="#" class="btn btn-success" data-dismiss=" ">Salvar</button>            
            </form>
        </div>
   </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('/js/my_accounts.js') }}"></script>
