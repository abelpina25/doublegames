@extends('layouts.app')

@section('content')
    @include('include.menu')

    <!-- Mensagem de Boas-Vindas -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <div class="alert alert-info" role="alert">
                    Bem-vindo à Double A Games! A sua melhor fonte para jogos de qualidade e preços acessíveis.
                </div>
            </div>
        </div>
        <br>
        <!-- Seção de Cards de Jogos -->
        <div class="row mt-4"> <!-- Adicionei mt-4 para espaçamento entre a mensagem e os cards -->
            <div class="col-12">
                <h2 class="text-center mb-4">Jogos Disponíveis</h2>
            </div>
        </div>

        <div class="row">
            <!-- Exemplo de card de jogo (substitua com seus dados dinâmicos) -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="{{ asset('imagens/fundo.jpg') }}" class="card-img-top" alt="Imagem do jogo">
                    <div class="card-body">
                        <h5 class="card-title">Runer</h5>
                        <p class="card-text">Breve descrição do jogo ou detalhes importantes.</p>
                        <a href="{{ route('shop') }}" class="btn btn-info">Ir para Loja</a>
                    </div>
                </div>
            </div>

            <!-- Mais cards de jogos -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="{{ asset('imagens/mario3.jpg') }}" class="card-img-top" alt="Imagem do jogo">
                    <div class="card-body">
                        <h5 class="card-title">Nome do Jogo</h5>
                        <p class="card-text">Breve descrição do jogo ou detalhes importantes.</p>
                        <a href="{{ route('shop') }}" class="btn btn-info">Ir para Loja</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <img src="{{ asset('imagens/5.jpg') }}" class="card-img-top" alt="Imagem do jogo">
                    <div class="card-body">
                        <h5 class="card-title">Nome do Jogo</h5>
                        <p class="card-text">Breve descrição do jogo ou detalhes importantes.</p>
                        <a href="{{ route('shop') }}" class="btn btn-info">Ir para Loja</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Seção de Depoimentos -->
        <div class="row mt-5">
            <div class="col-12">
                <h2 class="text-center mb-4">Depoimentos de Clientes</h2>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">"Excelente variedade de jogos e preços acessíveis. Recomendo!"</p>
                        <p class="card-text"><small class="text-muted">- João Silva</small></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">"Entrega rápida e ótimo atendimento ao cliente. Estou muito satisfeito!"</p>
                        <p class="card-text"><small class="text-muted">- Maria Sousa</small></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">"Já comprei vários jogos aqui e sempre tive uma experiência positiva."</p>
                        <p class="card-text"><small class="text-muted">- Pedro Costa</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Rodapé -->
    <footer class="footer">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Seção TrustPilot -->
                <div class="col-md-3 mb-2">
                    <div class="footer-section">
                        <img src="{{ asset('imagens/logotipo.png') }}" alt="Trustpilot logo" width="400" height="auto">
                        <br>
                        <br>
                        <div class="social-icons">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-google"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Texto do site -->
                <div class="col-md-3 mb-2 site-description">
                    <h5>Sobre o nosso site</h5>
                    <br>
                    <p>
                        Double A Games é a sua melhor fonte para as últimas notícias e ofertas de videojogos.
                        Descubra uma vasta gama de títulos e aproveite as melhores promoções.
                        Estamos dedicados a proporcionar uma experiência de compra incrível.
                    </p>
                </div>
                <!-- Seção de Contato -->
                <div class="col-md-3 mb-2 contact-info">
                    <h5>Contato</h5>
                    <br>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-map-marker-alt"></i> Portugal, Lisboa, Pontinha</li>
                        <li><i class="fas fa-envelope"></i> DoubleAGames@gmail.com</li>
                        <li><i class="fas fa-phone"></i> +92 3162859445</li>
                        <li><i class="fas fa-fax"></i> +01 335 633 77</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
@endsection



