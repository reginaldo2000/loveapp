<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login.login');
});

Route::post('/login', function(Request $request) {
    if($request->usuario == 'root' && $request->senha == '1010') {
        return redirect('categorias');
    }
    return view('login.login');
})->name('login');

#rotas pertencentes a categoria
Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias');
Route::get('/categoria/show/{id}', [CategoriaController::class, 'show']);
Route::post('/categoria/save', [CategoriaController::class, 'store'])->name('categoria.save');
Route::put('/categoria/edit', [CategoriaController::class, 'prepareUpdate'])->name('categoria.edit');
Route::delete('/categoria/destroy', [CategoriaController::class, 'prepareDestroy'])->name('categoria.prepare');

#rotas pertencentes a produtos
Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos');
Route::post('/produto/save', [ProdutoController::class, 'store'])->name('produto.save');
Route::get('/produto/show/{id}', [ProdutoController::class, 'show'])->name('produto.show');
Route::post('/produto/edit', [ProdutoController::class, 'prepareUpdate'])->name('produto.edit');