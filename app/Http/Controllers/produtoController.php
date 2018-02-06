<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

// controller referente aos produtos, operações de insert, create, delete, update, validate, edit e show 

class produtoController extends Controller
{

	public function index()
    {
        $produtos = \App\Produto::all();
        return view('Produto.index', compact('produtos'));
    }

    public function create(){
    	return view('Produto.criar');
    }

    public function store(Request $request)
    {
        $data = $this->_validate($request);
        $data['defaulter'] = $request->has('defaulter');
        Produto::create($data);
        return redirect()->route('produtos.index');
    }

    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('Produto.apresentar', compact('produto'));
    }

    
    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('Produto.editar', compact('produto'));
    }

    public function update(Request $request, Produto $produto)
    {
        $data = $this->_validate($request);
        $data['defaulter'] = $request->has('defaulter');
        $produto->fill($data);
        $produto->save();
        return redirect()->route('Produto.index');
    }

    
    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return redirect()->route('produtos.index');
    }

    private function _validate (Request $request)
    {
        $produto = $request->route('produto');
        $produtoId = $produto instanceof Produto ? $produto->id : null;
        $this->validate($request,[
            'codigo' => "required|max:10|unique:produtos,codigo,$produtoId",
            'nome' => "required|max:255|unique:produtos,nome,$produtoId",
        ]);
        return $request->all();
    }
}






