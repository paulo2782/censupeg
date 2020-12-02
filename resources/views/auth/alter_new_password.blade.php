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
                <input type="password"  id="password" class="form-control" name="password" value="" required placeholder="Informe sua senha"/>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirme nova senha</label>
                <input type="password" id="password_confirm" class="form-control" name="password_confirmation" required placeholder="Confirme sua senha">
                <span toggle="#password-confirm" class="fa fa-fw fa-eye field_icon toggle-password"></span>    
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/login.js') }}"></script>
@endsection
