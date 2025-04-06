@extends('layouts.app')

@section('title', 'Editar Aluno')

@section('content')
    <form action="{{ route('disciplinas.update', $disciplina->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-4">
            <label class="block text-gray-700">Nome</label>
            <input type="text" name="nome" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('nome', $disciplina->nome) }}" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Descricao</label>
            <input type="text" name="descricao" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('descricao', $disciplina->descricao) }}">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Professor</label>
            <select name="professor_id" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Selecione um professor</option>
                @foreach($professores as $professor)
                    <option value="{{ $professor->id }}" 
                        {{ (old('professor_id') ?? $disciplina->professor_id ?? '') == $professor->id ? 'selected' : '' }}>
                        {{ $professor->nome }}
                    </option>
                @endforeach
            </select>
        </div>



        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
            Atualizar
        </button>

        <!-- Botão Cancelar -->
        <a href="{{ route('disciplinas.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 ml-4">
            Cancelar
        </a>
    </form>
@endsection
