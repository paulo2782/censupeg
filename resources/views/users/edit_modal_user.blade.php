<div class="modal fade" id="modalEdit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                    <h3 class="modal-title">Editar Usuário <span class="text-5">* Campo Obrigatório</span></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="callback"></div>
                <form class="form-dialog registerForm" id="updateUser" method="POST">
                  {{ method_field('PUT') }}
                  {!! csrf_field() !!}
                    <input type="hidden" name="id" id="id_edit">

                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="name">Tipo de usuário <span>*</span></label>
                            <select class="c-select form-control" name="level" id="level_edit" required>
                                <option value="" disabled selected hidden>Selecione tipo de usuário</option>
                                <option value="0">Operador</option>
                                <option value="1">Administrador</option>
                            </select>
                        </div>
                        <div class="form-group col-12">
                            <label for="name">{{ __('Name') }} <span>*</span></label>
                            <input id="name_edit" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Informe seu nome">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group col-12">
                            <label for="email">{{ __('E-Mail Address') }} <span>*</span></label>
                            <input type="email"  id="email_edit" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" placeholder="Informe seu email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                    <div class="line-horizontal"></div>
                    <button type="button" id="btnUpdate" class="btn btn-outline-success" data-dismiss=" ">Salvar</button>            
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
</script>