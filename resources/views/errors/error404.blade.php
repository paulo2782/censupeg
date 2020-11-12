@extends('layouts.app')
<body id="body-container">
<div id="container-main">
    <div class="container">
        <div class="content">
            <div id="error-404">
                <div class="error-code my-20">404 <i class="fa fa-warning"></i></div>
                <h1 class="font-bold">Oops 404! Página não encontrada.</h1>

                    <div class="error-desc">
                        <p>Desculpe, mas a página que você está procurando não foi encontrada ou não existe. <br />
                        Experimente atualizar a página ou clique no botão abaixo para voltar à página inicial. </p>
                    <div>
                    <div class="btn-error">
                        <a href="{{ route('contactShow') }}" class="btn btn-primary">Página Inicial</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>  
</html>
