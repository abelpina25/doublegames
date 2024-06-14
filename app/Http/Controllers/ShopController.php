<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Importa o modelo Game, que representa a tabela 'games' no banco de dados.
use \App\Models\Game;

// Importa o modelo PayGames, que representa a tabela 'pay_games' no banco de dados.
use \App\Models\PayGames;

class ShopController extends Controller
{
    public function index()
    {
        // Obtém os IDs dos jogos comprados pelo utilizador autenticado.
        $purchasedGameIds = PayGames::where('user_id', auth()->id())
            ->pluck('game_id')
            ->toArray();

        // Obtém todos os jogos que não estão na lista de jogos comprados pelo utilizador.
        $games = Game::whereNotIn('id', $purchasedGameIds)->get();

        // Retorna a view 'shop.index' com a variável 'games' contendo os jogos não comprados.
        return view('shop.index', compact('games'));
    }
}
