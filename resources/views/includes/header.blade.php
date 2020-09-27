<header class="header">
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="/"><img src="{{ asset('img/logo-censupeg-header.png') }}" alt="Logo da Censupeg" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMenu">
      <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contactShow') }}">Contatos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: #fff" href="{{ route('callShow') }}">Ligações</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Relatório</a>
        </li>
      </ul>
      <ul class="navbar-nav my-2 my-lg-0">
        <li class="nav-item">
          <a class="nav-link username">{{ auth()->user()->name }}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}">Sair</a>
        </li>
      </ul>
    </div>
  </nav>
</header>
