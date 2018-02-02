@extends('layouts.navbar')
@section('conteudo')
    <br/>
    <h1 class="text-center">Novo Produto</h1>
    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form method="post" action="/produtos">
        {{ csrf_field() }}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label>Codigo</label>
            <input class="form-control" id="codigo" name="codigo">
        </div>
        <div class="form-group">
            <label>Nome</label>
            <input class="form-control" id="nome" name="nome">
        </div>
        <div class="form-group">
            <label>Preço</label>
            <input class="form-control" id="preco" name="preco">
        </div>
        <button type="submit" class="btn btn-success">Salvar novo produto</button>
    </form>
@endsection