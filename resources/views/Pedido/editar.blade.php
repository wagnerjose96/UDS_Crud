@extends('layouts.navbar')
@section('conteudo')
<h1 class="text-center">Comprar novo item</h1>
@if($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif

<form method="post" action="{{route('pedidos.update', ['pedido' => $pedido->id])}}">
    {{ csrf_field() }}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_method" value="PUT">

    <div class="form-group mx-sm-3 mb-2">
        <label>Produto</label>
        <select class="form-control col-lg-4" name="produto_id" id="produto_id">
            <option value="0">Selecione o Produto</option>
            @foreach($produtos as $produto)
                <option value="{{$produto->id}}">{{$produto->nome}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group mx-sm-3 mb-2">
        <label>Quantidade</label>
        <input class="form-control col-lg-2" id="quantidade" name="quantidade" type="number" value="1" onblur="valorTotal();">
    </div>

    <div class="form-group mx-sm-3 mb-2">
        <label>Preço unitário</label>
        <input class="form-control col-lg-2" id="preco" name="preco" value="" onblur="valorTotal();valorTotalDoPedido();dataHoje();">
    </div>

    <div class="form-group mx-sm-3 mb-2">
        <label>Total do produto</label>
        <input class="form-control col-lg-2" id="total_item" name="total_item">
    </div>

    <div class="form-group mx-sm-3 mb-2">
        <label>Total do pedido</label>
        <input class="form-control" id="total" name="total">
    </div>

    <div class="form-group mx-sm-3 mb-2">
        <input type="hidden" id="emissao" name="emissao" value="">
    </div>
    <button type="submit" class="btn btn-success btn-lg">Salvar</button>
</form>
<script type="text/javascript">
    function valorTotal() {
        var quantidade = document.getElementById('quantidade').value;
        var preco = document.getElementById('preco').value;
        document.getElementById('total_item').value = quantidade * preco;
    }

    function valorTotalDoPedido() {
        var total_item = document.getElementById('total_item').value;
        var total_pedido = document.getElementById('total').value;
        document.getElementById('total').value = total_item + total_pedido;
    }

    function dataHoje() {
        now = new Date();
        var dataEHora = (now.getFullYear() + "-" + now.getMonth() + "-" + now.getDay() + " " + now.getHours() + ":" + now.getMinutes() + ":" + now.getSeconds());
        document.getElementById('emissao').value = dataEHora;
    }
</script>
@endsection