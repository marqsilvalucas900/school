<div x-data="{ open: true }">
    <!-- Botão para recolher/expandir o sidebar -->
    <button @click="open = !open" class="bg-gray-800 text-white px-4 py-2 focus:outline-none">
        <span x-show="open"><-</span>
        <span x-show="!open">-></span>
    </button>

    <!-- Sidebar -->
    <aside x-show="open" class="w-full bg-white rounded-lg p-4 shadow-md" x-transition>
        <h2 class="text-xl font-semibold mb-4">Menu</h2>
        <ul class="space-y-2">
            <li>
                <a href="{{ url('/alunos') }}" class="block text-gray-700 hover:text-gray-900">Gerenciar Alunos</a>
            </li>
            <li>
                <a href="{{ url('/professores') }}" class="block text-gray-700 hover:text-gray-900">Gerenciar Professores</a>
            </li>
            <li>
                <a href="{{ url('/disciplinas') }}" class="block text-gray-700 hover:text-gray-900">Gerenciar Disciplinas</a>
            </li>
            <li>
                <a href="{{ url('/notas') }}" class="block text-gray-700 hover:text-gray-900">Gerenciar Notas</a>
            </li>
        </ul>
    </aside>
</div>
