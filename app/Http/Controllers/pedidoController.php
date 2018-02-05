<?php

namespace App\Http\Controllers;

use App\ItemPedido;
use App\Pedido;
use App\Pessoa;
use App\Produto;
use Illuminate\Http\Request;

// controller referente aos pedidos e itens_pedidos, operações de insert, create, delete, update, validate, edit e show 

class pedidoController extends Controller
{
    public function index()
    {
        $pedidos = \App\Pedido::all();
        return view('Pedido.index', compact('pedidos'));
    }

    public function create()
    {
        $pessoas = Pessoa::all();
        $produtos = Produto::all();
        return view('Pedido.criar', compact('pessoas', 'produtos'));
    }
   
    public function store(Request $request)
    {
        $numero = Pedido::select()->count();
        $numero++;

        $data = $this->_validate($request);
        $data['defaulter'] = $request->has('defaulter');
        $arrayNumero = array('numero' => $numero);
        $resultado = array_merge($data, $arrayNumero);
        $pedido = Pedido::create($resultado);

        $itemPedido['pedido_id'] = $pedido->id;
        $itemPedido['produto_id'] = $resultado['produto_id'];
        $itemPedido['quantidade'] = $resultado['quantidade'];
        $itemPedido['preco'] = $resultado['preco'];

        $id_produto = $resultado['produto_id'];
        $produto = Produto::findOrFail($id_produto);

        $itemPedido['desconto'] = (($produto->preco / $resultado['preco']) - 1) * 100;
        $itemPedido['total'] = $resultado['total'];

        ItemPedido::create($itemPedido);

        return redirect()->route('pedidos.index');
    }

    public function show(Pedido $pedido)
    {
        $itens_pedido = ItemPedido::where('pedido_id', '=', $pedido->id);
        $cliente = Pessoa::findOrFail($pedido->pessoa_id);
        return view('Pedido.apresentar', compact('pedido','produto', 'cliente'));
    }

    public function edit(Pedido $pedido)
    {
        $produtos = Produto::all();
        return view('Pedido.editar', compact('pedido', 'produtos'));
    }

    public function update(Request $request, Pedido $pedido)
    {
        $data = $this->_validate($request);
        $data['defaulter'] = $request->has('defaulter');

        $itemPedido['pedido_id'] = $pedido->id;
        $itemPedido['produto_id'] = $data['produto_id'];
        $itemPedido['quantidade'] = $data['quantidade'];
        $itemPedido['preco'] = $data['preco'];

        $id_produto = $data['produto_id'];
        $produto = Produto::findOrFail($id_produto);

        $itemPedido['desconto'] = (($produto->preco / $data['preco']) - 1) * 100;
        $itemPedido['total'] = $data['total'];
        ItemPedido::create($itemPedido);

        $pedidoAntigo = Pedido::findOrFail($pedido->id);
        $valorAntigo = $pedidoAntigo->total;
        $valorNovo = $valorAntigo + $data['total'];
        $data['total'] = $valorNovo;

        $pedido->fill($data);
        $pedido->save();

        return redirect()->route('pedidos.index');
    }

    public function destroy(Pedido $pedido)
    {
        $itens_pedido = ItemPedido::where('pedido_id', '=', $pedido->id);
        $itens_pedido->delete();
        $pedido->delete();
        return redirect()->route('pedidos.index');
    }

    public function _validate(Request $request)
    {
        $pedido = $request->route('pedido');
        $pedidoId = $pedido instanceof Pedido ? $pedido->id : null;
        return $request->all();
    }

    
}
