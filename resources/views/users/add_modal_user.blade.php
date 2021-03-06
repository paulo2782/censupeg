<div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Novo usuário <span class="text-5-title">* Campo obrigatório</span></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="callback"></div>
            <form class="form-dialog registerForm" id="contact-modal" action="{{ route('create-user') }}" method="post">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="level">Tipo de usuário <span class="text-5">*</span></label>
                        <select class="c-select form-control" id="level" name="level" required>
                            <option value="" disabled selected hidden>Selecione tipo de usuário</option>
                            <option value="0">Operador</option>
                            <option value="1">Administrador</option>
                        </select>
                    </div>
                    <div class="form-group col-12">
                        <label for="name">{{ __('Name') }} <span class="text-5">*</span></label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                               name="name" value="{{ old('name') }}" required placeholder="Informe seu nome">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="form-group col-12">
                        <label for="email">{{ __('E-Mail Address') }} <span class="text-5">*</span></label>
                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" required autocomplete="off"
                               placeholder="Informe seu email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 col-12">
                        <label for="password">{{ __('Password') }} <span class="text-5">*</span></label>
                        <input type="password" id="password"
                               class="form-control @error('password') is-invalid @enderror" name="password" required
                               autocomplete="off" placeholder="Informe sua senha">
                        <span toggle="#password" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 col-12">
                        <label for="password-confirm">{{ __('Confirm Password') }} <span class="text-5">*</span></label>
                        <input type="password" id="password-confirm" class="form-control" name="password_confirmation"
                               required autocomplete="off" placeholder="Confirme sua senha">
                        <span toggle="#password-confirm" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                    </div>
                </div>
                <button type="submit" id="#" class="btn btn-outline-success" data-dismiss=" ">Salvar</button>
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('/js/users.js') }}"></script>
