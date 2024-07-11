@extends('layouts.app')  {{-- Extendendo o layout principal --}}

@section('content')
    @include('include.menu')  {{-- Incluindo o menu --}}

    <div class="container mt-5">
        <!-- Mensagem de destaque -->
        <div class="alert alert-info text-center mb-0 mt-3" role="alert">
            <h1 class="alert-heading">Compre os melhores jogos aos melhores preços!</h1>
            <p class="mb-0">Não perca nossas ofertas imperdíveis.</p>
        </div>

        <!-- Espaço para acomodar a mensagem sem sobrepor o conteúdo -->
        <div style="height: 50px;"></div>

        <!-- Seção de Destaque -->
        <div class="row mt-4">
            <div class="col-12">
                <h2 class="text-center mb-4">Destaque da Semana</h2>
            </div>
            <div class="col-md-12">
                <div class="card featured-game-card">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('imagens/5.jpg') }}" class="card-img" alt="Imagem do jogo em destaque">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Jogo em Destaque</h5>
                                <br>
                                <p class="card-text">Descrição do jogo em destaque. Aproveite as promoções e jogue agora!</p>
                                <br>
                                <a href="{{ route('shop') }}" class="btn btn-cta">Comprar Agora</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <!-- Seção de Cards de Jogos -->
        <div class="row mt-4">
            <div class="col-12">
                <h2 class="text-center mb-4">Jogos Disponíveis</h2>
            </div>
        </div>

        <div class="row">
            <!-- Exemplo de card de jogo  -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card game-card">
                    <img src="{{ asset('imagens/fundo.jpg') }}" class="card-img-top" alt="Imagem do jogo">
                    <div class="card-body text-center">
                        <h5 class="card-title">Runer</h5>
                        <p class="card-text">Breve descrição do jogo ou detalhes importantes.</p>
                        <a href="{{ route('shop') }}" class="btn btn-cta">Comprar Agora</a>
                    </div>
                </div>
            </div>

            <!-- Mais cards de jogos -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card game-card">
                    <img src="{{ asset('imagens/mario3.jpg') }}" class="card-img-top" alt="Imagem do jogo">
                    <div class="card-body text-center">
                        <h5 class="card-title">Nome do Jogo</h5>
                        <p class="card-text">Breve descrição do jogo ou detalhes importantes.</p>
                        <a href="{{ route('shop') }}" class="btn btn-cta">Comprar Agora</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card game-card">
                    <img src="{{ asset('imagens/5.jpg') }}" class="card-img-top" alt="Imagem do jogo">
                    <div class="card-body text-center">
                        <h5 class="card-title">Nome do Jogo</h5>
                        <p class="card-text">Breve descrição do jogo ou detalhes importantes.</p>
                        <a href="{{ route('shop') }}" class="btn btn-cta">Comprar Agora</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <!-- Seção de Benefícios -->
        <div class="row mt-4">
            <div class="col-12">
                <h2 class="text-center mb-4">Por Que Comprar Conosco?</h2>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-check-circle text-success fa-3x mb-3"></i>
                <h5>Qualidade Garantida</h5>
                <p>Todos os nossos jogos são cuidadosamente selecionados e garantidos.</p>
            </div>
            <div class="col-md-4 text-center ">
                <i class="fas fa-headset fa-3x mb-3"></i>
                <h5>Suporte 24/7</h5>
                <p>Nossa equipe de suporte está disponível a qualquer hora para ajudar você.</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-tags text-primary fa-3x mb-3"></i>
                <h5>Melhores Preços</h5>
                <p>Oferecemos jogos com preços competitivos e promoções exclusivas.</p>
            </div>
        </div>
        <br>
        <hr>
        <!-- Seção de Depoimentos -->
        <div class="row mt-5">
            <div class="col-12">
                <h2 class="text-center mb-4">Depoimentos de Clientes</h2>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card testimonial-card">
                    <div class="card-body">
                        <p class="card-text">"Excelente variedade de jogos e preços acessíveis. Recomendo!"</p>
                        <p class="card-text"><small class="text-muted">- João Silva</small></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card testimonial-card">
                    <div class="card-body">
                        <p class="card-text">"Entrega rápida e ótimo atendimento ao cliente. Estou muito satisfeito!"</p>
                        <p class="card-text"><small class="text-muted">- Maria Sousa</small></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card testimonial-card">
                    <div class="card-body">
                        <p class="card-text">"Já comprei vários jogos aqui e sempre tive uma experiência positiva."</p>
                        <p class="card-text"><small class="text-muted">- Pedro Costa</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Rodapé -->
    <footer class="footer mt-auto bg-dark text-white py-3">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Logo e Redes Sociais -->
                <div class="col-md-3 mb-2">
                    <div class="footer-section">
                        <img src="{{ asset('imagens/logotipo.png') }}" alt="Trustpilot logo" width="150" height="auto">
                        <div class="social-icons">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-tiktok"></i></a>
                        </div>
                    </div>     
                </div>
                <!-- Links Importantes -->
                <div class="col-md-3 mb-2">
                    <div class="footer-section">
                        <h5>Links Importantes</h5>
                        <ul class="list-unstyled important-links">
                            <li><a href="{{ route('home') }}">Inicio</a></li>
                            <li><a href="{{ route('about') }}">Sobre Nós</a></li>
                            <li><a href="{{ route('contact') }}">Contacte-nos</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Texto do site -->
                <div class="col-md-3 mb-2 site-description">
                    <h5>Sobre</h5>
                    <p>
                        A Double A Games é dedicada a oferecer uma vasta seleção de jogos de qualidade a preços acessíveis. 
                        Nosso compromisso é proporcionar uma experiência de compra única, onde todos os gamers encontram o que procuram, 
                        seja para diversão casual ou desafios intensos.
                    </p>
                </div>
                <!-- Seção de Contato -->
                <div class="col-md-3 mb-2 contact-info">
                    <h5>Contato</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-map-marker-alt"></i> Portugal, Lisboa, Pontinha</li>
                        <li><i class="fas fa-envelope"></i> DoubleAGames@gmail.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
@endsection


