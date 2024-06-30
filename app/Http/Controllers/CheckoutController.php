<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Importa a biblioteca LaraCart, que é uma biblioteca para carrinho de compras em Laravel.
use LaraCart;

// Importa o modelo PayGames, que representa a tabela 'pay_games' no banco de dados.
use App\Models\PayGames;

class CheckoutController extends Controller
{
    // Método para processar o pedido de compra
    public function process(Request $request)
    {
        // Valida os dados da requisição
        $request->validate([
            'nome' => 'required|string|max:255',
            'morada' => 'required|string|max:255',
            'card_number' => 'required|numeric',
            'expiry_date' => 'required|string',
            'cvv' => 'required|numeric',
            
            'morada' => 'required|string|max:255', // Adiciona validação para o campo 'address'
        ]);

        // Obtém os IDs, nomes e preços dos jogos a serem comprados
        $games = $request->input('games');
        $gameNames = $request->input('game_names');
        $prices = $request->input('prices');
        $name = $request->input('nome'); // Obtém o nome da fatura
        $address = $request->input('morada'); // Obtém o endereço da fatura
        // Itera sobre os jogos a serem comprados
        foreach ($games as $index => $gameId) {
            // Verifica se o jogo já foi pago pelo usuário
            $existingPayment = PayGames::where('user_id', auth()->id())
                ->where('game_id', $gameId)
                ->first();

           // Se o jogo ainda não foi pago, cria um novo registro de pagamento
            if (!$existingPayment) {
                PayGames::create([
                    'user_id' => auth()->id(),
                    'game_id' => $games[$index],
                    'game_name' => $gameNames[$index],
                    'name' => $name,
                    'address' => $address,
                    'price' => $prices[$index],
                ]);
            }
        }

        // Limpa o carrinho de compras
        LaraCart::destroyCart();

        // Por enquanto, redireciona de volta com uma mensagem de sucesso
      return redirect()->route('paygames.index')->with('message', 'Compra realizada com sucesso!');
    }
}
