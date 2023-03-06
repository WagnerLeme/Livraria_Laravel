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

Route::get('/livros', 'App\Http\Controllers\LivrosController@index') -> name('listar_livros');
Route::get('/cadastro/livros', 'App\Http\Controllers\LivrosController@create');
Route::post('/cadastro/livros', 'App\Http\Controllers\LivrosController@store');
