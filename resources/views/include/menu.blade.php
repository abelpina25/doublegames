<!-- Estilos CSS -->
<style>
    /* Estilos para o menu dropdown */
    .dropdown-menu {
        background-color: #343a40;
        /* Fundo escuro */
        color: #fff;
        /* Texto branco */
    }

    /* Estilos para os itens do menu dropdown */
    .dropdown-menu .dropdown-item {
        color: #fff;
        /* Texto branco */
    }

    /* Estilos para os itens do menu dropdown ao passar o mouse */
    .dropdown-menu .dropdown-item:hover {
        background-color: #495057;
        /* Fundo levemente mais claro ao passar o mouse */
        color: #fff;
        /* Texto branco */
    }

    /* Estilos para ícones */
    i {
        color: #fff;
        /* Define a cor do texto como branco */
    }
</style>

<!-- Barra de navegação -->
<nav class="navbar navbar-expand-lg navbar-light bg-light bg-dark">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="/">
            <img width="160" height="160" src="{{ asset('imagens/logotipo.png') }}" alt="Logo" class="img-fluid">
        </a>
        <!-- Botão para menu responsivo -->
        <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Conteúdo do menu -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <!-- Links para usuários não autenticados -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                @endguest
                <!-- Links para todos os usuários -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">Sobre Nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('shop') }}">Loja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contato</a>
                </li>
            </ul>
            <!-- Dropdown para usuários autenticados -->
            @auth
                <div class="btn-group">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-end">
                        <li><a class="dropdown-item" href="{{ route('admin.games.index') }}">Gerir Jogos</a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.games.create') }}">Inserir Jogo</a></li>
                        <li>
                            <!-- Logout -->
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <!-- Formulário para logout -->
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            @endauth
        </div>
    </div>
</nav>
