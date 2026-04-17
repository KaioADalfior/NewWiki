<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Fanfic</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-zinc-950 text-zinc-100">
    <div class="mx-auto max-w-5xl px-4 py-8">
        <a href="{{ route('perfil') }}" class="mb-6 inline-block border border-zinc-700 bg-zinc-900 px-4 py-2 text-sm font-bold uppercase tracking-[0.16em] text-zinc-300">
            ← Voltar
        </a>

        @if ($errors->any())
            <div class="mb-6 border border-red-900/60 bg-red-950/20 px-5 py-4 text-sm text-red-300">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <div class="border border-zinc-800 bg-zinc-900 p-6 shadow-[0_20px_70px_rgba(0,0,0,0.45)]">
            <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                {{ $categoria->nome }}
            </div>

            <h1 class="mt-2 text-3xl font-black text-white">Criar fanfic</h1>
            <p class="mt-2 text-zinc-400">Preencha os dados principais. Os capítulos serão adicionados depois.</p>

            <form action="{{ route('fanfics.salvar') }}" method="POST" enctype="multipart/form-data" class="mt-6 space-y-5">
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
                        Resumo
                    </label>
                    <textarea name="resumo" rows="4"
                        class="w-full border border-zinc-800 bg-zinc-950 px-4 py-3 text-zinc-100 focus:border-red-700 focus:outline-none">{{ old('resumo') }}</textarea>
                </div>

                <div>
                    <label class="mb-2 block text-xs font-extrabold uppercase tracking-[0.16em] text-zinc-500">
                        Introdução
                    </label>
                    <textarea name="introducao" rows="8"
                        class="w-full border border-zinc-800 bg-zinc-950 px-4 py-3 text-zinc-100 focus:border-red-700 focus:outline-none">{{ old('introducao') }}</textarea>
                </div>

                <div>
                    <label class="mb-2 block text-xs font-extrabold uppercase tracking-[0.16em] text-zinc-500">
                        Capa
                    </label>
                    <input type="file" name="capa" accept="image/*"
                        class="w-full border border-zinc-800 bg-zinc-950 px-4 py-3 text-zinc-300 file:mr-4 file:border-0 file:bg-red-700 file:px-4 file:py-2 file:text-white file:cursor-pointer">
                </div>

                <button type="submit"
                    class="bg-red-700 px-6 py-3 text-sm font-black uppercase tracking-[0.16em] text-white transition hover:bg-red-600">
                    Criar fanfic
                </button>
            </form>
        </div>
    </div>
</body>
</html>