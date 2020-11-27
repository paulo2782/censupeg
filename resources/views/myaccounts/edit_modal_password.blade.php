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
                        <label class="text-4" for="name">Senha atual</label>
                        <input type="password" class="form-control" id="edtCourse" name="course" placeholder="Informe a senha atual" required autocomplete="course" autofocus/>
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" for="name">Nova senha</label>
                        <input type="password" class="form-control" id="edtCourse" name="course" placeholder="Informe a nova senha" required autocomplete="course" autofocus/>
                    </div>
                    <div class="form-group col-12">
                        <label class="text-4" for="name">Repetir nova senha</label>
                        <input type="password" class="form-control" id="edtCourse" name="course" placeholder="Repetir nova senha" required autocomplete="course" autofocus/>
                    </div>
                </div>
                <div class="line-horizontal"></div>
                <input type="hidden" id="idCourse" name="id">
                <button type="button" id="updateCourse" class="btn btn-primary" data-dismiss=" ">Salvar</button>            
            </form>
        </div>
   </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>