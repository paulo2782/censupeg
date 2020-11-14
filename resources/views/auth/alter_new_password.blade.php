@extends('layouts.app')

@section('content')
<div id="login">
    <div class="container">
        <img class="login-img my-4" src="{{ asset('img/logo-censupeg.png') }}" alt="Logo censupeg">
        <h1 class="my-2 text-center">Alterar senha </h1>
        <form method="POST" action="{{ route('updatePassword') }}">
            @csrf
            <span id="message">@foreach($errors->all() as $error) <p><b>{{ $error }}</b></p> @endforeach</span>
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="form-group">
                <label for="password">Nova senha</label>
                <input id="password" type="password" class="form-control" name="password" value="" required autocomplete="new-password" placeholder="Informe sua senha"/>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirme nova senha</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme sua senha">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">
                    Salvar
                </button>
            </div>
            <div class="mt-2">
                <div class="d-flex justify-content-center text-4">
                    Voltar para a página de login? 
                    <a href="{{ route('home') }}" class="ml-2 login-a">Clique aqui</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
