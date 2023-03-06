<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Livros extends Migration
{
    
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table -> string('isbn') -> primary();
            $table -> string('nome');
            $table -> string('edicao');
            $table -> string('editora');
            $table -> string('autor');
            $table -> date('dataPublicacao');
            $table -> string('idioma');
            $table -> integer('numeroPagina');
            $table -> string('categoria');
            $table -> integer('quantidade');
        });
    }

    
    public function down()
    {
        Schema::drop('livros');
    }
};
