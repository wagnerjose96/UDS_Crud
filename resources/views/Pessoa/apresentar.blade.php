@extends('layouts.navbar')
@section('conteudo')
<br/>
<h1>Detalhes do cadastro</h1>

<div class="align-center"> 
    <div class="card-deck">
        <div class="col-sm-2 col-md-2">
            <div class="card" style="width: 18rem;">
            <img src="https://www.openbank.es/hazte-cliente/eaaf79b6ef4d62766e15bb2400c09103.svg" alt="..." class="img-responsive">
            <h3 class="text-center">{{$pessoa->nome}}</h3>
                <div class="card-body">
                    <h5>CPF: {{$pessoa->cpf}}</h5>
                    <h5>Data de nascimento: {{$pessoa->data_nascimento}}</h5>
                </div>
            </div>
        </div>
    </div> 
</div>
<table class="table"></table>
    <a class="btn btn-success" href="{{ route('pessoas.edit',['pessoa' => $pessoa->id]) }}">Editar cadastro</a>
    <a class="btn btn-danger" href="{{ route('pessoas.destroy',['pessoa' => $pessoa->id]) }}" onclick="event.preventDefault();if(confirm('Deseja excluir este item?')){document.getElementById('form-delete').submit();}">Excluir cadastro</a>

    <form id="form-delete"style="display: none" action="{{ route('pessoas.destroy',['pessoa' => $pessoa->id]) }}" method="post">
        {{csrf_field()}}
        {{method_field('DELETE')}}
    </form>
@endsection




