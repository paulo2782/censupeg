<div class="modal fade" id="modalEditProfile">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Editar perfil</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="callback"></div>
            <form class="form-dialog registerForm" id="updateUser" method="POST" action="{{ route('updateUser') }}">
                {{ method_field('PUT') }}
                {!! csrf_field() !!}
                <input type="hidden" name="id" id="id_edt_profile">
                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="name_edit">{{ __('Name') }}</label>
                        <input id="name_edit" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  value="{{ $dados[0]->name }}" autocomplete="name" autofocus placeholder="Informe seu nome">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group col-12">
                        <label for="email_edit">{{ __('E-Mail Address') }}</label>
                        <input type="email"  id="email_edit" class="form-control @error('email') is-invalid @enderror" name="email" autocomplete="email" value="{{ $dados[0]->email }}" placeholder="Informe seu email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                </div>
                <button type="submit" id="#" class="btn btn-outline-success" data-dismiss=" ">Salvar</button>            
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
