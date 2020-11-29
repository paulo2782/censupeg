@extends('layouts.app')
@include('mailing/add_modal_mailing')
@include('mailing/edit_modal_mailing')
@include('mailing/delete_modal_mailing')
<meta name="csrf-token" content="{{ csrf_token() }}">
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<body id="body-container">
@include('includes/header')
<div id="container-main">
    <div class="container">
        <div class="content-details">
            <div class="top-bar-block">
                <h1>Mailing</h1>
                <a href="#"><img src="{{ asset('img/button-add.png') }}" alt="Botão adicionar" id="btnAdd"></a>
                <span id="message">@foreach($errors->all() as $error) <p><b>{{ $error }}</b></p> @endforeach</span>
            </div>
            <div class="show-details-block">
                <div id="month">
                    <ul>
                        <li class="prev"><a href="#">&#10094;</a></li>
                        <li class="next"><a href="#">&#10095;</a></li>
                        <li>Novembro de <span style="font-size:18px">2020</span></li>
                    </ul>
                </div>
            </div>
            <div class="show-details-block">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingDate">
                            <div class="text-4 mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    24/11
                                </button>
                                <i class="fa fa-file-export"></i>
                            </div>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingDate" data-parent="#accordion">
                            <div class="card-body">
                                <div id="content-table" class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Nome </td>
                                                <th>Contato data/hora </th>
                                                <th>Retorno data/hora </th>
                                                <th>Curso de interesse</th>
                                                <th>Status</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>  
                                        <tbody id="tabela">
                                            <tr>
                                                <td>joao manuel </td>
                                                <td>29/11/2020 11:10 </td>
                                                <td>29/11/2020 11:10 </td>
                                                <td>Educação Física</td>
                                                <td>Tem interesse</td>
                                                <td id='toview'>
                                                    <div class='dropdown'>
                                                    <img src='img/tres-pontinhos.png' alt='três pontinhos' type='button' id='dropdownImage' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'/>
                                                    <div class='dropdown-menu' aria-labelledby='dropdownImage'>
                                                        <a href="#" class='dropdown-item btnToView' id="#">Visualizar</a>
                                                    </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>joao manuel </td>
                                                <td>29/11/2020 11:10 </td>
                                                <td>29/11/2020 11:10 </td>
                                                <td>Educação Física</td>
                                                <td>Tem interesse</td>
                                                <td id='toview'>
                                                    <div class='dropdown'>
                                                    <img src='img/tres-pontinhos.png' alt='três pontinhos' type='button' id='dropdownImage' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'/>
                                                    <div class='dropdown-menu' aria-labelledby='dropdownImage'>
                                                        <a href="#" class='dropdown-item btnToView' id="#">Visualizar</a>
                                                    </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="line-horizontal"></div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <div class="text-4 mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    25/11
                                </button>
                            </div>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <div id="content-table" class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Nome </td>
                                                <th>Contato data/hora </th>
                                                <th>Retorno data/hora </th>
                                                <th>Curso de interesse</th>
                                                <th>Status</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>  
                                        <tbody id="tabela">
                                            <tr>
                                                <td>joao manuel </td>
                                                <td>29/11/2020 11:10 </td>
                                                <td>29/11/2020 11:10 </td>
                                                <td>Educação Física</td>
                                                <td>Tem interesse</td>
                                                <td id='toview'>
                                                    <div class='dropdown'>
                                                    <img src='img/tres-pontinhos.png' alt='três pontinhos' type='button' id='dropdownImage' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'/>
                                                    <div class='dropdown-menu' aria-labelledby='dropdownImage'>
                                                        <a href="#" class='dropdown-item btnToView' id="#">Visualizar</a>
                                                    </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="line-horizontal"></div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <div class="text-4 mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    26/11
                                </button>
                            </div>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <div id="content-table" class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Nome </td>
                                                <th>Contato data/hora </th>
                                                <th>Retorno data/hora </th>
                                                <th>Curso de interesse</th>
                                                <th>Status</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>  
                                        <tbody id="tabela">
                                            <tr>
                                                <td>joao manuel </td>
                                                <td>29/11/2020 11:10 </td>
                                                <td>29/11/2020 11:10 </td>
                                                <td>Educação Física</td>
                                                <td>Tem interesse</td>
                                                <td id='toview'>
                                                    <div class='dropdown'>
                                                    <img src='img/tres-pontinhos.png' alt='três pontinhos' type='button' id='dropdownImage' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'/>
                                                    <div class='dropdown-menu' aria-labelledby='dropdownImage'>
                                                        <a href="#" class='dropdown-item btnToView' id="#">Visualizar</a>
                                                    </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="line-horizontal"></div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <div class="text-4 mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    27/11
                                </button>
                            </div>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <div id="content-table" class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Nome </td>
                                                <th>Contato data/hora </th>
                                                <th>Retorno data/hora </th>
                                                <th>Curso de interesse</th>
                                                <th>Status</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>  
                                        <tbody id="tabela">
                                            <tr>
                                                <td>joao manuel </td>
                                                <td>29/11/2020 11:10 </td>
                                                <td>29/11/2020 11:10 </td>
                                                <td>Educação Física</td>
                                                <td>Tem interesse</td>
                                                <td id='toview'>
                                                    <div class='dropdown'>
                                                    <img src='img/tres-pontinhos.png' alt='três pontinhos' type='button' id='dropdownImage' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'/>
                                                    <div class='dropdown-menu' aria-labelledby='dropdownImage'>
                                                        <a href="#" class='dropdown-item btnToView' id="#">Visualizar</a>
                                                    </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="line-horizontal"></div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <div class="text-4 mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    28/11
                                </button>
                            </div>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <div id="content-table" class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Nome </td>
                                                <th>Contato data/hora </th>
                                                <th>Retorno data/hora </th>
                                                <th>Curso de interesse</th>
                                                <th>Status</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>  
                                        <tbody id="tabela">
                                            <tr>
                                                <td>joao manuel </td>
                                                <td>29/11/2020 11:10 </td>
                                                <td>29/11/2020 11:10 </td>
                                                <td>Educação Física</td>
                                                <td>Tem interesse</td>
                                                <td id='toview'>
                                                    <div class='dropdown'>
                                                    <img src='img/tres-pontinhos.png' alt='três pontinhos' type='button' id='dropdownImage' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'/>
                                                    <div class='dropdown-menu' aria-labelledby='dropdownImage'>
                                                        <a href="#" class='dropdown-item btnToView' id="#">Visualizar</a>
                                                    </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="line-horizontal"></div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <div class="text-4 mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    29/11
                                </button>
                            </div>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <div id="content-table" class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Nome </td>
                                                <th>Contato data/hora </th>
                                                <th>Retorno data/hora </th>
                                                <th>Curso de interesse</th>
                                                <th>Status</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>  
                                        <tbody id="tabela">
                                            <tr>
                                                <td>joao manuel </td>
                                                <td>29/11/2020 11:10 </td>
                                                <td>29/11/2020 11:10 </td>
                                                <td>Educação Física</td>
                                                <td>Tem interesse</td>
                                                <td id='toview'>
                                                    <div class='dropdown'>
                                                    <img src='img/tres-pontinhos.png' alt='três pontinhos' type='button' id='dropdownImage' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'/>
                                                    <div class='dropdown-menu' aria-labelledby='dropdownImage'>
                                                        <a href="#" class='dropdown-item btnToView' id="#">Visualizar</a>
                                                    </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <ul class="pagination"> </ul>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>  
</html>