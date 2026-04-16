<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-zinc-950 text-white min-h-screen flex items-center justify-center">
    <div class="w-full max-w-xl rounded-xl border border-zinc-800 bg-zinc-900 p-8 shadow-xl">
        <h1 class="text-3xl font-black mb-4">Dashboard</h1>

        <p class="text-zinc-300 mb-2">
            <strong>ID:</strong> {{ session('usuario_id') }}
        </p>

        <p class="text-zinc-300 mb-2">
            <strong>Usuário:</strong> {{ session('usuario_nome') }}
        </p>

        <p class="text-zinc-300 mb-6">
            <strong>Email:</strong> {{ session('usuario_email') }}
        </p>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button
                type="submit"
                class="rounded-md bg-red-700 px-5 py-3 font-bold uppercase tracking-wide hover:bg-red-600 transition"
            >
                Sair
            </button>
        </form>
    </div>
</body>
</html>