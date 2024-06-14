<?php

use Illuminate\Support\Facades\Route;

/* 
ATENCAO AO TIPO DE ROUTE EXISTE GET POST PUT e DELETE
GET para paginas web
POST para guardar formularios
PUT para atualizar formularios
DELETE para remover registos
*/


//routas para o sistema de login (register, login, recover password)
Auth::routes();


//pagina inical
Route::get('/', function () {
    return view('welcome');
});

//pagina de dashboard para quando o utilizador entra no sistema depois do login
//se nao tiver autenticado mostrar login
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//paginas estaticas que so tem texto e nao sao alteradas por PHP
Route::get('/sobre-nos', [App\Http\Controllers\StaticPagesController::class, 'about'])->name('about');
Route::get('/contato', [App\Http\Controllers\StaticPagesController::class, 'contact'])->name('contact');

//pagina de loja, listar jogos
Route::get('/loja', [App\Http\Controllers\ShopController::class, 'index'])->name('shop');

//ver jogo por id, exemplo http://localhost:8000/jogos/1
Route::get('/jogos/{id}', [App\Http\Controllers\GameController::class, 'show'])->name('games.show');

//routas que funcionam apenas quando o utilizador estiver autenticado
Route::middleware('auth')->group(function () {
    //listar jogos e botoes para editar e apagar jogo
    Route::get('/admin/jogos', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.games.index');

    //formulario para criar jogo
    Route::get('/admin/jogos/create', [App\Http\Controllers\AdminController::class, 'create'])->name('admin.games.create');

    //POST para guardar jogo
    Route::post('/admin/jogos/store', [App\Http\Controllers\AdminController::class, 'store'])->name('admin.games.store');
    //formulario para editar
    Route::get('/admin/jogos/{game}/edit', [App\Http\Controllers\AdminController::class, 'edit'])->name('admin.games.edit');
    //PUT para atualizar jogo
    Route::put('/admin/{game}', [App\Http\Controllers\AdminController::class, 'update'])->name('admin.games.update');
    //DELETE para eleminar jogos
    Route::delete('/admin/jogos/{game}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('admin.games.destroy');
});


//routas que funcionam apenas quando o utilizador estiver autenticado
Route::middleware('auth')->group(function () {
    //carrinho de compras
    Route::get('/carrinho', [App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
    Route::post('/carrinho/add', [App\Http\Controllers\CartController::class, 'add'])->name('cart.add');
    Route::post('/carrinho/remove', [App\Http\Controllers\CartController::class, 'remove'])->name('cart.remove');

    //POST guardar informacoes de checkout
    Route::post('/checkout/process', [App\Http\Controllers\CheckoutController::class, 'process'])->name('checkout.process');

    //listar jogos comprados por utilizador
    Route::get('/jogos-comprados', [App\Http\Controllers\PayGamesController::class, 'index'])->name('paygames.index');
});

//links de manutencao do laravel

//limpar cache do website e sempre que o web.php for alterado visitar este link
Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:cache');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return 'Application cache has been cleared';
});

//nao e possivel executar comandos php artisan no servidor cpanel da internet utilizar este link
//para criar atalho da pasta storage no public
//para os jogos estarem disponiveis para download/upload
Route::get('/criar-atalho-storage-no-cpanel', function () {
    Artisan::call('storage:link');
});
