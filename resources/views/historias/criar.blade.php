<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escrever História</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-zinc-950 text-zinc-100">
    <div class="mx-auto max-w-5xl px-4 py-8">
        <a href="{{ route('perfil') }}" class="mb-6 inline-block border border-zinc-700 bg-zinc-900 px-4 py-2 text-sm font-bold uppercase tracking-[0.16em] text-zinc-300">
            ← Voltar
        </a>

        <div class="border border-zinc-800 bg-zinc-900 p-6 shadow-[0_20px_70px_rgba(0,0,0,0.45)]">
            <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                {{ $categoria->nome }}
            </div>

            <h1 class="mt-2 text-3xl font-black text-white">Escrever história</h1>

            <form action="{{ route('historias.salvar') }}" method="POST" class="mt-6 space-y-5">
                @csrf

                <input type="hidden" name="categoria_id" value="{{ $categoria->id }}">

                <div>
                    <label class="mb-2 block text-xs font-extrabold uppercase tracking-[0.16em] text-zinc-500">
                        Título
                    </label>
                    <input type="text" name="titulo" value="{{ old('titulo') }}"
                        class="w-full border border-zinc-800 bg-zinc-950 px-4 py-3 text-zinc-100 focus:border-red-700 focus:outline-none">
                </div>

                <div>
                    <label class="mb-2 block text-xs font-extrabold uppercase tracking-[0.16em] text-zinc-500">
                        Conteúdo
                    </label>
                    <textarea name="conteudo" rows="16"
                        class="w-full border border-zinc-800 bg-zinc-950 px-4 py-3 text-zinc-100 focus:border-red-700 focus:outline-none">{{ old('conteudo') }}</textarea>
                </div>

                <button type="submit"
                    class="bg-red-700 px-6 py-3 text-sm font-black uppercase tracking-[0.16em] text-white transition hover:bg-red-600">
                    Publicar história
                </button>
            </form>
        </div>
    </div>
</body>
</html>