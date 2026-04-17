
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $fanfic->titulo }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-zinc-950 text-zinc-100">
    <div class="mx-auto max-w-6xl px-4 py-8">
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

                <div class="mt-3 text-sm text-zinc-500">
                    Por {{ $fanfic->usuario->nome_usuario ?? 'Autor' }}
                </div>

                @if($fanfic->resumo)
                    <p class="mt-4 text-sm leading-6 text-zinc-300">{{ $fanfic->resumo }}</p>
                @endif

                <div class="mt-6 border border-zinc-800 bg-black/20 p-4 text-sm text-zinc-400">
                    {{ $fanfic->capitulos->count() }} capítulo(s) publicado(s)
                </div>
            </aside>

            <section class="border border-zinc-800 bg-zinc-900 p-6">
                <div class="border-b border-zinc-800 pb-4">
                    <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                        Introdução
                    </div>
                    <h2 class="mt-2 text-2xl font-black text-white">Sobre esta fanfic</h2>
                </div>

                <div class="mt-6 space-y-6">
                    @if($fanfic->introducao)
                        <div class="whitespace-pre-line leading-8 text-zinc-300">{{ $fanfic->introducao }}</div>
                    @endif

                    <div class="border-t border-zinc-800 pt-6">
                        <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                            Capítulos
                        </div>

                        <div class="mt-4 space-y-3">
                            @forelse($fanfic->capitulos as $capitulo)
                                <a href="{{ route('fanfics.capitulos.visualizar', [$fanfic->slug, $capitulo->numero]) }}"
                                    class="block border border-zinc-800 bg-black/20 p-4 transition hover:border-red-700 hover:bg-zinc-800">
                                    <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-zinc-500">
                                        Capítulo {{ $capitulo->numero }}
                                    </div>
                                    <div class="mt-2 text-lg font-black text-white">{{ $capitulo->titulo }}</div>
                                </a>
                            @empty
                                <div class="border border-zinc-800 bg-black/20 p-4 text-zinc-400">
                                    Nenhum capítulo publicado ainda.
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>
</html>