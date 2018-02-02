<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//Migration utilizada para a criação da tabela item_pedidos no banco de dados

class CriandoTabelaItemPedido extends Migration
{

    public function up()
    {
        Schema::create('item_pedidos', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('pedido_id')->unsigned();
            $table->foreign('pedido_id')->references('id')->on('pedidos');
            
            $table->integer('produto_id')->unsigned();
            $table->foreign('produto_id')->references('id')->on('produtos');
            
            $table->double('quantidade');
            $table->double('preco');
            $table->double('desconto');
            $table->double('total');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('item_pedidos');
    }
}
