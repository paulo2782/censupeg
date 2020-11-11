@extends('layouts.app')
<form method="POST" action="{{ route('login') }}">
@csrf

<div id="login">
    <div class="container">
        <img class="login-img my-4" src="img/logo-censupeg.png" alt="Logo censupeg">
        <h1 class="my-2 text-center">Acesse sua conta </h1>
        <form name="frmLogin" id="frmLogin">
            <div class="form-group">
                <label for="username">Usuário:</label>
                @if(isset($_COOKIE['user']))                  
                <input type="email" name="email" id="email" placeholder="Informe seu email" class="form-control" value="{{ Cookie::get('user') }}">
                @else
                <input type="email" name="email" id="email" placeholder="Informe seu email" class="form-control">
                @endif 
            </div>
            <div class="form-group">
                <label for="password" >Senha:</label>
                @if(isset($_COOKIE['user']))
                <input type="password" name="password" id="password" placeholder="Informe sua senha" class="form-control" value="{{ Cookie::get('password') }}">
                @else
                <input type="password" name="password" id="password" placeholder="Informe sua senha" class="form-control">
                @endif
            </div>
            <button type="submit" class="btn btn-primary form-control"> 
                {{ __('Login') }}
            </button>
            <div class="form-group mt-2">
                <div class="form-check">
                @if(isset($_COOKIE['user']))
                    <input type="checkbox" class="form-check-input" id="checkLogin" name="remember" checked="true">
                @else
                    <input type="checkbox" class="form-check-input" id="checkLogin" name="remember">
                @endif

                    <label class="form=check-label" for="checkLogin">Lembrar senha</label>
                </div>
            </div>
            <div class="mt-2">
                <div class="d-flex justify-content-center text-4">
                    Para se registrar? <a onclick="window.location.href='register'" class="ml-2 login-a">Clique aqui</a>
                </div>
                <div class="d-flex justify-content-center text-4">
                    <a href="/recovery-password" class="mt-2 login-a">Esqueceu sua senha?</a>
                </div>
            </div>                        
            <div id="message">
                <div class="text-center"> @error('messages'){{ $message }}@enderror</div>
            </div>  
        </form>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"
></script>
<script src="{{ asset('js/function.js') }}"></script>
