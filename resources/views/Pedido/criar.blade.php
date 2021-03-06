@extends('layouts.navbar')
@section('conteudo')
    <h1 class="text-center">Novo Pedido</h1>
    <br/>
    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form method="post" action="/pedidos">
        {{ csrf_field() }}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="row">
        <div class="col form-group mx-sm-3 mb-2">
                <label>Cliente</label>
                <select class="form-control" id="pessoa_id" name="pessoa_id">
                    <option value="0">Selecione o Cliente</option>
                    @foreach($pessoas as $pessoa)
                        <option value="{{$pessoa->id}}">{{$pessoa->nome}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col form-group mx-sm-3 mb-2">
                <label>Produto</label>
                <select class="form-control" name="produto_id" id="produto_id">
                    <option value="0">Selecione o Produto</option>
                    @foreach($produtos as $produto)
                        <option value="{{$produto->id}}">{{$produto->nome}}</option>
                    @endforeach
                </select>

            </div>
    </div>
        <div class="form-group mx-sm-3 mb-2">
            <label>Quantidadde</label>
            <input class="form-control" id="quantidade" name="quantidade" type="number" value="1" onblur="valorTotal();">
        </div>

        <div class="form-group mx-sm-3 mb-2">
            <label>Preço Unitário</label>
            <input class="form-control" id="preco" name="preco" value="" onblur="valorTotal();valorTotalDoPedido();dataHoje();">
        </div>

        <div class="form-group mx-sm-3 mb-2">
            <label>Total do item</label>
            <input class="form-control" id="total_item" name="total_item">
        </div>

        <div class="form-group mx-sm-3 mb-2">
            <label>Total do pedido</label>
            <input class="form-control" id="total" name="total">
        </div>

        <div class="form-group mx-sm-3 mb-2">
            <input type="hidden" id="emissao" name="emissao" value="">
        </div>
        <br>
        <div class="form-group mx-sm-3 mb-2">
            <button type="submit" class="btn btn-success btn-lg">Salvar pedido</button>
        </div>
        
    </form>
@endsection

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