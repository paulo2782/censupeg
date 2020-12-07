<div class="modal fade" id="myModalEdit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Alterar senha </h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="callback"></div>
            <form class="form-dialog registerForm" method="GET" action="{{ route('updatePassword') }}">
             <meta name="csrf-token" content="{{ csrf_token() }}">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" id="id_edt_modal">
                 <div class="form-row">
                    <div class="form-group col-12">
                        <span class="text-5">Para sua segurança, recomenda-se usar uma senha que contenha números, letras maiúsculas, minúsculas e caracteres especiais, e com no mínimo 8 caracteres.</span>
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" for="old-password">Senha atual</label>
                        <input type="password" class="form-control" id="old-password" name="old_password" placeholder="Informe a senha atual" required autofocus/>
                        <span toggle="#old-password" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" for="new-password">Nova senha</label>
                        <input type="password" class="form-control" id="new-password" name="password" placeholder="Informe a nova senha" required autofocus/>
                        <span toggle="#new-password" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" for="confirm-password">Repetir nova senha</label>
                        <input type="password" class="form-control" id="confirm-password" name="password_confirmation" placeholder="Repetir nova senha" required autofocus/>
                        <span toggle="#confirm-password" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                    </div>
                </div>
                <button type="submit" id="#" class="btn btn-outline-success" data-dismiss=" ">Salvar</button>            
            </form>
        </div>
   </div>
</div>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
