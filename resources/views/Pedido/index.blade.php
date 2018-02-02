@extends('layouts.navbar')
@section('conteudo')
<br/>
<h1 class="text-center">Lista de Pedidos</h1>
<table class="table table-bordered">
    <thead>
    <tr class="bg-primary">
        <th scope="col">ID</th>
        <th scope="col">Cliente</th>
        <th scope="col">Número</th>
        <th scope="col">Emissão</th>
        <th scope="col">Total</th>
        <th scope="col">Ações</th>
    </tr>
    </thead>
    <tbody>
    @foreach($pedidos as $pedido)
        <tr>
            <td>{{ $pedido->id }}</td>
            <td>{{ $pedido->pessoa_id }}</td>
            <td>{{ $pedido->numero }}</td>
            <td>{{ $pedido->emissao }}</td>
            <td>{{ $pedido->total }}</td>
            <td>
                <a class="btn btn-primary btn-sm" href="{{route('pedidos.show', ['pedido' => $pedido->id])}}">Detalhes</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<a class="btn btn-success" href="{{route('pedidos.create')}}">Novo Pedido</a>
@endsection