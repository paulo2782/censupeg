<div class="modal fade" id="myModalAdd">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Novo Usuário <span class="text-5">* Campo Obrigatório</span></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="callback"></div>
            <form class="form-dialog registerForm" id="contact-modal" action="{{ route('register') }}" method="post">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <div class="form-row">       
                    <div class="form-group col-12">
                        <label for="name">Tipo de usuário <span>*</span></label>
                        <select class="c-select form-control" name="level" required>
                            <option value="" disabled selected hidden>Selecione tipo de usuário</option>
                            <option value="0">Operador</option>
                            <option value="1">Administrador</option>
                        </select>
                    </div>
                    <div class="form-group col-12">
                        <label for="name">{{ __('Name') }} <span>*</span></label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Informe seu nome">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group col-12">
                        <label for="email">{{ __('E-Mail Address') }} <span>*</span></label>
                        <input type="email"  id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Informe seu email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group col-md-6 col-12">
                        <label for="password">{{ __('Password') }} <span>*</span></label>
                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Informe sua senha">
                        <span toggle="#password" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group col-md-6 col-12">
                        <label for="password-confirm">{{ __('Confirm Password') }} <span>*</span></label>
                        <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme sua senha">
                        <span toggle="#password-confirm" class="fa fa-fw fa-eye field_icon toggle-password"></span>
                    </div>
                </div>
                <div class="line-horizontal"></div>
                <button type="submit" id="#" class="btn btn-success" data-dismiss=" ">Salvar</button>            
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('/js/users.js') }}"></script>
