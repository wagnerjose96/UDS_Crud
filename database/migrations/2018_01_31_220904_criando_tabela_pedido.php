<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//Migration utilizada para a criação da tabela pedidos no banco de dados

class CriandoTabelaPedido extends Migration
{
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) { 
            $table->increments('id');
            $table->integer('pessoa_id')->unsigned();
            $table->foreign('pessoa_id')->references('id')->on('pessoas');
            $table->integer('numero');
            $table->date('emissao');
            $table->double('total');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
