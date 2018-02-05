@extends('layouts.navbar')
@section('conteudo')
<?php use App\Pessoa; ?>
<h1 class="text-center">Lista de Pedidos</h1>
<table class="table table-bordered">
    <thead>
    <tr class="bg-primary">
        <th scope="col">Cliente</th>
        <th scope="col">Número do pedido</th>
        <th scope="col">Data de emissão</th>
        <th scope="col">Total do pedido</th>
        <th scope="col">Ações</th>
    </tr>
    </thead>
    <tbody>
    @foreach($pedidos as $pedido)
        <?php $pessoa = Pessoa::findOrFail($pedido->pessoa_id);?>
        <br/>
        <tr>
            <td>{{ $pessoa->nome }}</td>
            <td>{{ $pedido->numero }}</td>
            <td>{{ $pedido->emissao }}</td>
            <td>R${{ $pedido->total }},00</td>
            <td>
                <a class="btn btn-primary btn-sm" href="{{route('pedidos.show', ['pedido' => $pedido->id])}}">Detalhes</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<a class="btn btn-success btn-lg" href="{{route('pedidos.create')}}">Novo Pedido</a>
@endsection