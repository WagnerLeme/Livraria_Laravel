<?php

namespace App\Http\Controllers;

use App\Livro;
use Illuminate\Http\Request;
use App\Http\Requests\LivrosFormRequest;
use App\Services\CriadorDeLivro;

class LivrosController extends Controller
{
    public function index(Request $request)
    {
        $livros = Livro::query() -> orderBy('nome') -> get();

        $mensagem = $request -> session() -> get('mensagem');

        return view('livros.index', compact('livros', 'mensagem'));
    }

    public function create()
    {
        return view('livros.create');
    }

    public function store(LivrosFormRequest $request)
    {

        $livro = new Livro;

       // $livro-> isbn = $request->isbn;
       // $livro-> nome = $request->isbn;
       // $livro-> edicao = $request->isbn;
       // $livro-> editora = $request->isbn;
       // $livro-> autor = $request->isbn;
       // $livro-> dataPublicacao = $request->isbn;
       // $livro-> idioma = $request->isbn;
       // $livro-> numeroPagina = $request->isbn;
       // $livro-> categoria = $request->isbn;
       // $livro-> quantidade = $request->isbn;

        if($request->hasFile('imagem') && $request->file('imagem') -> isValid()){

            $requestImagem = $request->imagem;

            $extension = $requestImagem->extension();

            $imagemName = md5($requestImagem -> getClientOriginalName() . strtotime('now')). "." . $extension;

            $requestImagem -> move(public_path('img/livros'), $imagemName);

            $livro->imagem = $imagemName;
        }

     
         $livro = Livro::create([
            'imagem' => $livro,
            'isbn' => $request -> isbn,
            'nome' => $request -> nome,
            'edicao' => $request -> edicao,
            'editora' => $request -> editora,
            'autor' => $request -> autor,
            'dataPublicacao' => $request -> dataPublicacao,
            'idioma' => $request -> idioma,
            'numeroPagina' => $request -> numeroPagina,
            'categoria' => $request -> categoria,
            'quantidade' => $request -> quantidade
         ]);
         $request->session() -> flash ('mensagem',"O livro {$livro->nome} foi cadastrado com sucesso.");
     
        return redirect()->route('listar_livros');
    }

    public function destroy(Request $request)
    {
        Livro::destroy($request->id);
        $request->session() -> flash('mensagem', "O Livro foi removido com sucesso");

        return redirect()->route('listar_livros');
    }

}
