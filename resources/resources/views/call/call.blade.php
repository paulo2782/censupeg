@extends('layouts.app')
<body class="body-container">
    @include('includes/header')
    <section class="container-main">
    <div class="content">
        <div class="top-bar">
            <h1>Ligações</h1>
        </div>
        <div class="aux-bar">
            <h2>Ligacões</h2>
            <form class="search-contact" action="" method="POST">
                <input type="search" id="botao" class="form-control" placeholder="Pesquisar contato" />
            </form>
        </div>
        <div class="content-table">
            <table class="table-content">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Ligação</th>
                    <th>Retorno</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="#">João Manuel Marques De Carlo</a></td>
                        <td>(48) 9 8839-4210</td>
                        <td>02/09/2020</td>
                        <td>02/09/2020<br>16:51</td>
                        <td>
                            <div class="dropdown">
                                <img src="{{ asset('img/tres-pontinhos.png') }}" alt="três pontinhos" type="button" id="dropdownImage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"/>
                                <div class="dropdown-menu" aria-labelledby="dropdownImage">
                                    <a class="dropdown-item" href="#">Visualizar</a>
                                    <a class="dropdown-item" href="#">Excluir</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">João Manuel Marques De Carlo</a></td>
                        <td>(48) 9 8839-4210</td>
                        <td>02/09/2020</td>
                        <td>02/09/2020<br>16:51</td>
                        <td>
                            <div class="dropdown">
                                <img src="{{ asset('img/tres-pontinhos.png') }}" alt="três pontinhos" type="button" id="dropdownImage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"/>
                                <div class="dropdown-menu" aria-labelledby="dropdownImage">
                                    <a class="dropdown-item" href="#">Visualizar</a>
                                    <a class="dropdown-item" href="#">Excluir</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </section>
</body>
</html>
