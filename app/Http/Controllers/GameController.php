<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
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
