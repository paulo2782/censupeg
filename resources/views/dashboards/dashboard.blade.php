@extends('layouts.app')
<meta name="csrf-token" content="{{ csrf_token() }}">
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<body id="body-container">
  @include('includes/header')
  <div id="container-main">
    <div class="container">
        <div class="content-details">
            <div class="top-bar-block">
                <h1>Seja bem-vindo, {{ auth()->user()->name }}!</h1>
            </div>
            

                <div class="row">
                    <div class="col-md-3">
                        <div class="card mb-4 box-shadow" style="background: white; border: 1px solid black">
                            <div class="card-body my-4 mx-4">
                                <h5 class="font-weight-500">Contatos</h5>
                                <h1 class="card-title pricing-card-title">4500 <small class="text-muted">/ total</small></h1>
                                <a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i> Contatos</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-4 box-shadow" style="background: white; border: 1px solid black">
                            <div class="card-body my-4 mx-4">
                                <h5 class="font-weight-500">Cursos</h5>
                                <h1 class="card-title pricing-card-title">30 <small class="text-muted">/ total</small></h1>
                                <a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i> Cursos</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-4 box-shadow" style="background: white; border: 1px solid black">
                            <div class="card-body my-4 mx-4">
                                <h5 class="font-weight-500">Parcerias</h5>
                                <h1 class="card-title pricing-card-title">5 <small class="text-muted">/ total</small></h1>
                                <a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i> Parcerias</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-4" style="background: white; border: 1px solid black;">
                            <div class="card-body my-4 mx-4">
                                <h5 class="font-weight-500">Mailing</h5>
                                <h1 class="card-title pricing-card-title">30 <small class="text-muted">/ mês</small></h1>
                                <a href="#" style="text-decoration: none"><i class="fa fa-arrow-right" aria-hidden="true"></i> Mailing</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</body>  
</html>
