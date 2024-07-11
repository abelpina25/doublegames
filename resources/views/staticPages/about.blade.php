@extends('layouts.app')  

@section('content')
    @include('include.menu')  

    <div class="d-flex flex-column min-vh-100"> <!-- Wrapper principal da página com flexbox -->
        <div class="bg-primary text-white py-5 flex-grow-1"> <!-- Div com fundo azul primário, texto branco e crescimento flexível -->
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-12 text-center">
                        <p class="display-6">Bem-vindo à nossa comunidade!</p>
                        <br>
                        <p class="h5 mb-4">Estamos comprometidos em fornecer a melhor experiência de compra de jogos online.</p>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-md-6 text-center">
                        <i class="fas fa-bullseye fa-3x mb-3"></i>
                        <h2>A Nossa Missão</h2>
                        <p>A nossa missão é proporcionar a melhor experiência de compra de jogos online para os nossos utilizadores.
                            Pretendemos oferecer uma ampla variedade de jogos de alta qualidade, garantindo facilidade de utilização
                            e segurança em todas as transações.</p>
                    </div>
                    <div class="col-md-6 text-center">
                    <i class="fas fa-eye fa-3x mb-3"></i>
                        <h2>A Nossa Visão</h2>
                        <p>Ser a plataforma líder mundial em venda de jogos digitais, reconhecida pela nossa inovação, integridade e excelência no serviço ao cliente.</p>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-md-6 text-center">
                        <i class="fas fa-history fa-3x mb-3"></i>
                        <h2>A Nossa História</h2>
                        <p>A nossa comunidade de venda de jogos foi fundada em 2024 por um grupo de entusiastas de
                            jogos. Desde então, crescemos e nos tornamos uma das principais plataformas para compra e venda de jogos
                            digitais em todo o mundo.</p>
                    </div>
                    <div class="col-md-6 text-center">
                        <i class="fas fa-users fa-3x mb-3"></i>
                        <h2>A Nossa Equipe</h2>
                        <p>Conheça as pessoas por trás do nosso sucesso. Nossa equipe dedicada trabalha arduamente para oferecer a melhor experiência possível para você.</p>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-md-12">
                        <h2>Valores</h2>
                        <ul>
                            <li><strong>Integridade:</strong> As nossas transações são seguras e transparentes.</li>
                            <li><strong>Diversidade:</strong> Oferecemos uma ampla variedade de jogos para satisfazer todos os gostos.</li>
                            <li><strong>Inovação:</strong> Estamos sempre à procura de maneiras de melhorar e oferecer novas experiências aos nossos utilizadores.</li>
                            <li><strong>Comunidade:</strong> Valorizamos a comunidade de jogadores e estamos comprometidos em construir um ambiente inclusivo e acolhedor.</li>
                        </ul>
                    </div>
                </div>
                <br>
                <div class="row mb-5">
                    <div class="col-md-12 text-center">
                        <h2>Entre em Contato</h2>
                        <p>Gostaríamos de ouvir de você! Sinta-se à vontade para nos contatar através das nossas redes sociais ou por email.</p>
                        <a href="{{ route('contact') }}" class="btn btn-light">Contato</a>
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
            <!-- Texto do site -->
            <div class="col-md-3 mb-2 site-description">
                <h5>Sobre</h5>
                <p>
                    A Double A Games é dedicada a oferecer uma vasta seleção de jogos de qualidade a preços acessíveis. 
                    Nosso compromisso é proporcionar uma experiência de compra única, onde todos os gamers encontram o que procuram, 
                    seja para diversão casual ou desafios intensos.
                </p>
            </div>
            <!-- Localização -->
            <div class="col-md-3 mb-2">
                <div class="footer-section">
                    <h5>Localização</h5>
                    <ul class="list-unstyled location-info">
                        <li><i class="fas fa-map-marker-alt"></i> Portugal, Lisboa, Pontinha</li>
                        <li><i class="fas fa-map-marker-alt"></i> Rua Augusta</li>
                    </ul>
                </div>
            </div>
            <!-- Seção de Contato -->
            <div class="col-md-3 mb-2 contact-info">
                <h5>Contato</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-envelope"></i> <strong>E-mail:</strong> DoubleAGames@gmail.com</li>
                    <li class="fs-5"><i class="fas fa-phone"></i> <strong>Telefone:</strong> +92 3162859445</li>
                    <li><a href="{{ route('contact') }}"><strong>Para mais:</strong> Contacte-nos</a></li>
                </ul>
            </div>
        </div>
        <!-- Copyright -->
        <div class="row">
            <div class="col-12 text-center mt-3">
                <p>&copy; 2024 Alecsandru & Abel | Double A Games. Todos os direitos reservados.</p>
            </div>
        </div>
    </div>
</footer>

@endsection


