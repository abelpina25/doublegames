<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Importa o modelo PayGames, que representa a tabela 'pay_games' no banco de dados.
use App\Models\PayGames;

class PayGamesController extends Controller
{
    // Método para exibir os jogos pagos do usuário autenticado
    public function index()
    {
        // Obtém os jogos pagos do utilizador autenticado
        $payGames = auth()->user()->payGames;
        
        // Retorna a view 'paygames.index' passando os jogos pagos
        return view('paygames.index', compact('payGames'));
    }
}
