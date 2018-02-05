<?php

use Illuminate\Database\Seeder;

//Seed utilizada para popular a tabela pessoas;

class criando_pessoas extends Seeder
{
    public function run()
    {
        DB::table('pessoas')->insert([
        	'nome' => "Maria da Silva",
        	'cpf' => "22461771626",
        	'data_nascimento' => "1990/11/20"
        ]);
        DB::table('pessoas')->insert([
        	'nome' => "Pedro Lima",
        	'cpf' => "01337252271",
        	'data_nascimento' => "2000/10/03"
        ]);
        DB::table('pessoas')->insert([
        	'nome' => "José Aparecido",
        	'cpf' => "16428187710",
        	'data_nascimento' => "1980/01/30"
        ]);
        DB::table('pessoas')->insert([
        	'nome' => "Jorge Gabriel",
        	'cpf' => "87731435458",
        	'data_nascimento' => "1996/10/12"
        ]);
        DB::table('pessoas')->insert([
        	'nome' => "Izabela Barbosa",
        	'cpf' => "30668756101",
        	'data_nascimento' => "1970/05/17"
        ]);
    }
}
