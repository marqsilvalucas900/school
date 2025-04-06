@extends('layouts.app2')

@section('title', 'Lista de Alunos')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold">Lista de Alunos</h2>
        <a href="{{ url('gestor/alunos/create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Adicionar Aluno
        </a>
    </div>

    <table class="min-w-full bg-white border">
        <thead>
            <tr class="w-full bg-gray-100 border-b">
                <th class="py-2 px-4 text-left">Nome</th>
                <th class="py-2 px-4 text-left">Turma</th>
                <th class="py-2 px-4 text-left">Contato</th>
                <th class="py-2 px-4 text-left">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alunos as $aluno)
                <tr class="border-b">
                    <td class="py-2 px-4">{{ $aluno->nome }}</td>
                    <td class="py-2 px-4">{{ $aluno->turma }}</td>
                    <td class="py-2 px-4">{{ $aluno->contato }}</td>
                    <td class="py-2 px-4">
                        <a href="{{ url('/alunos/' . $aluno->id . '/edit') }}" class="text-blue-500 hover:underline">
                            Editar
                        </a>
                        |
                        <form action="{{ url('/alunos/' . $aluno->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
