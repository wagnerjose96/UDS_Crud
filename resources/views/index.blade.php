<?php  use App\Produto;
$produtos = \App\Produto::all();?>
<html>
<head>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<nav class="navbar navbar-default navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">Loja</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ route('pessoas.index') }}">Pessoas</a>
                </li>
                <li>
                    <a href="{{ route('pedidos.index') }}">Pedidos</a>
                </li>
                <li>
                    <a href="{{ route('produtos.index') }}">Produtos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<br/>
<H1 class="text-center">Produtos na loja</H1>

<div class="align-center">
    @foreach($produtos as $produto) 
    <div class="card-deck">
        <div class="col-sm-2 col-md-2">
            <div class="card" style="width: 18rem;">
                <h3 class="text-center">{{ $produto->nome }}</h3>
                <img src="https://lojamasterchef.files.wordpress.com/2017/03/chocolate-branco-o-que-e.jpg?w=640" alt="..." class="img-responsive">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="clearfix">
                        <div class="pull-left price">R${{ $produto->preco }},00</div>
                            <a href="{{route('pedidos.create')}}" class="btn btn-success pull-right" role="button">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<script type="text/javascript" src="/js/app.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>









