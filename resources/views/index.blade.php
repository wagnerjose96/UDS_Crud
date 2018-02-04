@extends('layouts.navbar')
@section('conteudo')

<?php  use App\Produto;
$produtos = \App\Produto::all();?>

<br/>
<H1 class="text-center">Produtos na loja</H1>
<br/>

<div class="card-group">
@foreach($produtos as $produto)
  <div class="col-sm-2 col-md-2 ">
            <div class="card" style="width: 20rem;">
                <h3 class="text-center">{{ $produto->nome }}</h3>
                <img src="https://www.systemcommerce.net/public/img/flat/flaticon-carro-supermercado.png" alt="..." class="img-responsive">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="clearfix">
                        <div class="pull-left price">R${{ $produto->preco }},00</div>
                            <a href="{{route('pedidos.create')}}" class="btn btn-success pull-right" role="button">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
  @endforeach
</div>
@endsection






