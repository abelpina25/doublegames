@extends('layouts.app') <!-- Estende o layout padrão 'app' -->

@section('content') <!-- Inicia a seção de conteúdo -->
    @include('include.menu') <!-- Inclui o menu na página  -->

    <div class="container py-5">
        <h1 class="text-center mb-4">Admin - Gerir Jogos</h1> <!-- Título da página -->

        @if (session('success'))
            <!-- Verifica se há uma mensagem de sucesso na sessão -->
            <div class="alert alert-success text-center"> <!-- Exibe a mensagem de sucesso -->
                {{ session('success') }}
            </div>
        @endif

        @if (count($games) > 0)
            <!-- Verifica se existem jogos para exibir -->
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th> <!-- Cabeçalho da coluna ID -->
                        <th scope="col">Imagem</th> <!-- Cabeçalho da coluna Imagem -->
                        <th scope="col">Nome</th> <!-- Cabeçalho da coluna Nome -->
                        <th scope="col">Preço</th> <!-- Cabeçalho da coluna Preço -->
                        <th scope="col">Ações</th> <!-- Cabeçalho da coluna Ações -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($games as $game)
                        <!-- Loop pelos jogos -->
                        <tr>
                            <th scope="row">{{ $game->id }}</th> <!-- ID do jogo -->
                            <td><img src="{{ asset('storage/' . $game->image_path) }}" alt="{{ $game->name }}" class="img-thumbnail" width="100"></td> <!-- Imagem do jogo -->
                            <td>{{ $game->name }}</td> <!-- Nome do jogo -->
                            <td>{{ $game->price }}</td> <!-- Preço do jogo -->

                            <td>
                                <!-- Botão para ver detalhes do jogo -->
                                <a href="{{ route('games.show', $game->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-solid fa-eye fa-2x"></i>
                                    Ver
                                </a>
                                <!-- Botão para editar o jogo -->
                                <a href="{{ route('admin.games.edit', $game->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-pencil-square fa-2x" style="color: white;"></i>
                                    Editar
                                </a>
                                <!-- Formulário para excluir o jogo -->
                                <form action="{{ route('admin.games.destroy', $game->id) }}" method="POST" class="d-inline">
                                    @csrf <!-- Token CSRF -->
                                    @method('DELETE') <!-- Método de requisição -->
                                    <!-- Botão para excluir o jogo -->
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash fa-2x"></i>
                                        Excluir
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <!-- Exibe mensagem se não houver jogos disponíveis -->
            <h2 class="text-center">Não existem jogos disponíveis</h2>
        @endif
    </div>
@endsection

