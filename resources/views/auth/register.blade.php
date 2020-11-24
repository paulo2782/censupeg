@extends('layouts.app')

@section('content')
<div id="login">
    <div class="container">
        <img class="login-img my-4" src="img/logo-censupeg.png" alt="Logo censupeg">
        <h1 class="my-2 text-center">{{ __('Register') }} </h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="name">{{ __('Name') }}</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Informe seu nome">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="form-group">
                <label for="email">{{ __('E-Mail Address') }}</label>
                <input type="email"  id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Informe seu email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Informe sua senha">
                <span toggle="#password" class="fa fa-fw fa-eye field_icon toggle-password"></span>    
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="form-group">
                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme sua senha">
                <span toggle="#password-confirm" class="fa fa-fw fa-eye field_icon toggle-password"></span>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">
                    {{ __('Register') }}
                </button>
            </div>
            <div class="mt-2">
                <div class="d-flex justify-content-center text-4">
                    Voltar para a página de login?<a onclick="window.location.href='login'" class="ml-2 login-a">Clique aqui</a>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/login.js') }}"></script>
@endsection
