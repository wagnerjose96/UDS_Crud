@extends('layouts.navbar')
@section('conteudo')
    <br/>
    <h1 class="text-center">Nova Pessoa</h1>
    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form method="post" action="/pessoas">
        {{ csrf_field() }}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group mx-sm-3 mb-2">
            <label>Nome</label>
            <input class="form-control" id="nome" name="nome">
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <label>CPF</label>
            <input class="form-control" id="cpf" name="cpf">
        </div>
        <div class="form-group mx-sm-3 mb-2">
            <label>Data Nascimento</label>
            <input class="form-control" id="data_nascimento" name="data_nascimento" type="date">
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
@endsection
