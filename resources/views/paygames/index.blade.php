@extends('layouts.app')

@section('content')
    <!-- Inclui o menu -->
    @include('include.menu')

    <div class="container py-5">
        <h1 class="text-center mb-4"> Jogos Comprados</h1>
        <br>
        
        <!-- Verifica se existe uma mensagem de sessão e exibe -->
         @if (session('message')) 
            <div class="alert alert-success text-center"> 
                {{ session('message') }} 
            </div> 
         @endif 

        <!-- Verifica se $payGames está vazio e exibe uma mensagem -->
        @if ($payGames->isEmpty())
            <div class="alert alert-info text-center">
                Nenhum jogo foi comprado
            </div>
        @else
            <!--  Exibe os jogos comprados -->
            <div class="row row-cols-1 row-cols-md-2 g-4">
                @foreach ($payGames as $payGame)
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <!-- Link para a página do jogo -->
                                    <a href="{{ route('games.show', $payGame->game_id) }}" class="text-decoration-none">
                                        {{ $payGame->game_name }}
                                    </a>
                                </h5>
                                <p class="card-text"><strong>Preço:</strong> € {{ number_format($payGame->price, 2, ',', '.') }}</p>
                                <p class="card-text"><strong>Data da Compra:</strong> {{ $payGame->created_at->format('d/m/Y') }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection


