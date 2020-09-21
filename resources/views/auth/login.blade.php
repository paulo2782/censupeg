@extends('layouts.app')
<form method="POST" action="{{ route('login') }}">
@csrf

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form name="frmLogin" id="frmLogin">
                <section class="section_login">
                        <img src="img/logo-censupeg.png" alt="Logo censupeg" class="login-img">
                        <h1>Acesse sua conta </h1>
                        <label for="username">Usuário (e-mail):</label>
                        <input type="text" name="email" id="email" placeholder="Informe seu usuário" class="form-control">
                        <label for="password" >Senha:</label>
                        <input type="password" name="password" id="password" placeholder="Informe sua senha" class="form-control" class="form-control">
                        <button type="submit" class="btn btn-primary form-control"> 
                            {{ __('Login') }}
                        </button>                        
                        <div class="clearfix">&nbsp</div>
                        <input type="button" class="btn btn-success form-control" onclick="window.location.href='register'" value="Registre-se">
                        <div class="clearfix">&nbsp</div>                        
                        <div id="message">
                           <center> @error('messages'){{ $message }}@enderror</center>
                        </div>
                </section>
  
            </form>
        </div>
    </div>
</div>
</form> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/function.js') }}"></script>