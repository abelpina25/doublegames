<style>
   /* Estilos para o menu dropdown */
.dropdown-menu {
    background-color: #4393c9; /* Cor de fundo da nav-bar*/
    color: #fff; /* Texto branco */
}

/* Estilos para os itens do menu dropdown */
.dropdown-menu .dropdown-item {
    color: #fff; /* Texto branco */
}

/* Estilos para os itens do menu dropdown ao passar o mouse */
.dropdown-menu .dropdown-item:hover {
    background-color: #5fade0; /* Fundo levemente mais claro ao passar o mouse */
    color: #fff; /* Texto branco */
}

/* Estilos para ícones usando Font Awesome */
.navbar-nav .nav-link i {
    margin-right: 8px; /* Espaçamento à direita do ícone */
}

/* Estilos para a navbar personalizada */
.custom-navbar {
    background-color: #4284af; /* Cor de fundo da navbar */
}

/* Estilo para o ícone e o texto da navbar */
.navbar-nav .nav-link {
    display: flex;
    align-items: center;
    color: white; /* Cor do texto da navbar */
    transition: color 0.3s ease, background-color 0.3s ease; /* Transição suave para o efeito de hover */
}

/* Ajuste para o botão do dropdown "Perfil" */
.navbar-nav .nav-link.dropdown-toggle {
    color: white; /* Texto sempre em branco */
}

.navbar-nav .nav-link.dropdown-toggle:hover {
    color: white; /* Texto sempre em branco mesmo ao passar o mouse */
}
</style>

<!-- Barra de navegação -->
<nav class="navbar navbar-expand-lg navbar-light custom-navbar">
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
                        <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Registar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Login</a>
                    </li>
                @endguest
                <!-- Links para todos os usuários -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}"><i class="fas fa-info-circle"></i> Sobre Nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('shop') }}"><i class="fas fa-shopping-bag"></i> Loja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}"><i class="fas fa-envelope"></i> Contato</a>
                </li>
            </ul>
            <!-- Dropdown para usuários autenticados -->
            @auth
                <div class="btn-group p-5">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i> Perfil
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-end">
                        @if (Auth::user()->name == 'admin')
                            <li><a class="dropdown-item" href="{{ route('admin.games.index') }}">Gerir Jogos</a></li>
                            <li><a class="dropdown-item" href="{{ route('admin.games.create') }}">Inserir Jogo</a></li>
                        @else
                            <li><a class="dropdown-item" href="{{ route('paygames.index') }}">Jogos Comprados</a></li>
                        @endif
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

                @if (Auth::user()->name != 'admin')
                    <div class="btn-group">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-shopping-cart"></i> Carrinho
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-end">
                            <!-- listar items adicionados ao carrinho -->
                            @foreach ($items = LaraCart::getItems() as $item)
                                <li>
                                    <a class="dropdown-item">{{ $item->name }}</a>
                                </li>
                            @endforeach
                            <!-- separador -->
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <!-- checkout -->
                            <li><a class="dropdown-item" href="{{ route('cart.index') }}">Ver carrinho</a></li>

                        </ul>
                    </div>
                @endif
            @endauth
        </div>
    </div>
</nav>