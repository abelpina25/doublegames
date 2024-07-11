@extends('layouts.app') <!-- Extendendo o layout principal -->

@section('content')
    @include('include.menu') <!-- Incluindo o menu -->

    <div class="container py-5">
        @if (session('message'))
            <div class="alert alert-success text-center">
                {{ session('message') }} <!-- Exibindo mensagem de sucesso, se houver -->
            </div>
        @endif
        @if (count($games) > 0)
            <div class="row row-cols-1 row-cols-md-4 g-4">
                @foreach ($games as $game)
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('storage/' . $game->image_path) }}" class="card-img-top" alt="{{ $game->name }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-center">{{ $game->name }}</h5> <!-- Título centralizado do jogo -->
                                <p class="card-text">{{ Str::limit($game->description, 100) }}</p> <!-- Limitando descrição do jogo -->
                                <p class="card-text"><strong style="font-size: 1.2rem;">€ {{ number_format($game->price, 2, ',', '.') }}</strong></p> <!-- Formatando preço -->
                                @auth   <!-- Conteúdo que será renderizado se o usuário estiver autenticado -->
                                    <form action="{{ route('cart.add') }}" method="POST" class="mt-auto">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $game->id }}">
                                        <input type="hidden" name="name" value="{{ $game->name }}">
                                        <input type="hidden" name="price" value="{{ $game->price }}">
                                        @if (Auth::user()->name == 'admin')
                                        @else
                                        <button type="submit" class="btn btn-info w-100">Adicionar ao Carrinho</button>
                                    @endif
                                    </form>
                                @endauth
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="no-products">
                <p>Neste momento não existem jogos na loja.</p>
            </div>
        @endif
    </div>

   <!-- Rodapé -->
<footer class="footer mt-auto bg-dark text-white py-3">
    <div class="container">
        <div class="row justify-content-between">
            <!-- Logo e Redes Sociais -->
            <div class="col-md-3 mb-2">
                <div class="footer-section">
                    <img src="{{ asset('imagens/logotipo.png') }}" alt="Trustpilot logo" width="150" height="auto">
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>     
            </div>
            <!-- Texto do site -->
            <div class="col-md-3 mb-2 site-description">
                <h5>Sobre</h5>
                <p>
                    A Double A Games é dedicada a oferecer uma vasta seleção de jogos de qualidade a preços acessíveis. 
                    Nosso compromisso é proporcionar uma experiência de compra única, onde todos os gamers encontram o que procuram, 
                    seja para diversão casual ou desafios intensos.
                </p>
            </div>
            <!-- Localização -->
            <div class="col-md-3 mb-2">
                <div class="footer-section">
                    <h5>Localização</h5>
                    <ul class="list-unstyled location-info">
                        <li><i class="fas fa-map-marker-alt"></i> Portugal, Lisboa, Pontinha</li>
                        <li><i class="fas fa-map-marker-alt"></i> Rua Augusta</li>
                    </ul>
                </div>
            </div>
            <!-- Seção de Contato -->
            <div class="col-md-3 mb-2 contact-info">
                <h5>Contato</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-envelope"></i> <strong>E-mail:</strong> DoubleAGames@gmail.com</li>
                    <li class="fs-5"><i class="fas fa-phone"></i> <strong>Telefone:</strong>967654321</li>
                    <li><a href="{{ route('contact') }}"><strong>Para mais:</strong> Contacte-nos</a></li>
                </ul>
            </div>
        </div>
        <!-- Copyright -->
        <div class="row">
            <div class="col-12 text-center mt-3">
                <p>&copy; 2024 Alecsandru & Abel | Double A Games. Todos os direitos reservados.</p>
            </div>
        </div>
    </div>
</footer>

@endsection






