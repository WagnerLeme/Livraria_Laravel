<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Livros extends Migration
{
    
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table -> increments('id');
            //$table -> integer('fk_id_pessoa');
            $table -> string('imagem') -> nullable();
            $table -> string('isbn') -> unique();
            $table -> string('nome');
            $table -> string('edicao');
            $table -> string('editora');
            $table -> string('autor');
            $table -> date('dataPublicacao');
            $table -> string('idioma');
            $table -> integer('numeroPagina');
            $table -> string('categoria');
            $table -> integer('quantidade');

            
            //$table -> Integer('id_ pessoa_livro');
            //$table -> foreign('id_ pessoa_livro') -> references('id') -> on ('pessoa_livro') -> onDelete('cascade') -> onUpdate('cascade');
            
        });
    }
    
    public function down()
    {
        Schema::drop('livros');
    }
};
