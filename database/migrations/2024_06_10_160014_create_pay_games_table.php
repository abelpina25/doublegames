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
        Schema::create('pay_games', function (Blueprint $table) {
            // Define a chave primária
            $table->id();

            // Define a chave estrangeira para o ID do usuário
            $table->unsignedBigInteger('user_id');

            // Define a chave estrangeira para o ID do jogo
            $table->unsignedBigInteger('game_id');

            // Define o nome do jogo
            $table->string('game_name');

            // Define o nome da fatura
            $table->string('name');

            // Define o endereço do utilizador da fatura
            $table->string('address');

            // Define o NIF (Número de Identificação Fiscal) do utilizador, que é opcional (nullable)
            $table->string('nif')->nullable();

            // Define o preço do jogo
            $table->decimal('price', 8, 2);

            // Define as colunas de timestamps (created_at e updated_at)
            $table->timestamps();

            // Define as restrições de chave estrangeira
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('game_id')->references('id')->on('games')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pay_games');
    }
};
