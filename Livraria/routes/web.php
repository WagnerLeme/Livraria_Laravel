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

/**------------ Rotas Livros Administrador ----------------- */
Route::get('/listar/livros', 'App\Http\Controllers\LivrosController@index') -> name('listar_livros');
Route::get('/cadastro/livros', 'App\Http\Controllers\LivrosController@create') -> name('cadastrar_livro');
Route::post('/cadastro/livros', 'App\Http\Controllers\LivrosController@store');
Route::delete('/livros/remover/{id}', 'App\Http\Controllers\LivrosController@destroy');
Route::get('/livros/editar/{id}', 'App\Http\Controllers\LivrosController@edit') -> name('editar_livro');
Route::post('/livros/atualizar/{id}', 'App\Http\Controllers\LivrosController@update') -> name('update_livros');
Route::post('/livros/emprestar/{id}', 'App\Http\Controllers\LivrosController@emprestar') -> name('emprestar_livros');

/**------------ Rotas Livros Usuário Padrão ----------------- */
Route::get('/dashboard', 'App\Http\Controllers\PadraoController@index') -> name('dashboard');

Route::get('/livros', 'App\Http\Controllers\LivrosController@emprestar') -> name('listar_livros');

/**------------ Rotas Pessoa ----------------- */
Route::get('/usuarios', 'App\Http\Controllers\PessoaController@index') -> name('listar_usuarios');
Route::get('/cadastro/usuarios', 'App\Http\Controllers\PessoaController@create') -> name('cadastrar_usuarios');
Route::post('/cadastro/usuarios', 'App\Http\Controllers\PessoaController@store');
Route::delete('/usuarios/remover/{id}', 'App\Http\Controllers\PessoaController@destroy');
Route::get('/usuarios/editar/{id}', 'App\Http\Controllers\PessoaController@edit') -> name('editar_usuario');
Route::post('/usuarios/atualizar/{id}', 'App\Http\Controllers\PessoaController@update') -> name('update_usuario');

/**------------ Rotas Autenticação ----------------- */
Route::get('/entrar', 'App\Http\Controllers\EntrarController@index') -> name('pagina_login');
Route::post('/entrar', 'App\Http\Controllers\EntrarController@entrar');
Route::get('/logout', 'App\Http\Controllers\EntrarController@logout') -> name('logout');

/**------------ Rotas imagem ----------------- */

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
