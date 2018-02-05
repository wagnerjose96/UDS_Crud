@extends('layouts.navbar')
@section('conteudo')
<br/>
<h1 class="text-center">Detalhes do cadastro</h1>

<div class="col-md-4 col-md-offset-5">
    <div class="card border-info mb-3" style="max-width: 18rem;">
        <img src="https://www.openbank.es/hazte-cliente/eaaf79b6ef4d62766e15bb2400c09103.svg" alt="..." class="img-responsive">
        
        <div class="card-body">
            <h3 class="text-center">{{$pessoa->nome}}</h3>
            <h5 class="text-center">{{ app(App\Http\Controllers\Controller::class)->mask($pessoa->cpf)}}</h5>
            <h5 class="text-center">Data de nascimento: <?php echo date('d/m/Y', strtotime($pessoa->data_nascimento)); ?></h5>
        </div>
    </div>
    <br>
    <a class="btn btn-success btn-lg" href="{{ route('pessoas.edit',['pessoa' => $pessoa->id]) }}">Editar cadastro</a>
    <a class="btn btn-danger btn-lg" href="{{ route('pessoas.destroy',['pessoa' => $pessoa->id]) }}" onclick="event.preventDefault();if(confirm('Deseja excluir este item?')){document.getElementById('form-delete').submit();}">Excluir cadastro</a>

    <form id="form-delete"style="display: none" action="{{ route('pessoas.destroy',['pessoa' => $pessoa->id]) }}" method="post">
        {{csrf_field()}}
        {{method_field('DELETE')}}
    </form>
</div>


@endsection




