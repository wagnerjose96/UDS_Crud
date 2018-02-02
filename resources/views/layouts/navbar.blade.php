<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <meta charset="utf-8">
</head>
<body>
<nav class="navbar navbar-default navbar-inverse">
    <div class="container">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/') }}">Loja</a>
        <ul class="nav navbar-nav">
            <li class="{{ (Request::is('articles') ? 'active' : '') }}">
                <a href="{{ route('pessoas.index') }}">Pessoas</a>
            </li>
            <li class="{{ (Request::is('about') ? 'active' : '') }}">
                <a href="{{ route('pedidos.index') }}">Pedidos</a>
            </li>
            <li class="{{ (Request::is('contact') ? 'active' : '') }}">
                <a href="{{ route('produtos.index') }}">Produtos</a>
            </li>
        </ul>
    </div>
</nav>

    @yield('conteudo')
    
    <script type="text/javascript" src="/js/app.js"></script>
</body>
</html>





