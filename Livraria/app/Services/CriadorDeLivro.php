<?php

namespace App\Services;

use App\Livros; 
use Illuminate\Support\Facades\DB;


class CriadorDeLivro
{
    public function criarLivro(
     
        string $isbn, 
        string $nome,
        string $edicao, 
        string $editora, 
        string $autor,
        date $dataPublicacao,
        string $idioma,
        int $numeroPagina,
        string $categoria, 
        int $quantidade, 

    ) : Livro
    {
        $livro = null;
        DB::beginTransaction();
        $livro = Livro::create($request->all());
        
        DB::commit();
    
    
        return $Livro;
    
    }
}