<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Importa o modelo Game, que representa a tabela 'pay_games' no banco de dados.
use App\Models\Game;

// Importa a biblioteca zip, que é uma biblioteca para descompactar ficheiros zip.
use ZanySoft\Zip\Zip;

class GameController extends Controller
{

    //pagina de formulario para inserir jogo
    public function create()
    {
        return view('games.create');
    }

    // utilizar o link http://localhost:8000/games/1 para ver o jogo por id
    public function show($id)
    {
        $game = Game::findOrFail($id);
        return view('games.show', compact('game'));
    }
}
