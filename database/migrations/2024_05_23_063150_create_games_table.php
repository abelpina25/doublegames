<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id(); // Define uma coluna de chave primária autoincremental.

            $table->string('name'); // Define uma coluna para o nome do jogo.

            $table->text('description'); // Define uma coluna para a descrição do jogo (texto longo).

            $table->decimal('price', 8, 2); // Define uma coluna para o preço do jogo, com 8 dígitos no total e 2 dígitos após a vírgula.

            $table->string('zip_path')->nullable(); // Define uma coluna para o caminho do arquivo ZIP do jogo, que pode ser nulo.

            $table->string('image_path')->nullable(); // Define uma coluna para o caminho da imagem do jogo, que pode ser nulo.

            $table->timestamps(); // Define as colunas de timestamps (created_at e updated_at) para registrar as timestamps de criação e atualização de cada registro.

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
