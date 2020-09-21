@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form name="frmLogin" id="frmLogin">
                <section class="section_login">
                        <img src="img/logo-censupeg.png" alt="Logo censupeg" class="login-img">
                        <h1>Acesse sua conta </h1>
                        <label for="username">Usuário:</label>
                        <input type="text" name="name" id="name" placeholder="Informe seu usuário" class="form-control">
                        <label for="password" >Senha:</label>
                        <input type="password" name="password" id="password" placeholder="Informe sua senha" class="form-control" class="form-control">
                        <button class="botao" type="button" id="login">Enviar</button>
                        <div id="message"></div>
                </section>
  
            </form>
        </div>
    </div>
</div>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/login.js') }}"></script>

