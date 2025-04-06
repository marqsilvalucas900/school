@extends('layouts.app')

@section('title', 'Lista de Disciplinas')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold">Lista de Disciplinas</h2>
        <a href="{{ url('/disciplinas/create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Adicionar Disciplina
        </a>
    </div>

    <table class="min-w-full bg-white border">
        <thead>
            <tr class="w-full bg-gray-100 border-b">
                <th class="py-2 px-4 text-left">Nome</th>
                <th class="py-2 px-4 text-left">Descricao</th>
                <th class="py-2 px-4 text-left">Professor</th>
                <th class="py-2 px-4 text-left">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($disciplinas as $disciplina)
                <tr class="border-b">
                    <td class="py-2 px-4"> {{ $disciplina->nome }}</td>
                    <td class="py-2 px-4"> {{ $disciplina->descricao }}</td>
                    <td class="py-2 px-4">
                        @if($disciplina->professor)
                            @foreach($disciplina->professor as $professor)
                                {{ $professor->nome }}{{ !$loop->last ? ',' : '' }}
                            @endforeach
                        @else
                            Sem professores
                        @endif
                    </td>
                    <td class="py-2 px-4">
                        <a href="{{ url('/disciplinas/' . $disciplina->id . '/edit') }}" class="text-blue-500 hover:underline">
                            Editar
                        </a>
                        |
                        <form action="{{ url('/disciplinas/' . $disciplina->id) }}" method="POST" class="inline-block">
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
