@extends('layouts.app') <!-- Estende o layout padrão 'app' -->

@section('content') <!-- Inicia a seção de conteúdo -->

    @include('include.menu') <!-- Inclui o menu -->

    <div class="container mt-5"> <!-- Container com margem superior -->

        @if (session('success'))
            <!-- Verifica se há uma mensagem de sucesso na sessão -->
            <div class="alert alert-success"> <!-- Exibe a mensagem de sucesso -->
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <!-- Verifica se há erros de validação -->
            <div class="alert alert-danger"> <!-- Exibe os erros -->
                <ul>
                    @foreach ($errors->all() as $error)
                        <!-- Itera sobre os erros -->
                        <li>{{ $error }}</li> <!-- Exibe cada erro em uma lista -->
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-container card shadow">
            <div class="card-header text-center bg-primary text-white">
                <h2>Adicionar Novo Jogo</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.games.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf <!-- Token CSRF para segurança -->
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">
                            <i class="fas fa-gamepad"></i> Nome do Jogo
                        </label> <!-- Rótulo para o nome do jogo -->
                        <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome do jogo" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="description" class="form-label">
                            <i class="fas fa-align-left"></i> Descrição
                        </label> <!-- Rótulo para a descrição -->
                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Descreva o jogo" required></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="price" class="form-label">
                            <i class="fas fa-dollar-sign"></i> Preço
                        </label> <!-- Rótulo para o preço -->
                        <input type="number" class="form-control" id="price" name="price" step="0.01" placeholder="Digite o preço" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="zip_file" class="form-label">
                            <i class="fas fa-file-archive"></i> Upload de ZIP
                        </label> <!-- Rótulo para o upload do arquivo ZIP -->
                        <input class="form-control" type="file" id="zip_file" name="zip_file" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="image" class="form-label">
                            <i class="fas fa-image"></i> Imagem do jogo
                        </label> <!-- Rótulo para o upload da imagem do jogo -->
                        <input class="form-control" type="file" id="image" name="image" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        <i class="fas fa-upload"></i> Upload Game
                    </button> <!-- Botão para enviar o formulário -->
                </form>
            </div>
        </div>
    </div>

@endsection <!-- Fim da seção de conteúdo -->

