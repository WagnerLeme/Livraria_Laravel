<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pessoas extends Migration
{
    
    public function up(): void
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('nome');
            $table -> string('telefone');
            $table -> string('email') -> unique();
            $table -> string('endereco');
            $table -> string('senha');
            $table -> string('permissao');
            $table -> rememberToken();
        });

    }

   
    public function down(): void
    {
        Schema::drop('pessoas');
    }
};
