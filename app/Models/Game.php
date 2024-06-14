<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    // Campos da base de dados que podem ser preenchidos em massa
    protected $fillable = [
        'name',
        'description',
        'price',
        'zip_path',
        'image_path',
    ];
}
