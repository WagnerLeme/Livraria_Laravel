<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa_livro extends model
{
    public $timestamps = false;
    protected $fillable = [
        'fk_id',
        'fk_isbn',
        'data_emprestimo',
        'nome_livro', 
        'nome_pessoa',
        'email_pessoa', 
    ];

    public function emprestimo()
    {
        return $this->hasMany(Livro::class);
    }

}