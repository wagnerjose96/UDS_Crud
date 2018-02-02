<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// modelo da entidade Pedido

class Pedido extends Model
{
    protected $fillable = [
        'id',
        'pessoa_id',
        'numero',
        'emissao',
        'total'
    ];
}
