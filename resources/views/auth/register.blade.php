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
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Informe seu email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Informe sua senha">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="form-group">
                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme sua senha">
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
@endsection
