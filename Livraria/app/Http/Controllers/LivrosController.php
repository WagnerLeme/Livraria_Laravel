<?php

namespace App\Http\Controllers;

use App\Livro;
use Illuminate\Http\Request;
use App\Http\Requests\LivrosFormRequest;
use App\Services\CriadorDeLivro;

class LivrosController extends Controller
{
    public function index()
    {
        $livros = Livro::all();

        return view('livros.index', compact('livros'));
    }

    public function create()
    {
        return view('livros.create');
    }

    public function store(Request $request)
    {

        $isbn = $request -> isbn; 
        $nome = $request -> nome; 
        $edicao = $request -> edicao; 
        $editora = $request -> editora; 
        $autor = $request -> autor; 
        $dataPublicacao = $request -> dataPublicacao; 
        $idioma = $request -> idioma; 
        $numeroPagina = $request -> numeroPagina; 
        $categoria = $request -> categoria; 
        $quantidade = $request -> quantidade; 
         
        $livro = new Livro();
//
        $livro->isbn = $isbn;
        $livro->nome = $nome;
        $livro->edicao = $edicao;
        $livro->editora = $editora;
        $livro->autor = $autor;
        $livro->dataPublicacao = $dataPublicacao;
        $livro->idioma = $idioma;
        $livro->numeroPagina = $numeroPagina;
        $livro->categoria = $categoria;
        $livro->quantidade = $quantidade;

        var_dump($livro->save());

       return redirect()->route('listar_livros');
    }


}
