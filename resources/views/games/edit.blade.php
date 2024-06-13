@extends('layouts.app') <!-- Estende o layout padrão 'app' -->

@section('content')
    <!-- Inicia a seção de conteúdo -->

    @include('include.menu') <!-- Inclui o menu -->

    <div class="container mt-5"> <!-- Container com margem superior -->
        <h1>Editar Jogo</h1> <!-- Título da página -->

        @if (session('success'))
            <!-- Verifica se há uma mensagem de sucesso na sessão -->
            <div class="alert alert-success"> <!-- Exibe a mensagem de sucesso -->
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.games.update', $game->id) }}" method="POST" enctype="multipart/form-data">
            <!-- Formulário para atualizar o jogo -->
            @csrf <!-- Token CSRF para segurança -->
            @method('PUT') <!-- Define o método HTTP como PUT para atualização -->
            <div class="mb-3">
                <label for="name" class="form-label">Nome do Jogo</label> <!-- Rótulo para o nome do jogo -->
                <input type="text" class="form-control" id="name" name="name" value="{{ $game->name }}" required>
                <!-- Campo de entrada para o nome do jogo, pré-preenchido com o valor atual -->
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrição</label> <!-- Rótulo para a descrição -->
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $game->description }}</textarea> <!-- Área de texto para a descrição, pré-preenchida com o valor atual -->
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Preço</label> <!-- Rótulo para o preço -->
                <input type="number" class="form-control" id="price" name="price" step="0.01"
                    value="{{ $game->price }}" required>
                <!-- Campo de entrada para o preço, pré-preenchido com o valor atual -->
            </div>
            <div class="mb-3">
                <label for="zip_file" class="form-label">Ficheiro ZIP do Jogo (deixe em branco para manter o ficheiro
                    existente)</label> <!-- Rótulo para o upload do arquivo ZIP -->
                <input class="form-control" type="file" id="zip_file" name="zip_file">
                <!-- Campo de upload para o arquivo ZIP -->
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Imagem do Jogo (deixe em branco para manter a imagem
                    existente)</label> <!-- Rótulo para o upload da imagem do jogo -->
                <input class="form-control" type="file" id="image" name="image">
                <!-- Campo de upload para a imagem do jogo -->
            </div>
            <button type="submit" class="btn btn-primary">Atualizar Jogo</button> <!-- Botão para enviar o formulário -->
        </form>
    </div>
@endsection <!-- Fim da seção de conteúdo -->
