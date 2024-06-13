@extends('layouts.app') <!-- Estende o layout padrão 'app' -->

@section('content')
    <!-- Início da seção de conteúdo -->

    @include('include.menu') <!-- Inclui o menu -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-12"
                style="height:200px; background-image: url('{{ asset('storage/' . $game->image_path) }}'); background-size: cover; background-position: center;">
                <!-- Imagem de fundo para o cabeçalho -->
            </div>
            <div class="col-12 text-center"> <!-- Centraliza o título -->
                <h1 class="mb-4">{{ $game->name }}</h1>
            </div>
            <div class="col-12 text-center"> <!-- Centraliza a descrição -->
                <p class="lead">Descrição: {{ $game->description }}</p>
            </div>
            <div class="col-12 text-center"> <!-- Centraliza a descrição -->
                <p class="lead">Preço: € {{ $game->price }}</p>
            </div>
            <div class="col-md-6 offset-md-3 text-center"> <!-- Centraliza o botão de download -->
                <a href="{{ asset('storage/' . $game->zip_path) }}" download class="btn btn-primary">Download ZIP</a>
            </div>
        </div>


        <div class="row mt-4">
            <div class="col-md-8 offset-md-2 text-center"> <!-- Centraliza o iframe -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe height="800" width="600" class="embed-responsive-item"
                        src="{{ asset('storage/games/playthegame/' . $game->id . '/index.html') }}"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection <!-- Fim da seção de conteúdo -->
