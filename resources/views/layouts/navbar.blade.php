<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="navbar-brand" href="{{ url('/') }}">Loja</a>
      </li>
    </ul>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('pessoas.index') }}">Pessoas <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('pedidos.index') }}">Pedidos <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('produtos.index') }}">Produtos <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="{{ route('produtos.index') }}" >
    <input class="form-control mr-sm-2" type="search" placeholder="Buscar produto" aria-label="Search">
    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>

    @yield('conteudo')
    
    <script type="text/javascript" src="/js/app.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
