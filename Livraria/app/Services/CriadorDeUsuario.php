<?php

namespace App\Services;

use App\Livros; 
use Illuminate\Support\Facades\DB;


class CriadorDeUsuario
{
    public function criarUsuario(
     
        string $nome, 
        string $telefone, 
        string $email, 
        string $endereco,
        string $senha,
        string $permissao

    ) : Usuario
    {
        $usuario = null;
        DB::beginTransaction();
        $usuario = Usuario::create($request->all());
        
        DB::commit();
    
    
        return $usuario;
    
    }
}