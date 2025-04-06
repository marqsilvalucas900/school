@extends('layouts.app2')

@section('title', 'Dashboard')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold">Lista de Alunos</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($periodos as $periodo)
            <a href="{{ route('turmas.por.periodo', $periodo->id) }} " class="block">
                <div class="cursor-pointer p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                    <h2 class="text-xl font-semibold">{{ $periodo->descricao }}</h2>
                    <p class="mt-2">Ano: {{ $periodo->ano }}</p>
                    <p class="mt-1 text-sm">ID: {{ $periodo->id }}</p>
                </div>
            </a>
        @endforeach
    </div>
@endsection
