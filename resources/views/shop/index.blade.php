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
                        <div class="card h-100">
                            <img src="{{ asset('storage/' . $game->image_path) }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{ $game->name }}</h5>
                                <p class="card-text">{{ $game->description }}</p>
                                <p class="card-text">€ {{ $game->price }}</p>
                                @auth
                                    <form action="{{ route('cart.add') }}" method="POST" class="d-inline">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $game->id }}">
                                        <input type="hidden" name="name" value="{{ $game->name }}">
                                        <input type="hidden" name="price" value="{{ $game->price }}">

                                        <button type="submit" class="btn btn-danger">Adicionar ao Carrinho</button>
                                    </form>
                                @endauth
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>Neste momento não existem jogos na loja.</p>
        @endif
    </div>
@endsection
