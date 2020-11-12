@extends('layouts.app')

@section('content')
<div id="login">
    <div class="container">
        <img class="login-img my-4" src="img/logo-censupeg.png" alt="Logo censupeg">
        <h1 class="my-2 text-center">Alterar senha </h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="email">Nova senha</label>
                <input id="email" type="password" class="form-control" name="password" value="" required />
            </div>
            <div class="form-group">
                <label for="email">Confirme nova senha</label>
                <input id="email" type="password" class="form-control" name="password" value="" required />
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">
                    Salvar
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
