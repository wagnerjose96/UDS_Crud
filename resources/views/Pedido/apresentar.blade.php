@extends('layouts.navbar')
@section('conteudo')
<?php  
use App\ItemPedido;
use App\Produto;
$produtos = \App\Produto::all(); ?>
<br/>
<h1 class="text-center">Detalhes do Pedido</h1>

<form id="form-delete"style="display: none" action="{{ route('pedidos.destroy',['pedido' => $pedido->id]) }}" method="post">
    {{csrf_field()}}
    {{method_field('DELETE')}}
</form>
<br/>
<table class="table table-bordered">
    <tbody>
    <tr>
        <th scope="row">Cliente</th>
        <td>{{$cliente->nome}}</td>
    </tr>
    <tr>
        <th scope="row">Número do pedido</th>
        <td>{{$pedido->numero}}</td>
    </tr>
    <tr>
        <th scope="row">Itens comprados</th>
        <td>
            @foreach($produtos as $produto)
                <?php 
                    $itensPedidos = ItemPedido::findOrFail($pedido->id);
                    $iten = Produto::findOrFail($itensPedidos->produto_id); 
                ?>
            @endforeach
            {{$iten->nome}}
        </td>
    </tr>
    <tr>
        <th scope="row">Data de emissão</th>
        <td><?php echo date('d/m/Y', strtotime($pedido->emissao)); ?></td>
    </tr>
    <tr>
        <th scope="row">Total do pedido</th>
        <td>R$ {{$pedido->total}},00</td>
    </tr>

    </tbody>
</table>

<a class="btn btn-success btn-lg" href="{{ route('pedidos.edit',['pedido' => $pedido->id]) }}">Comprar novo item</a>

<a class="btn btn-danger btn-lg" href="{{ route('pedidos.destroy',['pedido' => $pedido->id]) }}"
   onclick="event.preventDefault();if(confirm('Deseja excluir este pedido?')){document.getElementById('form-delete').submit();}">Excluir Pedido</a>
   
@endsection