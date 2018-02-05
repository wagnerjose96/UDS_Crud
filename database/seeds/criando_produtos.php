<?php

use Illuminate\Database\Seeder;

//Seed utilizada para popular a tabela produtos;

class criando_produtos extends Seeder
{
    public function run()
    {
        DB::table('produtos')->insert([
        	'codigo' => "01",
        	'nome' => "Bolacha",
        	'preco' => "5"
        ]);
        DB::table('produtos')->insert([
        	'codigo' => "02",
        	'nome' => "Paçoca",
        	'preco' => "1"
        ]);
        DB::table('produtos')->insert([
        	'codigo' => "03",
        	'nome' => "Chiclete",
        	'preco' => "2"
        ]);
        DB::table('produtos')->insert([
        	'codigo' => "04",
        	'nome' => "Chocolate",
        	'preco' => "10"
        ]);
        DB::table('produtos')->insert([
        	'codigo' => "05",
        	'nome' => "Sorvete",
        	'preco' => "15"
        ]);
        DB::table('produtos')->insert([
        	'codigo' => "06",
        	'nome' => "Bala",
        	'preco' => "3"
        ]);
    }
}
