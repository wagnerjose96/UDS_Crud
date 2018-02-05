@extends('layouts.navbar')
@section('conteudo')
    <br/>
    <h1 class="text-center">Lista de Pessoas</h1>
   
    <table class="table table-bordered">
        <thead>
        <tr class="bg-primary">
            <th>Nome</th>
            <th>CPF</th>
            <th>Data Nascimento</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>


@foreach($pessoas as $pessoa)
<tr>
    <td>{{ $pessoa->nome }}</td>
    <td>
    {{ app(App\Http\Controllers\Controller::class)->mask($pessoa->cpf) }}</td>
    <td><?php echo date('d/m/Y', strtotime($pessoa->data_nascimento)); ?></td>
    <td>
        <a class="btn btn-primary btn-sm" href="{{route('pessoas.edit', ['pessoa' => $pessoa->id])}}">Editar</a>
        <a class="btn btn-primary btn-sm" href="{{route('pessoas.show', ['pessoa' => $pessoa->id])}}">Detalhes</a>
    </td>
</tr>
@endforeach


        </tbody>
    </table>
    <br/>
    <a class="btn btn-success btn-lg" href="{{route('pessoas.create')}}">Novo cliente</a>
    
@endsection