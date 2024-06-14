@extends('layouts.app')

@section('content')
    @include('include.menu') <!-- Inclui o menu -->
    <div class="container">
        <h1>Lista de jogos comprados</h1>
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        @if ($payGames->isEmpty())
            <p>Nenhum jogo foi comprado</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome do jogo</th>
                        <th>Preço</th>
                        <th>Data da compra</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($payGames as $payGame)
                        <tr>
                            <td><a href="{{ route('games.show', $payGame->game_id) }}">{{ $payGame->game_name }}</a></td>
                            <td>{{ $payGame->price }}</td>
                            <td>{{ $payGame->created_at->format('d/m/Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
