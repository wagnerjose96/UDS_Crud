@extends('layouts.navbar')
@section('conteudo')
    <br/>
    <h1 class="text-center">Lista de Pessoas</h1>
   
    <table class="table table-bordered">
        <thead>
        <tr class="bg-primary">
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Data Nascimento</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pessoas as $pessoa)
            <tr>
                <td>{{ $pessoa->id }}</td>
                <td>{{ $pessoa->nome }}</td>
                <td>{{ $pessoa->cpf }}</td>
                <td>{{ $pessoa->data_nascimento }}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{route('pessoas.edit', ['pessoa' => $pessoa->id])}}">Editar</a>
                    <a class="btn btn-primary btn-sm" href="{{route('pessoas.show', ['pessoa' => $pessoa->id])}}">Detalhes</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <br/>
    <a class="btn btn-success" href="{{route('pessoas.create')}}">Novo cliente</a>
    
@endsection