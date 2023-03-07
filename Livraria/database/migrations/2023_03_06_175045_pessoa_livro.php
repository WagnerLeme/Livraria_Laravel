<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PessoaLivro extends Migration
{

    public function up(): void
    {
        Schema::create('pessoa_livro', function (Blueprint $table) {
        $table -> increments('id');
        //$table -> string('fk_id_pessoa');
        $table -> date('data_emprestimo');
        $table -> date('data_devolucao');
        $table -> string('nome_livro');
        $table -> string('nome_pessoa');
        $table -> string('email_pessoa');
        $table -> boolean('devolvido');

        //$table -> unsignedBigInteger('id_user');
        //    $table -> foreign('id_user') 
        //        -> references('id') 
        //        -> on ('pessoas') 
        //        -> onDelete('cascade') 
        //        -> onUpdate('cascade');
                //
        });
    }

    
    public function down(): void
    {
        Schema::drop('pessoa_livro');
    }
};
