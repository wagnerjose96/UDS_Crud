<?php

use Illuminate\Database\Seeder;

//Seed utilizada para popular a tabela pedidos;

class criando_pedidos extends Seeder
{
    public function run()
    {
        DB::table('pedidos')->insert([
        'pessoa_id' => '2',
        'numero' => '01',
        'emissao' => '2018/02/05',
        'total' => '10'
        ]);

        DB::table('item_pedidos')->insert([
        'pedido_id' => '1',
        'produto_id' => '1',
        'quantidade' => '2',
        'preco' => '5',
        'desconto' => '0',
        'total' => '10'
        ]);

        DB::table('pedidos')->insert([
        'pessoa_id' => '3',
        'numero' => '02',
        'emissao' => '2018/02/05',
        'total' => '5'
        ]);

        DB::table('item_pedidos')->insert([
        'pedido_id' => '2',
        'produto_id' => '2',
        'quantidade' => '5',
        'preco' => '1',
        'desconto' => '0',
        'total' => '5'
        ]);

        DB::table('pedidos')->insert([
        'pessoa_id' => '1',
        'numero' => '03',
        'emissao' => '2018/02/05',
        'total' => '30'
        ]);

        DB::table('item_pedidos')->insert([
        'pedido_id' => '3',
        'produto_id' => '4',
        'quantidade' => '3',
        'preco' => '10',
        'desconto' => '0',
        'total' => '30'
        ]);
    }
}
