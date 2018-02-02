<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// modelo da entidade itemPedido

class ItemPedido extends Model
{
    protected $fillable = [
        'id',
        'pedido_id',
        'produto_id',
        'quantidade',
        'preco',
        'desconto',
        'total'
    ];
}
