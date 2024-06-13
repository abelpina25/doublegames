<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Game;

class ShopController extends Controller
{
    public function index()
    {
        //listar todos os jogos na loja
        $games = Game::all();
        return view('shop.index', compact('games'));
    }
}
