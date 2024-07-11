@extends('layouts.app') <!-- Estende o layout padrão 'app' -->

@section('content')
    <!-- Início da seção de conteúdo -->

    @include('include.menu') <!-- Inclui o menu -->

    <div class="container mt-5">
        <div class="row mb-4 position-relative">
            <div class="col-12"
                style="height: 400px; background-image: url('{{ asset('storage/' . $game->image_path) }}'); background-size: cover; background-position: center; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                <!-- Imagem de fundo para o cabeçalho -->
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12 text-center">
                <div class="embed-responsive embed-responsive-16by9 shadow rounded">
                    <iframe height="800" width="1000" class="embed-responsive-item rounded" src="{{ asset('storage/games/playthegame/' . $game->id . '/index.html') }}"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection <!-- Fim da seção de conteúdo -->






