<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function index()
    {
        $servicos = Servico::all();
        return view('admin.painel.servicos.servicos', compact('servicos'));
    }

    public function create()
    {
        return view('admin.painel.servicos.criar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'valor' => 'required|numeric',
            'duracao' => 'required|integer',
            'descricao' => 'required|string|max:100',
        ]);

        Servico::create($request->all());
        return redirect()->route('servicos.index')->with('success', 'Serviço criado!');
    }

    public function edit($id)
    {
        $servico = Servico::findOrFail($id);
        return view('admin.painel.servicos.editar', compact('servico'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'valor' => 'required|numeric',
            'duracao' => 'required|integer',
            'descricao' => 'required|string|max:100',
        ]);

        $servico = Servico::findOrFail($id);
        $servico->update($request->all());
        return redirect()->route('servicos.index')->with('success', 'Serviço atualizado!');
    }

    public function destroy($id)
    {
        $servico = Servico::findOrFail($id);
        $servico->delete();
        return redirect()->route('servicos.index')->with('success', 'Serviço removido!');
    }
}
