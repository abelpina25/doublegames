@extends('layouts.app') <!-- Estende o layout padrão 'app' -->

@section('content')
    <!-- Inclui o menu -->
    @include('include.menu')

    <!-- Conteúdo da página -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <!-- Card de formulário de contato -->
                <div class="card">
                    <div class="card-header">Entra em contato!</div>
                    <div class="card-body">
                        <!-- Formulário de contato -->
                        <form method="POST" action="">
                            @csrf <!-- Token CSRF -->
                            <!-- Campo para o nome -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <!-- Campo para o email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <!-- Campo para a mensagem -->
                            <div class="mb-3">
                                <label for="message" class="form-label">Mensagem</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>
                            <!-- Botão de envio do formulário -->
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
