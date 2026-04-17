<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $fanfic->titulo }} - Capítulo {{ $capitulo->numero }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen overflow-x-hidden bg-zinc-950 text-zinc-100">
    <div class="mx-auto max-w-4xl px-4 py-8">
        <a href="{{ route('fanfics.visualizar', $fanfic->slug) }}" class="mb-6 inline-block border border-zinc-700 bg-zinc-900 px-4 py-2 text-sm font-bold uppercase tracking-[0.16em] text-zinc-300">
            ← Voltar para a fanfic
        </a>

        <article class="min-w-0 border border-zinc-800 bg-zinc-900 p-6 shadow-[0_20px_70px_rgba(0,0,0,0.45)]">
            <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                {{ $fanfic->titulo }}
            </div>

            <h1 class="mt-2 break-words text-3xl font-black text-white">
                Capítulo {{ $capitulo->numero }} — {{ $capitulo->titulo }}
            </h1>

            <div class="mt-8 overflow-hidden break-words whitespace-pre-wrap leading-8 text-zinc-300">
                {{ $capitulo->conteudo }}
            </div>

            <div class="mt-10 flex flex-wrap justify-between gap-3 border-t border-zinc-800 pt-6">
                <div>
                    @if($anterior)
                        <a href="{{ route('fanfics.capitulos.visualizar', [$fanfic->slug, $anterior->numero]) }}"
                            class="inline-block border border-zinc-700 bg-zinc-950 px-4 py-3 text-sm font-black uppercase tracking-[0.16em] text-zinc-200 transition hover:border-red-700 hover:text-white">
                            ← Capítulo anterior
                        </a>
                    @endif
                </div>

                <div>
                    @if($proximo)
                        <a href="{{ route('fanfics.capitulos.visualizar', [$fanfic->slug, $proximo->numero]) }}"
                            class="inline-block bg-red-700 px-4 py-3 text-sm font-black uppercase tracking-[0.16em] text-white transition hover:bg-red-600">
                            Próximo capítulo →
                        </a>
                    @endif
                </div>
            </div>
        </article>
    </div>
</body>
</html>