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
                            <div class="card-body">
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
            <div class="row">
                <!-- Seção TrustPilot -->
                <div class="col-md-4 mb-4">
                    <div>
                        <img src="{{ asset('imagens/logotipo.png') }}" alt="Trustpilot logo" width="150" height="auto">
                        <br>
                        <br>
                        <p>Contacte-nos por email: seuemail@example.com</p>
                    </div>
                </div>
                <!-- Links do rodapé -->
                <div class="col-md-4 mb-4 footer-links">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">As condições de venda</a></li>
                        <li><a href="#">Política de privacidade</a></li>
                        <li><a href="#">Programa de Afiliacão</a></li>
                        <li><a href="#">Contacta-nos</a></li>
                        <li><a href="#">Usa o teu gift card</a></li>
                        <li><a href="#">Descobre as últimas notícias sobre videojogos</a></li>
                    </ul>
                </div>
                <!-- Ícones sociais -->
                <div class="col-md-4 mb-4 text-center">
                    <h5>Siga-nos</h5>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-tiktok"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

@endsection




