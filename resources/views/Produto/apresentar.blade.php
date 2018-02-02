@extends('layouts.navbar')
@section('conteudo')
    <br/>
    <h1 class="text-center">Descrição do produto</h1>
    <form id="form-delete"style="display: none" action="{{ route('produtos.destroy',['produto' => $produto->id]) }}" method="post">
        {{csrf_field()}}
        {{method_field('DELETE')}}
    </form>
    <br/>
    <table class="table table-bordered">
        <tbody>
        <tr>
            <th scope="row">ID</th>
            <td>{{$produto->id}}</td>
        </tr>
        <tr>
            <th scope="row">Codigo</th>
            <td>{{$produto->codigo}}</td>
        </tr>
        <tr>
            <th scope="row">Nome</th>
            <td>{{$produto->nome}}</td>
        </tr>
        <tr>
            <th scope="row">Preço</th>
            <td>{{$produto->preco}}</td>
        </tr>
        </tbody>
    </table>
    <a class="btn btn-success" href="{{ route('produtos.edit',['produto' => $produto->id]) }}">Editar</a>
    <a class="btn btn-danger" href="{{ route('produtos.destroy',['produto' => $produto->id]) }}"
       onclick="event.preventDefault();if(confirm('Deseja excluir este item?')){document.getElementById('form-delete').submit();}">Excluir</a>
@endsection