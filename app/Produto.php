<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// modelo da entidade Produto

class Produto extends Model
{
    protected $fillable = [
        'id',
        'codigo',
        'nome',
        'preco'
    ];
}
