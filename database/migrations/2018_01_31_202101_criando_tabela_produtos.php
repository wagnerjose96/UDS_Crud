<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//Migration utilizada para a criação da tabela produtos no banco de dados

class CriandoTabelaProdutos extends Migration
{
    public function up()
    {
        Schema::create('produtos', function(Blueprint $table){
            $table->increments('id');
            $table->string('codigo');
            $table->string('nome');
            $table->double('preco');
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
