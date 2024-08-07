@extends('layouts.app') <!-- Estende o layout principal do aplicativo -->

@section('content') <!-- Inicia a seção de conteúdo -->
    @include('include.menu') <!-- Inclui o menu de navegação -->

    <div class="container"> <!-- Inicia o container principal -->
        <h1>O meu carrinho</h1> <!-- Título da página -->

        @if (session('message'))
            <!-- Verifica se há uma mensagem de sessão -->
            <div class="alert alert-warning text-center"> <!-- Exibe a mensagem dentro de um alerta -->
                {{ session('message') }} <!-- Exibe a mensagem de sessão -->
            </div>
        @endif
        <br>
        @if (empty($items))
            <!-- Verifica se o carrinho está vazio -->
            <div class="no-products"> <!-- Div para a mensagem de carrinho vazio -->
                <p>O carrinho está vazio.</p> <!-- Mensagem informando que o carrinho está vazio -->
            </div>
        @else
            <!-- Se o carrinho não estiver vazio -->
            <table class="table table-hover"> <!-- Inicia a tabela -->
                <thead>
                    <tr>
                        <th><i class="fas fa-shopping-cart"></i> Nome</th> <!-- Cabeçalho da coluna Nome com ícone -->
                        <th><i class="fas fa-tag"></i> Preço</th> <!-- Cabeçalho da coluna Preço com ícone -->
                        <th><i class="fas fa-cogs"></i> Ações</th> <!-- Cabeçalho da coluna Ações com ícone -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <!-- Itera sobre os itens do carrinho -->
                        <tr>
                            <td>{{ $item->name }}</td> <!-- Exibe o nome do item -->
                            <td>{{ $item->qty }}</td> <!-- Exibe o preço do item -->
                            <td>
                                <form action="{{ route('cart.remove') }}" method="POST" style="display:inline;">
                                    <!-- Formulário para remover o item do carrinho -->
                                    @csrf <!-- Token de proteção CSRF -->
                                    <input type="hidden" name="item_id" value="{{ $item->getHash() }}">
                                    <!-- Campo oculto com o ID do item -->
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Remover</button>
                                    <!-- Botão para remover o item com ícone -->
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                <!-- Exibe o total do carrinho -->
                <strong>Total: {{ LaraCart::total($formatted = true, $withDiscount = true) }}</strong>
            </div>
            <hr>
            <!-- Formulário de Checkout -->
            <div class="checkout-form"> <!-- Adiciona uma classe para estilização do formulário -->
                <h2>Dados do Cliente</h2> <!-- Título para os dados do cliente -->
                <form action="{{ route('checkout.process') }}" method="POST"> <!-- Formulário para processar o checkout -->
                    @csrf <!-- Token de proteção CSRF -->
                    <div class="form-group">
                        <label for="nome"><i class="fas fa-user"></i> Nome:</label> <!-- Rótulo para o campo Nome com ícone -->
                        <input type="text" name="nome" id="nome" class="form-control" required>
                        <!-- Campo de entrada para o nome do cliente -->
                    </div>
                    <div class="form-group">
                        <label for="morada"><i class="fas fa-map-marker-alt"></i> Morada:</label> <!-- Rótulo para o campo Morada com ícone -->
                        <input type="text" name="morada" id="morada" class="form-control" required>
                        <!-- Campo de entrada para a morada do cliente -->
                    </div>
                    <div class="form-group">
                        <label for="nif"><i class="fas fa-id-card"></i> NIF:</label> <!-- Rótulo para o campo NIF com ícone -->
                        <input type="text" name="nif" id="nif" class="form-control" required>
                        <!-- Campo de entrada para o NIF do cliente -->
                    </div>
                    <hr>
                    <h2>Dados do Cartão</h2> <!-- Título para os dados do cartão -->
                    <div class="form-group">
                        <label for="card_number"><i class="fas fa-credit-card"></i> Número do Cartão:</label> <!-- Rótulo para o campo Número do Cartão com ícone -->
                        <input type="text" name="card_number" id="card_number" class="form-control" required>
                        <!-- Campo de entrada para o número do cartão -->
                    </div>
                    <div class="form-group">
                        <label for="expiry_date"><i class="fas fa-calendar-alt"></i> Data de Validade:</label> <!-- Rótulo para o campo Data de Validade com ícone -->
                        <input type="text" name="expiry_date" id="expiry_date" class="form-control" placeholder="MM/AA"
                            required> <!-- Campo de entrada para a data de validade do cartão -->
                    </div>
                    <div class="form-group">
                        <label for="cvv"><i class="fas fa-lock"></i> CVV:</label> <!-- Rótulo para o campo CVV com ícone -->
                        <input type="text" name="cvv" id="cvv" class="form-control" required>
                        <!-- Campo de entrada para o CVV do cartão -->
                    </div>

                    @foreach ($items as $item)
                        <!-- Itera sobre os itens do carrinho para incluir informações ocultas no formulário -->
                        <input type="hidden" name="games[]" value="{{ $item->id }}"> <!-- Campo oculto com o ID do jogo -->
                        <input type="hidden" name="game_names[]" value="{{ $item->name }}">
                        <!-- Campo oculto com o nome do jogo -->
                        <input type="hidden" name="prices[]" value="{{ $item->qty }}">
                        <!-- Campo oculto com o preço do jogo -->
                    @endforeach

                    <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Finalizar Compra</button>
                    <!-- Botão para finalizar a compra com ícone -->
                </form>
            </div>
        @endif
    </div>
@endsection <!-- Fim da seção de conteúdo -->
