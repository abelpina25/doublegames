@extends('layouts.app') <!-- Estende o layout padrão 'app' -->

@section('content')
    <!-- Inclui o menu -->
    @include('include.menu')

    <!-- Conteúdo da página -->
    <div class="container py-5">
        <!-- Título da página -->
        <h1 class="text-center mb-4">Loja</h1>
        {{-- Verifica se existem jogos na base de dados --}}
        @if (count($games) > 0)
            <!-- Grid de cards para exibir os jogos -->
            <div class="row row-cols-1 row-cols-md-4 g-4">
                @foreach ($games as $game)
                    <div class="col">
                        <!-- Card de jogo -->
                        <div class="card h-100">
                            <!-- Imagem do jogo -->
                            <img src="{{ asset('storage/' . $game->image_path) }}" class="card-img-top">
                            <div class="card-body">
                                <!-- Nome do jogo -->
                                <h5 class="card-title">{{ $game->name }}</h5>
                                <!-- Descrição do jogo -->
                                <p class="card-text">{{ $game->description }}</p>
                                <!-- Preço do jogo -->
                                <p class="card-text">€ {{ $game->price }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- Caso não existam jogos, mostrar este texto --}}
        @else
            <p>Neste momento não existem jogos na loja.</p>
        @endif
    </div>
@endsection
