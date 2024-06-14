<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PayGames extends Model
{
    // Campos da base de dados que podem ser preenchidos em massa
    protected $fillable = [
        'user_id',
        'game_id',
        'game_name',
        'name',
        'address',
        'nif',
        'price'
    ];

    // Relação 1 para muitos - Verifica se o jogo foi comprado pelo utilizador
    public function user()
    {
        // Define uma relação de pertença (belongsTo) entre a tabela 'pay_games' e 'users', onde 'user_id' é a chave estrangeira na tabela 'pay_games'.
        return $this->belongsTo(User::class);
    }
}
