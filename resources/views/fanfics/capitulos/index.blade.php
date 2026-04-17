<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capítulos da Fanfic</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-zinc-950 text-zinc-100">
    <div class="mx-auto max-w-6xl px-4 py-8">
        <a href="{{ route('perfil') }}" class="mb-6 inline-block border border-zinc-700 bg-zinc-900 px-4 py-2 text-sm font-bold uppercase tracking-[0.16em] text-zinc-300">
            ← Voltar ao perfil
        </a>

        @if (session('sucesso'))
            <div class="mb-6 border border-emerald-900/60 bg-emerald-950/20 px-5 py-4 text-sm text-emerald-300">
                {{ session('sucesso') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-6 border border-red-900/60 bg-red-950/20 px-5 py-4 text-sm text-red-300">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <div class="grid gap-8 lg:grid-cols-[320px_minmax(0,1fr)]">
            <aside class="border border-zinc-800 bg-zinc-900 p-5">
                @if($fanfic->capa)
                    <img src="{{ asset('storage/' . $fanfic->capa) }}" alt="Capa"
                        class="mb-5 h-80 w-full border border-zinc-800 object-cover">
                @endif

                <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                    Fanfic
                </div>

                <h1 class="mt-2 text-3xl font-black text-white">{{ $fanfic->titulo }}</h1>

                @if($fanfic->resumo)
                    <p class="mt-4 text-sm leading-6 text-zinc-300">{{ $fanfic->resumo }}</p>
                @endif

                <div class="mt-6 grid gap-3">
                    <a href="{{ route('fanfics.capitulos.criar', $fanfic->id) }}"
                        class="block bg-red-700 px-4 py-3 text-center text-sm font-black uppercase tracking-[0.16em] text-white transition hover:bg-red-600">
                        Novo capítulo
                    </a>

                    <a href="{{ route('fanfics.visualizar', $fanfic->slug) }}"
                        class="block border border-zinc-700 bg-zinc-950 px-4 py-3 text-center text-sm font-black uppercase tracking-[0.16em] text-zinc-200 transition hover:border-red-700 hover:text-white">
                        Ver fanfic publicada
                    </a>
                </div>
            </aside>

            <section class="border border-zinc-800 bg-zinc-900 p-6">
                <div class="flex items-center justify-between gap-4 border-b border-zinc-800 pb-4">
                    <div>
                        <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                            Capítulos
                        </div>
                        <h2 class="mt-2 text-2xl font-black text-white">Gerenciar capítulos</h2>
                    </div>

                    <div class="text-sm text-zinc-500">
                        {{ $fanfic->capitulos->count() }} capítulo(s)
                    </div>
                </div>

                <div class="mt-6 space-y-4">
                    @forelse($fanfic->capitulos as $capitulo)
                        <div class="border border-zinc-800 bg-black/20 p-4">
                            <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                                <div>
                                    <div class="text-xs font-extrabold uppercase tracking-[0.18em] {{ $capitulo->publicado ? 'text-emerald-400' : 'text-amber-400' }}">
                                        {{ $capitulo->publicado ? 'Publicado' : 'Rascunho' }}
                                    </div>
                                    <h3 class="mt-2 text-xl font-black text-white">
                                        Capítulo {{ $capitulo->numero }} — {{ $capitulo->titulo }}
                                    </h3>
                                </div>

                                <div class="flex flex-wrap gap-2">
                                    <a href="{{ route('fanfics.capitulos.editar', [$fanfic->id, $capitulo->id]) }}"
                                        class="border border-zinc-700 bg-zinc-950 px-4 py-2 text-xs font-black uppercase tracking-[0.16em] text-zinc-200 transition hover:border-red-700 hover:text-white">
                                        Editar
                                    </a>

                                    <form action="{{ route('fanfics.capitulos.publicar', [$fanfic->id, $capitulo->id]) }}" method="POST">
                                        @csrf
                                        <button type="submit"
                                            class="bg-red-700 px-4 py-2 text-xs font-black uppercase tracking-[0.16em] text-white transition hover:bg-red-600">
                                            {{ $capitulo->publicado ? 'Despublicar' : 'Publicar' }}
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="border border-zinc-800 bg-black/20 p-5 text-zinc-400">
                            Nenhum capítulo criado ainda.
                        </div>
                    @endforelse
                </div>
            </section>
        </div>
    </div>
</body>
</html>