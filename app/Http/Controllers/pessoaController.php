<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoa;

// controller referente as pessoas, operações de insert, create, delete, update, validate, edit e show 

class pessoaController extends Controller
{
	public function index()
    {
        $pessoas = \App\Pessoa::all();
        return view('Pessoa.index', compact('pessoas'));
    }

    public function create()
    {
        return view('Pessoa.criar');
    }

    public function store(Request $request)
    {
        $data = $this->_validate($request);
        $data['defaulter'] = $request->has('defaulter');
        Pessoa::create($data);
        return redirect()->route('pessoas.index');

    }

    public function show($id)
    {
        $pessoa = Pessoa::findOrFail($id);
        return view('Pessoa.apresentar', compact('pessoa'));
    }

    public function edit($id)
    {
        $pessoa = Pessoa::findOrFail($id);
        return view('Pessoa.editar', compact('pessoa'));
    }

    public function update(Request $request, Pessoa $pessoa)
    {
        $data = $this->_validate($request);
        $data['defaulter'] = $request->has('defaulter');
        $pessoa->fill($data);
        $pessoa->save();
        return redirect()->route('pessoas.index');
    }

    public function destroy($id)
    {
        $pessoa = Pessoa::findOrFail($id);
        $pessoa->delete();
        return redirect()->route('pessoas.index');
    }

    private function _validate(Request $request)
    {
        $pessoa = $request->route('pessoa');
        $pessoaId = $pessoa instanceof Pessoa ? $pessoa->id : null;
        $this->validate($request,[
            'nome' => "required|max:255|unique:pessoas,nome,$pessoaId",
            'cpf' => "required|max:11|unique:pessoas,cpf,$pessoaId",
            'data_nascimento' => 'required|date'
        ]);
        return $request->all();
    }
    
}
