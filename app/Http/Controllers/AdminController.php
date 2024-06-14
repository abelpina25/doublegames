<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Game; // Importa o modelo Game
use ZanySoft\Zip\Zip; // Importa a classe Zip para descompactar arquivos zip

class AdminController extends Controller
{
    // Lista todos os jogos no admin
    public function index()
    {
        // Obtém todos os jogos do banco de dados
        $games = Game::all();
        // Retorna a view 'admin.games.index' passando os jogos como parâmetro
        return view('admin.games.index', compact('games'));
    }

    // Página de formulário para inserir jogo
    public function create()
    {
        // Retorna a view 'games.create' para criar um novo jogo
        return view('games.create');
    }

    // Rota POST para inserir jogo
    public function store(Request $request)
    {
        // Valida os dados do formulário
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'zip_file' => 'required|file|mimetypes:application/zip',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        // Cria um novo jogo com os dados fornecidos
        $game = Game::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        $gameId = $game->id;
        $extensionImage = $request->file('image')->getClientOriginalExtension();

        // Gera nomes de arquivo únicos para o jogo e a imagem
        $zipFileName =  $gameId . '.zip';
        $imageFileName =  $gameId . '.' . $extensionImage;

        // Manipula os uploads de arquivo: salva o arquivo zip e a imagem no armazenamento
        $zipPath = $request->file('zip_file')->storeAs('public/games', $zipFileName);
        $imagePath = $request->file('image')->storeAs('public/games', $imageFileName);

        // Ajusta os caminhos para remover o prefixo 'public/'
        $zipPath = str_replace('public/', '', $zipPath);
        $imagePath = str_replace('public/', '', $imagePath);

        // Atualiza o caminho do arquivo zip e imagem do jogo no banco de dados
        $game = Game::findOrFail($gameId);
        $game->update([
            'zip_path' => $zipPath,
            'image_path' => $imagePath,
        ]);

        // Descompacta o arquivo zip enviado para a pasta correspondente ao jogo
        $zipFilePath = storage_path('app/public/games/' . $zipFileName);
        $extractPath = storage_path('app/public/games/playthegame/' . $gameId);

        // Descompacta o arquivo zip
        $zip = new Zip();
        $zip->open($zipFilePath);
        $zip->extract($extractPath);

        // Redireciona de volta para a página de listagem de jogos com uma mensagem de sucesso
        return redirect()->route('admin.games.index')->with('success', 'Jogo inserido com sucesso!');
    }

    // Página de formulário para editar jogo
    public function edit($id)
    {
        // Obtém o jogo a ser editado
        $game = Game::findOrFail($id);
        // Retorna a view 'games.edit' passando o jogo como parâmetro
        return view('games.edit', ['game' => $game]);
    }

    // Rota PUT para atualizar jogo
    public function update(Request $request, $id)
    {
        // Obtém o jogo a ser atualizado
        $game = Game::findOrFail($id);

        // Valida os dados do formulário
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'zip_file' => 'file',
            'image' => 'image',
        ]);
        //descobre o id do jogo que foi inserido
        $gameId = $game->id;





        // se arquivo zip foi feito upload, atualiza arquivo zip
        if ($request->file('zip_file')) {
            // Gera nomes de arquivo únicos para o jogo
            $zipFileName =  $gameId . '.zip';
            // Manipula os uploads de arquivo: salva o zip no armazenamento
            $zipPath = $request->file('zip_file')->storeAs('public/games', $zipFileName);
            // Ajusta os caminhos para remover o prefixo 'public/'
            $zipPath = str_replace('public/', '', $zipPath);
            $game->update([
                'zip_path' =>  $zipPath,
            ]);
        }

        // se arquivo de imagem foi feito upload, atualiza imagem
        if ($request->file('image')) {
            // guardar o tipo de extensao de imagem
            $extensionImage = $request->file('image')->getClientOriginalExtension();

            // Gera nomes de arquivo únicos para o imagem

            $imageFileName =  $gameId . '.' . $extensionImage;
            // Manipula os uploads de arquivo: salva a imagem no armazenamento
            $imagePath = $request->file('image')->storeAs('public/games', $imageFileName);
            // Ajusta os caminhos para remover o prefixo 'public/'
            $imagePath = str_replace('public/', '', $imagePath);
            $game->update([
                'image_path' => $imagePath,
            ]);
        }

        // Atualiza os dados do jogo no banco de dados
        $game->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        // Redireciona de volta para a página de listagem de jogos com uma mensagem de sucesso
        return redirect()->route('admin.games.index')->with('success', 'Jogo atualizado com sucesso!');
    }

    // Remove um jogo
    public function destroy($id)
    {
        // Encontra o jogo a ser removido
        $game = Game::findOrFail($id);
        // Remove o jogo do banco de dados
        $game->delete();
        // Redireciona de volta para a página de listagem de jogos com uma mensagem de sucesso
        return redirect()->route('admin.games.index')->with('success', 'Jogo removido com sucesso!');
    }
}
