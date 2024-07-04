@extends('layouts.app')

@section('content')
    @include('include.menu')

    <div class="container py-5">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <h1 class="text-center mb-4">Loja</h1>
        @if (count($games) > 0)
            <div class="row row-cols-1 row-cols-md-4 g-4">
                @foreach ($games as $game)
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('storage/' . $game->image_path) }}" class="card-img-top" alt="{{ $game->name }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $game->name }}</h5>
                                <p class="card-text">{{ Str::limit($game->description, 100) }}</p>
                                <p class="card-text"><strong>€ {{ number_format($game->price, 2, ',', '.') }}</strong></p>
                                @auth
                                    <form action="{{ route('cart.add') }}" method="POST" class="mt-auto">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $game->id }}">
                                        <input type="hidden" name="name" value="{{ $game->name }}">
                                        <input type="hidden" name="price" value="{{ $game->price }}">
                                        <button type="submit" class="btn btn-info w-100">Adicionar ao Carrinho</button>
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
<footer class="footer">
    <div class="container">
        <div class="row justify-content-between">
            <!-- Seção TrustPilot -->
            <div class="col-md-3 mb-2">
                <div class="footer-section">
                    <img src="{{ asset('imagens/logotipo.png') }}" alt="Trustpilot logo" width="400" height="auto">
                    <br>
                    <br>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-google"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <!-- Texto do site -->
            <div class="col-md-3 mb-2 site-description">
                <h5>Sobre o nosso site</h5>
                <br>
                <p>
                A Double A Games é dedicada a oferecer uma vasta seleção de jogos de qualidade a preços acessíveis. 
                        Nosso compromisso é proporcionar uma experiência de compra única, onde todos os gamers encontram o que procuram, 
                        seja para diversão casual ou desafios intensos.
                </p>
            </div>
            <!-- Seção de Contato -->
            <div class="col-md-3 mb-2 contact-info">
                <h5>Contato</h5>
                <br>
                <ul class="list-unstyled">
                    <li><i class="fas fa-map-marker-alt"></i> Portugal, Lisboa, Pontinha</li>
                    <li><i class="fas fa-envelope"></i> DoubleAGames@gmail.com</li>
                    <li><i class="fas fa-phone"></i> +92 3162859445</li>
                    <li><i class="fas fa-fax"></i> +01 335 633 77</li>
                </ul>
            </div>
        </div>
    </div>
</footer>


@endsection






