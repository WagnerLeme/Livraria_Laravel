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

        return view('livros.livros', compact('livros', 'mensagem'));
    }

    public function create()
    {
        return view('livros.create');
    }

    public function store(LivrosFormRequest $request)
    {

        $livroImg = new Livro;

        if($request->hasFile('imagem') && $request->file('imagem') -> isValid()){
           
          $requestImagem = $request->imagem;
          $extension = $requestImagem->extension();
          $imagemName = $requestImagem -> getClientOriginalName(); //. strtotime(). "." . $extension;
          $requestImagem -> move(public_path('imagem'), $imagemName);
          $livroImg->imagem = $imagemName;
        }
     
         $livro = Livro::create([
            'imagem' => $livroImg,
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

        $request->session() 
            -> flash ('mensagem',"O livro {$livro->nome} foi cadastrado com sucesso.");
     
        return redirect()->route('listar_livros');
    }

    public function destroy(Request $request)
    {
        Livro::destroy($request->id);
        $request->session() -> flash('mensagem', "O Livro foi removido com sucesso");

        return redirect()->route('listar_livros');
    }

    public function edit($id)
    {
        $livro = Livro::find($id);
  
        return view('livros.edit', compact('livro'));
    }

    public function update(Request $request){
    
        Livro::findOrfail($request->id)->update([

            'isbn' => $request->isbn,
            'nome' => $request->nome,
            'edicao' => $request->edicao,
            'autor' => $request->autor,
            'dataPublicacao' => $request->dataPublicacao,
            'idioma' => $request->idioma,
            'numeroPagina' => $request->numeroPagina,
            'categoria' => $request->categoria,
            'quantidade' => $request->quantidade,

        $request->all()]);

        return redirect()->route('listar_livros');
      }
    
      public function emprestar(Request $request)
      {
        $livros = Livro::query() -> orderBy('nome') -> get();

        $mensagem = $request -> session() -> get('mensagem');

        return view('livros.index', compact('livros', 'mensagem'));
      }
     
      public function devolver()
      {

      }

      public function historico()
      {

      }
}
