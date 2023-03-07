<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model 
{
    public $timestamps = false;
    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'endereco',
        'senha', 
        'permissao',
    ];

    public function cadastrar_livro()
    {
        return $this->hasMany(Livro::class);
    }

    public function pessoa_livro()
    {
        return $this -> belongsTo(Pessoa::class);
    }
}