<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $historia->titulo }} | HorrorWiki</title>
    <link rel="icon" type="image/png" href="{{ asset('images/icon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-zinc-950 text-zinc-100 antialiased selection:bg-red-700/40 selection:text-white">
    <div class="min-h-screen bg-[radial-gradient(circle_at_top,_rgba(127,29,29,0.22),_transparent_30%),linear-gradient(180deg,_#140406_0%,_#0b0b0d_40%,_#09090b_100%)]">
        <header class="sticky top-0 z-30 border-b border-zinc-800 bg-zinc-950/90 backdrop-blur">
            <div class="mx-auto flex max-w-6xl items-center justify-between gap-4 px-4 py-4">
                <a href="{{ route('explorar.index') }}"
                    class="inline-flex items-center border border-zinc-700 bg-zinc-900 px-4 py-3 text-xs font-black uppercase tracking-[0.16em] text-zinc-200 transition hover:border-red-700 hover:text-white">
                    ← Voltar
                </a>

                <a href="{{ route('home.logado') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="HorrorWiki" class="h-12 w-auto object-contain">
                </a>
            </div>
        </header>

        <main class="mx-auto max-w-4xl px-4 py-10">
            <div class="border border-zinc-800 bg-zinc-900/60 p-6 md:p-8">
                <div class="mb-4 flex flex-wrap items-center gap-2">
                    <span class="bg-red-700 px-3 py-1 text-[10px] font-extrabold uppercase tracking-[0.16em] text-white">
                        História
                    </span>
                    <span class="border border-zinc-700 bg-zinc-950 px-3 py-1 text-[10px] font-bold uppercase tracking-[0.16em] text-zinc-300">
                        {{ $historia->categoria->nome ?? 'Sem categoria' }}
                    </span>
                </div>

                <h1 class="text-3xl font-black tracking-tight text-white md:text-5xl">
                    {{ $historia->titulo }}
                </h1>

                <div class="mt-4 flex flex-wrap items-center gap-x-5 gap-y-2 text-xs uppercase tracking-[0.12em] text-zinc-500">
                    <span>Autor: <strong class="text-zinc-300">{{ $historia->usuario->nome_usuario ?? 'Autor desconhecido' }}</strong></span>
                    <span>Visualizações: <strong class="text-zinc-300">{{ $historia->visualizacoes }}</strong></span>
                    <span>Publicado em:
                        <strong class="text-zinc-300">
                            {{ optional($historia->publicado_em)->format('d/m/Y H:i') }}
                        </strong>
                    </span>
                </div>

                <article class="prose prose-invert prose-zinc mt-8 max-w-none leading-8">
                    {!! nl2br(e($historia->conteudo)) !!}
                </article>
            </div>
        </main>
    </div>
</body>
</html>