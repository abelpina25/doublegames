@extends('layouts.app')

@section('content')
    @include('include.menu')
    <div class="container py-5"> <!-- Container Bootstrap para manter o conteúdo centralizado e responsivo -->
        <h1 class="text-center mb-4">Sobre Nós</h1> <!-- Título centralizado -->

        <div class="row"> <!-- Inicia uma nova linha -->
            <div class="col-md-6"> <!-- Define uma coluna com metade da largura em dispositivos de médio porte e acima -->
                <h2>A Nossa Missão</h2> <!-- Título da seção -->
                <p>A nossa missão é proporcionar a melhor experiência de compra de jogos online para os nossos utilizadores.
                    Pretendemos oferecer uma ampla variedade de jogos de alta qualidade, garantindo facilidade de utilização
                    e segurança em todas as transações.</p> <!-- Descrição da missão -->
            </div>
            <div class="col-md-6"> <!-- Define uma coluna com metade da largura em dispositivos de médio porte e acima -->
                <h2>A Nossa História</h2> <!-- Título da seção -->
                <p>A nossa comunidade de venda de jogos foi fundada em 2024 por um grupo de entusiastas de
                    jogos. Desde então, cresceu e tornou-se uma das principais plataformas para compra e venda de jogos
                    digitais em todo o mundo.</p> <!-- Descrição da história -->
            </div>
        </div>

        <div class="row mt-5"> <!-- Inicia uma nova linha com um espaço superior de 5 unidades -->
            <div class="col-md-6"> <!-- Define uma coluna com metade da largura em dispositivos de médio porte e acima -->
                <h2>Valores</h2> <!-- Título da seção -->
                <ul>
                    <li><strong>Integridade:</strong> As nossas transações são seguras e transparentes.</li>
                    <!-- Valor: Integridade -->
                    <li><strong>Diversidade:</strong> Oferecemos uma ampla variedade de jogos para satisfazer todos os
                        gostos.</li> <!-- Valor: Diversidade -->
                    <li><strong>Inovação:</strong> Estamos sempre à procura de maneiras de melhorar e oferecer novas
                        experiências aos nossos utilizadores.</li> <!-- Valor: Inovação -->
                    <li><strong>Comunidade:</strong> Valorizamos a comunidade de jogadores e estamos comprometidos em
                        construir um ambiente inclusivo e acolhedor.</li> <!-- Valor: Comunidade -->
                </ul>
            </div>
            <div class="col-md-6"> <!-- Define uma coluna com metade da largura em dispositivos de médio porte e acima -->
                <h2>Equipa</h2> <!-- Título da seção -->
                <p>A nossa equipa é composta por apaixonados por jogos, desenvolvedores, designers e profissionais de apoio
                    ao cliente dedicados a oferecer a melhor experiência possível para os nossos utilizadores.</p>
                <!-- Descrição da equipa -->
            </div>
        </div>
    </div>
@endsection
