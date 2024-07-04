@extends('layouts.app') <!-- Estende o layout padrão 'app' -->

@section('content')
    @include('include.menu') <!-- Inclui o menu -->

    <div class="container mt-5 d-flex justify-content-center"> <!-- Container com margem superior -->
        <div class="form-container card shadow col-md-8">
            <div class="card-header text-center bg-warning text-white"> <!-- Fundo amarelo e texto branco -->
                <h2>Editar Jogo</h2> <!-- Título da página -->
            </div>
            <div class="card-body">
                @if (session('success'))
                    <!-- Verifica se há uma mensagem de sucesso na sessão -->
                    <div class="alert alert-success"> <!-- Exibe a mensagem de sucesso -->
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('admin.games.update', $game->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf <!-- Token CSRF para segurança -->
                    @method('PUT') <!-- Define o método HTTP como PUT para atualização -->
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">
                            <i class="fas fa-gamepad"></i> Nome do Jogo
                        </label> <!-- Rótulo para o nome do jogo -->
                        <input type="text" class="form-control" id="name" name="name" value="{{ $game->name }}" placeholder="Digite o nome do jogo" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="description" class="form-label">
                            <i class="fas fa-align-left "></i> Descrição
                        </label> <!-- Rótulo para a descrição -->
                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Descreva o jogo" required>{{ $game->description }}</textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="price" class="form-label">
                            <i class="fas fa-dollar-sign"></i> Preço
                        </label> <!-- Rótulo para o preço -->
                        <input type="number" class="form-control" id="price" name="price" step="0.01" value="{{ $game->price }}" placeholder="Digite o preço" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="zip_file" class="form-label">
                            <i class="fas fa-file-archive"></i> Ficheiro ZIP do Jogo (deixe em branco para manter o ficheiro existente)
                        </label> <!-- Rótulo para o upload do arquivo ZIP -->
                        <input class="form-control" type="file" id="zip_file" name="zip_file">
                    </div>
                    <div class="form-group mb-3">
                        <label for="image" class="form-label">
                            <i class="fas fa-image"></i> Imagem do Jogo (deixe em branco para manter a imagem existente)
                        </label> <!-- Rótulo para o upload da imagem do jogo -->
                        <input class="form-control" type="file" id="image" name="image">
                    </div>
                    <button type="submit" class="btn btn-warning btn-block text-white">
                        <i class="fas fa-upload fa-lg mr-2"></i> <!-- Ícone com espaço à direita -->
                        Atualizar Jogo
                    </button> <!-- Botão para enviar o formulário -->
                </form>
            </div>
        </div>
    </div>
@endsection <!-- Fim da seção de conteúdo -->


