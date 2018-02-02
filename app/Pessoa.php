<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// modelo da entidade Pessoa

class Pessoa extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'cpf',
        'data_nascimento'
    ];
}
