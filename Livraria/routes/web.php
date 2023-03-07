<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/**------------ Rotas Livros ----------------- */
Route::get('/livros', 'App\Http\Controllers\LivrosController@index') -> name('listar_livros');
Route::get('/cadastro/livros', 'App\Http\Controllers\LivrosController@create') -> name('cadastrar_livro');
Route::post('/cadastro/livros', 'App\Http\Controllers\LivrosController@store');
Route::delete('/livros/remover/{id}', 'App\Http\Controllers\LivrosController@destroy');


/**------------ Rotas Pessoa ----------------- */
Route::get('/usuarios', 'App\Http\Controllers\PessoaController@index') -> name('listar_usuarios');
Route::get('/cadastro/usuarios', 'App\Http\Controllers\PessoaController@create') -> name('cadastrar_usuarios');
Route::post('/cadastro/usuarios', 'App\Http\Controllers\PessoaController@store');
Route::delete('/usuarios/remover/{id}', 'App\Http\Controllers\PessoaController@destroy');