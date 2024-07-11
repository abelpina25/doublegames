@extends('layouts.app')  

@section('content')
    @include('include.menu') 

    <div class="d-flex flex-column min-vh-100"> <!-- Wrapper principal da página com flexbox -->
        <div class="bg-primary text-white py-5 flex-grow-1"> <!-- Div com fundo azul primário, texto branco e crescimento flexível -->
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-12 text-center">
                        <p class="display-6">Entre em Contacto Connosco</p>
                        <p class="h4 mb-4">Estamos aqui para ajudar. Entre em contacto connosco através dos seguintes canais.</p>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-md-6">
                        <h2>Emails:</h2>
                        <br>
                        <ul class="list-unstyled">
                            <li class="fs-5"><i class="fas fa-envelope"></i> <strong>Email da Empresa: </strong>DoubleAGames@gmail.com</li>
                            <li class="fs-5"><i class="fas fa-envelope"></i> <strong>Email de Suporte 1: </strong>alecsandruduca@gmail.com</li>
                            <li class="fs-5"><i class="fas fa-envelope"></i> <strong>Email de Suporte 2: </strong>abelpina25@gmail.com</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h2>Redes Sociais:</h2>
                        <br>
                        <ul class="list-unstyled fs-5">
                            <li><a href="https://facebook.com/seunome" class="text-white text-decoration-none"><i class="fab fa-facebook"></i> Facebook</a></li>                      
                            <li><a href="https://twitter.com/seunome" class="text-white text-decoration-none"><i class="fab fa-twitter"></i> Twitter</a></li>                   
                            <li><a href="https://instagram.com/seunome" class="text-white text-decoration-none"><i class="fab fa-instagram"></i> Instagram</a></li>
                            <li><a href="https://tiktok.com/@seunome" class="text-white text-decoration-none"><i class="fab fa-tiktok"></i> TikTok</a></li>
                        </ul>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-md-12">
                        <h2>Outras Informações:</h2>
                        <br>
                        <ul class="list-unstyled">
                            <li class="fs-5"><i class="fas fa-map-marker-alt"></i> <strong>Endereço:</strong> Portugal, Lisboa, Pontinha </li>
                            <li class="fs-5"><i class="fas fa-phone"></i> <strong>Telefone:</strong> +92 3162859445</li>
                        </ul>
                    </div>
                </div>
                <br>
                <div class="row mb-5">
                    <div class="col-md-12">
                        <p class="lead">Se tiver alguma dúvida ou precisar de assistência, não hesite em contactar-nos. A nossa equipa de suporte está disponível 24/7 para oferecer ajuda e resolver qualquer problema que possa ter. A sua satisfação é a nossa prioridade.</p>
                        <p class="lead">Acesse as nossas redes sociais para atualizações, dicas e muito mais. Estamos sempre aqui para garantir que tenha a melhor experiência possível.</p>
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

