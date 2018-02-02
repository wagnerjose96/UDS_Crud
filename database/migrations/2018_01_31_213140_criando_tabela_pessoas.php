<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//Migration utilizada para a criação da tabela pessoas no banco de dados

class CriandoTabelaPessoas extends Migration
{
    
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cpf');
            $table->date('data_nascimento');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
}
