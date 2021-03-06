@extends('layouts.navbar')
@section('conteudo')
    <br/>
    <h1 class="text-center">Lista de produtos</h1>
    <br>
    <div class="table-responsive-md">
        <table class="table table-bordered">
        <thead>
        <tr class="bg-primary" >
            <th>Código</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($produtos as $produto)
            <tr>
                <td>{{ $produto->codigo }}</td>
                <td>{{ $produto->nome }}</td>
                <td>R${{ $produto->preco }},00</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{route('produtos.edit', ['produto' => $produto->id])}}">Editar</a>
                    <a class="btn btn-primary btn-sm" href="{{route('produtos.show', ['produto' => $produto->id])}}">Detalhes</a>
                </td>
            </tr>
        @endforeach
        </tbody>
        </table>
    </div>
        <a class="btn btn-success btn-lg" href="{{route('produtos.create')}}">Novo produto</a>
@endsection