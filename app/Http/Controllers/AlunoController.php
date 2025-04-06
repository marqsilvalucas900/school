<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    /**
     * Lista todos os alunos.
     */
    public function index()
    {
        $alunos = Aluno::all();
        return view('alunos.index', compact('alunos'));
    }

    /**
     * Exibe o formulário de criação de um novo aluno.
     */
    public function create()
    {
        return view('alunos.create');
    }

    /**
     * Armazena um novo aluno no banco de dados.
     */
    public function store(Request $request) 
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'turma' => 'nullable|string|max:50',
            'contato' => 'nullable|string|max:100',
            'data_nascimento' => 'nullable|date',
        ]);

        Aluno::create($request->all());

        return redirect()->route('alunos.index')
                         ->with('success', 'Aluno criado com sucesso.');
    }

    /**
     * Exibe o formulário para editar um aluno.
     */
    public function edit($id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('alunos.edit', compact('aluno'));
    }

    /**
     * Atualiza um aluno no banco de dados.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'turma' => 'nullable|string|max:50',
            'contato' => 'nullable|string|max:100',
            'data_nascimento' => 'nullable|date',
        ]);

        $aluno = Aluno::findOrFail($id);
        $aluno->update($request->all());

        return redirect()->route('alunos.index')
                         ->with('success', 'Aluno atualizado com sucesso.');
    }

    /**
     * Exclui um aluno do banco de dados.
     */
    public function destroy($id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();

        return redirect()->route('alunos.index')
                         ->with('success', 'Aluno excluído com sucesso.');
    }
}
