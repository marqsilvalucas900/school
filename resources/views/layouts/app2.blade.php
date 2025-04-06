<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')
    <title>@yield('title', 'Sistema de Gestão')</title>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Navbar -->
    <x-my-components.navbar />

    <!-- Main Content Area -->
    <div class="container mx-auto mt-6">
        <div class="flex flex-col md:flex-row">
            <!-- Sidebar -->
            <x-my-components.sidebar />

            <!-- Page Content -->
            <main class="w-full md:w-3/4 bg-white rounded-lg p-6 shadow-md ml-0 md:ml-6">
                <h1 class="text-2xl font-semibold mb-6">@yield('title')</h1>

                <!-- Dynamic content will be inserted here -->
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Footer -->
    <x-my-components.footer />
    @vite('resources/js/app.js')
</body>
</html>
