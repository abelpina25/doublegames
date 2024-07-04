<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Importa a biblioteca LaraCart, que é uma biblioteca para carrinho de compras em Laravel.
use LaraCart;

class CartController extends Controller
{
    // Método para exibir o carrinho de compras
    public function index()
    {
        // Obtém os itens presentes no carrinho
        $items = LaraCart::getItems();
        // Retorna a view 'cart.index' passando os itens do carrinho
        return view('cart.index', compact('items'));
    }

    // Método para adicionar um item ao carrinho
    public function add(Request $request)
    {
        // Obtém os itens presentes no carrinho
        $items = LaraCart::getItems();

        // Verifica se o jogo já está no carrinho
        foreach ($items as $item) {
            if ($item->id == $request->id) {
                return redirect()->route('cart.index')->with('message', 'jogo já se encontra no carrinho.');
            }
        }

        // Adiciona o jogo ao carrinho se ainda não estiver lá
        LaraCart::add(
            $request->id,
            $request->name,
            $request->price,

            [
                'id' => $request->id,
                'name' => $request->name,
                'price' => $request->price
            ]
        );

        // Redireciona de volta para a página de compras com uma mensagem
        return redirect()->route('shop')->with('message', 'jogo adicionado ao carrinho.');;
    }

    // Método para remover um item do carrinho
    public function remove(Request $request)
    {
        // Remove o item do carrinho com base no ID do item
        LaraCart::removeItem($request->item_id);

        // Redireciona de volta para a página do carrinho
        return redirect()->route('cart.index');
    }
}