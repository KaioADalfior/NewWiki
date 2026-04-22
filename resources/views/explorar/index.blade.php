<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HorrorWiki | Explorar</title>
    <meta name="description" content="Explore histórias e fanfics sombrias na HorrorWiki.">
    <link rel="icon" type="image/png" href="{{ asset('images/icon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-zinc-950 text-zinc-100 antialiased selection:bg-red-700/40 selection:text-white overflow-x-hidden">
    <div
        class="min-h-screen bg-[radial-gradient(circle_at_top,_rgba(127,29,29,0.18),_transparent_24%),linear-gradient(180deg,_#140406_0%,_#0b0b0d_45%,_#09090b_100%)]">

        {{-- HEADER --}}
        <header class="sticky top-0 z-30 border-b border-zinc-800 bg-zinc-950/90 backdrop-blur">
            <div class="mx-auto flex max-w-[1440px] items-center justify-between gap-4 px-4 py-3 md:px-8">
                <div class="flex items-center gap-3">
                    <a href="{{ route('home.logado') }}"
                        class="inline-flex items-center gap-2 border border-zinc-800 bg-zinc-900 px-4 py-2 text-xs font-black uppercase tracking-[0.16em] text-zinc-300 transition hover:border-red-700 hover:bg-zinc-800 hover:text-white">
                        ← Voltar
                    </a>

                    <img src="{{ asset('images/logo.png') }}" alt="HorrorWiki"
                        class="h-10 w-auto object-contain md:h-12">
                </div>

                <div class="hidden md:block text-right">
                    <div class="text-[11px] font-extrabold uppercase tracking-[0.18em] text-zinc-500">
                        Biblioteca das Sombras
                    </div>
                    <div class="mt-1 text-sm font-bold text-white">
                        Explorar histórias e fanfics
                    </div>
                </div>
            </div>
        </header>

        {{-- HERO --}}
        <section class="relative overflow-hidden border-b border-zinc-800">
            <div
                class="absolute inset-0 bg-[radial-gradient(circle_at_18%_18%,rgba(239,68,68,0.10),transparent_18%),radial-gradient(circle_at_82%_20%,rgba(168,85,247,0.06),transparent_16%),radial-gradient(circle_at_50%_78%,rgba(220,38,38,0.08),transparent_18%)]">
            </div>

            <div class="relative mx-auto max-w-[1440px] px-4 py-10 md:px-8 md:py-14">
                <div class="mx-auto max-w-6xl">
                    <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
                        <div class="max-w-3xl">
                            <div
                                class="inline-flex items-center gap-2 border border-red-900/60 bg-black/30 px-4 py-1.5 text-[11px] font-extrabold uppercase tracking-[0.18em] text-red-300 backdrop-blur">
                                <span class="h-2 w-2 rounded-full bg-red-500"></span>
                                Explorar acervo
                            </div>

                            <h1 class="mt-4 text-4xl font-black tracking-tight text-white md:text-6xl">
                                Todas as histórias e fanfics
                            </h1>

                            <p class="mt-4 max-w-2xl text-sm leading-7 text-zinc-400 md:text-base">
                                Pesquise títulos, categorias, autores e assuntos. Descubra relatos macabros, fanfics
                                perturbadoras e narrativas sombrias em um só lugar.
                            </p>
                        </div>

                        <div class="grid grid-cols-2 gap-3 sm:grid-cols-3">
                            <div class="border border-zinc-800 bg-zinc-900/60 px-4 py-4 text-center">
                                <div class="text-2xl font-black text-white">{{ $itens->count() }}</div>
                                <div class="mt-1 text-[11px] font-bold uppercase tracking-[0.16em] text-zinc-500">
                                    Resultados
                                </div>
                            </div>

                            <div class="border border-zinc-800 bg-zinc-900/60 px-4 py-4 text-center">
                                <div class="text-2xl font-black text-white">
                                    {{ $tipo === 'todos' ? 'T' : ($tipo === 'historias' ? 'H' : 'F') }}
                                </div>
                                <div class="mt-1 text-[11px] font-bold uppercase tracking-[0.16em] text-zinc-500">
                                    Filtro
                                </div>
                            </div>

                            <div class="border border-zinc-800 bg-zinc-900/60 px-4 py-4 text-center col-span-2 sm:col-span-1">
                                <div class="text-2xl font-black text-white">
                                    {{ $busca !== '' ? 'ON' : 'OFF' }}
                                </div>
                                <div class="mt-1 text-[11px] font-bold uppercase tracking-[0.16em] text-zinc-500">
                                    Busca
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- FILTROS --}}
                    <div class="mt-8 border border-zinc-800 bg-zinc-900/70 p-4 shadow-[0_20px_60px_rgba(0,0,0,0.30)] md:p-5">
                        <form method="GET" action="{{ route('explorar.index') }}" class="grid gap-4 lg:grid-cols-[1fr_220px_180px]">
                            <div
                                class="flex items-center border border-zinc-700 bg-zinc-950 px-4 py-3 transition focus-within:border-red-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 h-5 w-5 text-zinc-500"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2"
                                        d="M21 21l-4.35-4.35m1.35-5.15a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>

                                <input type="text" name="q" value="{{ $busca }}"
                                    placeholder="Pesquisar por título, autor, categoria ou assunto..."
                                    class="w-full bg-transparent text-sm text-zinc-200 placeholder:text-zinc-500 focus:outline-none">
                            </div>

                            <select name="tipo"
                                class="border border-zinc-700 bg-zinc-950 px-4 py-3 text-sm text-zinc-200 focus:border-red-700 focus:outline-none">
                                <option value="todos" {{ $tipo === 'todos' ? 'selected' : '' }}>Todos os conteúdos</option>
                                <option value="historias" {{ $tipo === 'historias' ? 'selected' : '' }}>Somente histórias</option>
                                <option value="fanfics" {{ $tipo === 'fanfics' ? 'selected' : '' }}>Somente fanfics</option>
                            </select>

                            <button type="submit"
                                class="inline-flex items-center justify-center bg-red-700 px-4 py-3 text-sm font-black uppercase tracking-[0.16em] text-white transition hover:bg-red-600">
                                Buscar
                            </button>
                        </form>

                        @if ($busca !== '' || $tipo !== 'todos')
                            <div class="mt-4 flex flex-wrap items-center gap-3 border-t border-zinc-800 pt-4">
                                <div class="text-xs font-extrabold uppercase tracking-[0.16em] text-zinc-500">
                                    Filtros ativos:
                                </div>

                                @if($busca !== '')
                                    <span class="border border-zinc-700 bg-black/20 px-3 py-1 text-xs font-bold text-zinc-300">
                                        Busca: "{{ $busca }}"
                                    </span>
                                @endif

                                @if($tipo !== 'todos')
                                    <span class="border border-zinc-700 bg-black/20 px-3 py-1 text-xs font-bold text-zinc-300">
                                        Tipo: {{ $tipo === 'historias' ? 'Histórias' : 'Fanfics' }}
                                    </span>
                                @endif

                                <a href="{{ route('explorar.index') }}"
                                    class="ml-auto text-xs font-extrabold uppercase tracking-[0.16em] text-red-400 transition hover:text-red-300">
                                    Limpar filtros
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        {{-- LISTA --}}
        <main class="mx-auto max-w-[1440px] px-4 py-10 md:px-8">
            <div class="mx-auto max-w-6xl">
                <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                            Resultados encontrados
                        </div>
                        <h2 class="mt-2 text-2xl font-black text-white">
                            Lista de leitura
                        </h2>
                    </div>

                    <div class="text-sm text-zinc-400">
                        {{ $itens->count() }} item(ns) disponível(is)
                    </div>
                </div>

                <div class="space-y-4">
                    @forelse($itens as $item)
                        <a href="{{ $item->url }}"
                            class="group block overflow-hidden border border-zinc-800 bg-zinc-900/75 shadow-[0_12px_40px_rgba(0,0,0,0.22)] transition duration-300 hover:-translate-y-0.5 hover:border-red-700 hover:bg-zinc-900">
                            <div class="p-5 md:p-6">
                                <div class="flex flex-col gap-5 lg:flex-row lg:items-start lg:justify-between">
                                    <div class="min-w-0 flex-1">
                                        <div class="mb-4 flex flex-wrap items-center gap-2">
                                            @if($item->tipo_item === 'fanfic')
                                                <span
                                                    class="bg-purple-700 px-3 py-1 text-[10px] font-extrabold uppercase tracking-[0.16em] text-white">
                                                    Fanfic
                                                </span>
                                            @else
                                                <span
                                                    class="bg-red-700 px-3 py-1 text-[10px] font-extrabold uppercase tracking-[0.16em] text-white">
                                                    História
                                                </span>
                                            @endif

                                            <span
                                                class="border border-zinc-700 bg-black/20 px-3 py-1 text-[10px] font-bold uppercase tracking-[0.16em] text-zinc-300">
                                                {{ $item->categoria_nome }}
                                            </span>
                                        </div>

                                        <h3
                                            class="text-2xl font-black leading-tight text-white transition group-hover:text-red-400">
                                            {{ $item->titulo }}
                                        </h3>

                                        <p class="mt-3 max-w-4xl text-sm leading-7 text-zinc-400">
                                            {{ $item->resumo ?: 'Sem resumo disponível.' }}
                                        </p>

                                        <div
                                            class="mt-5 flex flex-wrap items-center gap-x-5 gap-y-2 text-[11px] font-bold uppercase tracking-[0.12em] text-zinc-500">
                                            <span>Autor: <strong class="text-zinc-300">{{ $item->autor }}</strong></span>
                                            <span>Categoria: <strong class="text-zinc-300">{{ $item->categoria_nome }}</strong></span>
                                            <span>Visualizações: <strong class="text-zinc-300">{{ $item->visualizacoes }}</strong></span>
                                        </div>
                                    </div>

                                    <div class="flex shrink-0 items-center">
                                        <span
                                            class="inline-flex items-center gap-2 border border-zinc-700 bg-zinc-950 px-4 py-3 text-xs font-black uppercase tracking-[0.16em] text-zinc-200 transition group-hover:border-red-700 group-hover:text-white">
                                            Abrir leitura
                                            <span class="transition group-hover:translate-x-1">→</span>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="h-1 w-0 bg-red-700 transition-all duration-300 group-hover:w-full"></div>
                        </a>
                    @empty
                        <div
                            class="overflow-hidden border border-zinc-800 bg-zinc-900/75 shadow-[0_12px_40px_rgba(0,0,0,0.22)]">
                            <div class="p-8 md:p-12 text-center">
                                <div
                                    class="mx-auto flex h-16 w-16 items-center justify-center border border-zinc-700 bg-zinc-950 text-2xl text-zinc-400">
                                    🔎
                                </div>

                                <h3 class="mt-5 text-2xl font-black text-white">
                                    Nenhum item encontrado
                                </h3>

                                <p class="mx-auto mt-3 max-w-xl text-sm leading-7 text-zinc-400">
                                    Não encontramos histórias ou fanfics com os filtros informados. Tente buscar por
                                    outro título, autor, categoria ou assunto.
                                </p>

                                <div class="mt-6">
                                    <a href="{{ route('explorar.index') }}"
                                        class="inline-flex items-center justify-center bg-red-700 px-5 py-3 text-sm font-black uppercase tracking-[0.16em] text-white transition hover:bg-red-600">
                                        Ver tudo novamente
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </main>

        {{-- RODAPÉ --}}
        <footer class="border-t border-zinc-800 bg-black/25">
            <div class="mx-auto max-w-[1440px] px-4 py-8 md:px-8">
                <div class="flex flex-col gap-3 md:flex-row md:items-center md:justify-between">
                    <div class="text-sm text-zinc-500">
                        © {{ date('Y') }} HorrorWiki — onde toda história deixa marcas.
                    </div>

                    <div class="text-xs font-bold uppercase tracking-[0.14em] text-zinc-600">
                        Acervo sombrio • leitura imersiva • comunidade macabra
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>