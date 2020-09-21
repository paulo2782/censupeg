<header class="header">
    <div class="header-container">
      <div class="row">
        <div class="col-md-2">
          <img src="{{ asset('img/logo-censupeg-header.png') }}" alt="Logo da Censupeg" />
        </div>
        <div class="col-md-8">
          <nav class="header-menu">
            <ul class="menu">
              <li><a href="#" class="menu-ativo">Contatos</a></li>
              <li><a href="#">Ligações</a></li>
              <li><a href="#">Relatório</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-md-2 logout">
          <a href="{{ route('logout') }}">Sair</a>
        </div>
      </div>
    </div>
  </header>
