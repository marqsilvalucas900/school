<nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <div class="text-white text-lg font-semibold">
            <a href="{{ url('/') }}">Sistema de Gestão</a>
        </div>
        
        <!-- User Profile Section -->
        <div x-data="{ open: false }" class="relative">
            <!-- Botão para abrir o dropdown -->
            <button @click="open = !open" class="flex items-center space-x-2 focus:outline-none">
                <img src="{{ asset('path/to/user/photo.jpg') }}" alt="Foto do Usuário" class="w-10 h-10 rounded-full">
                <span class="text-white">{{ Auth::user()->name }}</span>
            </button>

            <!-- Dropdown de Perfil -->
            <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2" x-transition>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Perfil</a>
                <a href="{{ route('logout') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Logout</a>
            </div>
        </div>
    </div>
</nav>
