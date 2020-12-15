@extends('layouts.app')

@section('content')
<form action="sendEmail" method="POST">
<div id="login">
    <div class="container">
        <img class="login-img my-4" src="img/logo-censupeg.png" alt="Logo censupeg">
        <h1 class="my-2 text-center">Recuperar senha </h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="email">{{ __('E-Mail Address') }}</label>
                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Informe seu email" required autocomplete="email">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">
                    Recuperar senha
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
</form>
@endsection
