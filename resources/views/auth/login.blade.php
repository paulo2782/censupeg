@extends('layouts.app')
<form method="POST" action="{{ route('login') }}">
@csrf

<section class="container-main">
    <div class="login">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <img src="img/logo-censupeg.png" alt="Logo censupeg" class="login-img my-4">
                <h1 class="h3 my-2 text-center">Acesse sua conta </h1>
                <form name="frmLogin" id="frmLogin">
                    <div class="form-group">
                        <label for="username">Usuário:</label>
                        <input type="email" name="email" id="email" placeholder="Informe seu email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password" >Senha:</label>
                        <input type="password" name="password" id="password" placeholder="Informe sua senha" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary form-control"> 
                        {{ __('Login') }}
                    </button>
                    <div class="mt-4">
                        <div class="d-flex justify-content-center">
                            Para se registrar? <a onclick="window.location.href='register'" class="ml-2 login-a">Clique aqui</a>
                        </div>
                        <div class="d-flex justify-content-center">

                        </div>
                    </div>                        
                    <!--<div class="clearfix">&nbsp</div>
                    <input type="button" class="btn btn-secondary form-control" onclick="window.location.href='register'" value="Registre-se">
                    <div class="clearfix">&nbsp</div>-->                        
                    <div id="message">
                        <div class="text-center"> @error('messages'){{ $message }}@enderror</div>
                    </div>  
                </form>
            </div>
        </div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/function.js') }}"></script>