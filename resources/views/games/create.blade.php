@extends('layouts.app') <!-- Estende o layout padrão 'app' -->

@section('content') <!-- Inicia a seção de conteúdo -->

    @include('include.menu') <!-- Inclui o menu -->

    <div class="container mt-5"> <!-- Container com margem superior -->
        <h1>Adicionar Novo Jogo</h1> <!-- Título da página -->

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

        <form action="{{ route('admin.games.store') }}" method="POST" enctype="multipart/form-data">
            <!-- Formulário para adicionar um novo jogo -->
            @csrf <!-- Token CSRF para segurança -->
            <div class="mb-3">
                <label for="name" class="form-label">Nome do Jogo</label> <!-- Rótulo para o nome do jogo -->
                <input type="text" class="form-control" id="name" name="name" required>
                <!-- Campo de entrada para o nome do jogo -->
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrição</label> <!-- Rótulo para a descrição -->
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea> <!-- Área de texto para a descrição -->
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Preço</label> <!-- Rótulo para o preço -->
                <input type="number" class="form-control" id="price" name="price" step="0.01" required>
                <!-- Campo de entrada para o preço -->
            </div>
            <div class="mb-3">
                <label for="zip_file" class="form-label">Upload de ZIP</label> <!-- Rótulo para o upload do arquivo ZIP -->
                <input class="form-control" type="file" id="zip_file" name="zip_file" required>
                <!-- Campo de upload para o arquivo ZIP -->
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Imagem do jogo</label>
                <!-- Rótulo para o upload da imagem do jogo -->
                <input class="form-control" type="file" id="image" name="image" required>
                <!-- Campo de upload para a imagem do jogo -->
            </div>
            <button type="submit" class="btn btn-primary">Upload Game</button> <!-- Botão para enviar o formulário -->
        </form>
    </div>
@endsection <!-- Fim da seção de conteúdo -->
