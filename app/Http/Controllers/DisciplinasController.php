<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disciplina;
use App\Models\Aluno;
use App\Models\Professor;

class DisciplinasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $disciplinas = Disciplina::all();
        return view('disciplinas.index',compact('disciplinas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $professores = Professor::all();
        return view('disciplinas.create',compact('professores'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'professor_id' => 'nullable|exists:professores,id',

        ]);

        Disciplina::create($request->all());

        return redirect()->route('disciplinas.index')
                         ->with('success', 'Disciplina criado com sucesso');

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $disciplina = Disciplina::findOrFail($id);
        $professores = Professor::all();
        return view('disciplinas.edit', compact('disciplina','professores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'turma' => 'nullable|string|max:50',
            'contato' => 'nullable|string|max:100',
            'data_nascimento' => 'nullable|date',
        ]);


        $disciplina = Disciplina::findOrFail($id);
        $disciplina->update($request->all());

        return redirect()->route('disciplinas.index')
                         ->with('success', 'Disciplina atualizada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
