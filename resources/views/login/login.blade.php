<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')
    <title>Login - Sistema de Gestão</title>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Main Content Area -->
    <div class="container mx-auto h-screen flex justify-center items-center">
        <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-center mb-6">Login</h2>

            <!-- Login Form -->
            <form method="POST" action="{{ route('login-teste') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">E-mail:</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('email')
                        <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Senha:</label>
                    <input id="password" type="password" name="password" required
                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('password')
                        <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Remember Me -->
<!--                 <div class="mb-4">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="remember" class="form-checkbox text-indigo-600">
                        <span class="ml-2 text-gray-700">Lembrar-me</span>
                    </label>
                </div> -->

                <!-- Submit Button -->
                <div class="mb-6">
                    <button type="submit"
                            class="w-full bg-indigo-600 text-white font-bold py-2 px-4 rounded hover:bg-indigo-700 focus:outline-none focus:shadow-outline">
                        Entrar
                    </button>
                </div>

                <!-- Forgot Password -->
                <!-- <div class="text-center">
                    @if (Route::has('password.request'))
                        <a class="inline-block align-baseline text-sm text-indigo-600 hover:text-indigo-800"
                           href="{{ route('password.request') }}">
                            Esqueceu sua senha?
                        </a>
                    @endif
                </div> -->
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 p-4 mt-8">
        <div class="container mx-auto text-center text-gray-400">
            &copy; {{ date('Y') }} Sistema de Gestão. Todos os direitos reservados.
        </div>
    </footer>

</body>
</html>
