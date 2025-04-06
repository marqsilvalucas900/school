@extends('layouts.app')

@section('title', 'Editar Aluno')

@section('content')
    <form action="{{ route('alunos.update', $aluno->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-4">
            <label class="block text-gray-700">Nome</label>
            <input type="text" name="nome" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('nome', $aluno->nome) }}" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Turma</label>
            <input type="text" name="turma" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('turma', $aluno->turma) }}">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Contato</label>
            <input type="text" name="contato" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('contato', $aluno->contato) }}">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Data de Nascimento</label>
            <input type="date" name="data_nascimento" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('data_nascimento', $aluno->data_nascimento) }}">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
            Atualizar
        </button>

        <!-- Botão Cancelar -->
        <a href="{{ route('alunos.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 ml-4">
            Cancelar
        </a>
    </form>
@endsection
