<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HorrorWiki</title>
    <meta name="description"
        content="HorrorWiki — portal sombrio de histórias de terror, fanfics, criaturas e fórum macabro.">

    <link rel="icon" type="image/png" href="{{ asset('images/icon.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-zinc-950 text-zinc-100 antialiased selection:bg-red-700/40 selection:text-white">
    <div class="min-h-screen bg-[radial-gradient(circle_at_top,_rgba(127,29,29,0.22),_transparent_30%),linear-gradient(180deg,_#140406_0%,_#0b0b0d_40%,_#09090b_100%)]">

        <aside class="fixed left-0 top-0 z-40 hidden h-screen w-16 border-r border-zinc-800 bg-zinc-950/95 md:flex md:flex-col md:justify-between">
            <div class="flex flex-col items-center gap-3 pt-4">
                <a href="{{ route('home') }}"
                    class="flex w-full flex-col items-center gap-1 border-l-2 border-red-600 py-2 text-zinc-200">
                    <span class="flex h-9 w-9 items-center justify-center border border-zinc-700 bg-zinc-900 text-sm">
                        ⌂
                    </span>
                    <span class="text-[10px] uppercase tracking-wide">Home</span>
                </a>

                <a href="#"
                    class="flex w-full flex-col items-center gap-1 py-2 text-zinc-500 transition hover:text-red-400">
                    <span class="flex h-9 w-9 items-center justify-center border border-zinc-800 bg-zinc-900 text-sm">
                        ✦
                    </span>
                    <span class="text-[10px] uppercase tracking-wide">Salvos</span>
                </a>

                <a href="#"
                    class="flex w-full flex-col items-center gap-1 py-2 text-zinc-500 transition hover:text-red-400">
                    <span class="flex h-9 w-9 items-center justify-center border border-zinc-800 bg-zinc-900 text-sm">
                        ☾
                    </span>
                    <span class="text-[10px] uppercase tracking-wide">Lidos</span>
                </a>
            </div>

            <div class="pb-4">
                <a href="#"
                    class="flex w-full flex-col items-center gap-1 py-2 text-zinc-500 transition hover:text-red-400">
                    <span class="flex h-9 w-9 items-center justify-center border border-zinc-800 bg-zinc-900 text-sm">
                        ⋯
                    </span>
                    <span class="text-[10px] uppercase tracking-wide">Mais</span>
                </a>
            </div>
        </aside>

        <header class="sticky top-0 z-30 border-b border-zinc-800 bg-zinc-950/90 backdrop-blur">
            <div class="mx-auto flex max-w-[1440px] items-center justify-between gap-4 px-4 py-3 md:pl-24 md:pr-6">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('images/logo.png') }}" alt="HorrorWiki"
                        class="h-12 w-auto object-contain md:h-14">
                </div>

                <div class="hidden flex-1 justify-center xl:flex">
                    <div class="w-full max-w-lg">
                        <div class="flex items-center border border-zinc-700 bg-zinc-900 px-4 py-2 shadow-lg shadow-black/20 transition focus-within:border-red-700">
                            <input type="text" placeholder="Pesquisar lendas, criaturas e histórias..."
                                class="w-full bg-transparent text-sm text-zinc-200 placeholder:text-zinc-500 focus:outline-none">
                            <button class="ml-3 text-zinc-500 transition hover:text-red-400" aria-label="Pesquisar">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2"
                                        d="M21 21l-4.35-4.35m1.35-5.15a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="flex items-center gap-2">
                    <a href="{{ route('login') }}"
                        class="border border-zinc-700 px-4 py-2 text-[11px] font-semibold uppercase tracking-[0.14em] text-zinc-200 transition hover:border-red-600 hover:text-white">
                        Entrar
                    </a>
                    <a href="{{ route('register') }}"
                        class="bg-red-700 px-4 py-2 text-[11px] font-bold uppercase tracking-[0.14em] text-white transition hover:bg-red-600">
                        Criar conta
                    </a>
                </div>
            </div>
        </header>

        <main class="md:pl-16">
            <section class="relative overflow-hidden border-b border-zinc-800">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_18%_18%,rgba(239,68,68,0.12),transparent_18%),radial-gradient(circle_at_83%_26%,rgba(168,85,247,0.08),transparent_16%),radial-gradient(circle_at_50%_78%,rgba(220,38,38,0.08),transparent_20%)]"></div>

                <div class="relative mx-auto max-w-[1440px] px-4 py-10 md:px-8 md:py-14">
                    <div class="mx-auto max-w-6xl">
                        <div class="mb-8 flex justify-center">
                            <div class="w-full max-w-3xl border border-zinc-800 bg-black/35 px-6 py-6 text-center shadow-2xl shadow-black/30">
                                <img src="{{ asset('images/logo.png') }}" alt="HorrorWiki"
                                    class="mx-auto h-28 w-auto object-contain md:h-40">
                                <p class="mt-3 text-sm text-zinc-400 md:text-base">
                                    A enciclopédia sombria para lendas, fanfics, fóruns e relatos macabros.
                                </p>
                            </div>
                        </div>

                        <div class="mx-auto mb-8 max-w-3xl">
                            <div class="flex items-center border border-red-950/70 bg-zinc-950/90 px-4 py-3 shadow-xl shadow-black/30 transition focus-within:border-red-700">
                                <input type="text"
                                    placeholder="Pesquise criaturas, fóruns, fanfics e relatos macabros..."
                                    class="w-full bg-transparent text-sm text-zinc-100 placeholder:text-zinc-500 focus:outline-none">
                                <button
                                    class="ml-3 flex h-10 w-10 items-center justify-center border border-red-900 bg-red-700 text-white transition hover:bg-red-600"
                                    aria-label="Pesquisar">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2"
                                            d="M21 21l-4.35-4.35m1.35-5.15a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="mb-4 flex items-center justify-between">
                            <div>
                                <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                                    Categorias
                                </div>
                                <h2 class="mt-2 text-2xl font-black text-white">
                                    Explore todos os temas da HorrorWiki
                                </h2>
                            </div>
                        </div>

                        <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-5">
                            @forelse($categorias as $categoria)
                                <a href="{{ route('categorias.show', $categoria->slug) }}"
                                    class="group overflow-hidden border border-red-950/60 bg-zinc-900/75 shadow-xl shadow-black/20 transition duration-300 hover:-translate-y-1 hover:border-red-700">
                                    <div class="relative h-40 overflow-hidden border-b border-zinc-800 bg-[linear-gradient(135deg,rgba(127,29,29,0.95)_0%,rgba(24,24,27,0.75)_55%,rgba(9,9,11,0.95)_100%)]">
                                        <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_20%_20%,rgba(255,255,255,0.22),transparent_18%),radial-gradient(circle_at_75%_30%,rgba(255,255,255,0.08),transparent_16%),radial-gradient(circle_at_55%_75%,rgba(255,255,255,0.08),transparent_18%)]"></div>

                                        <span class="absolute left-3 top-3 bg-red-700 px-2 py-1 text-[10px] font-extrabold uppercase tracking-[0.14em] text-white">
                                            {{ $categoria->tipo === 'fanfic' ? 'FANFIC' : 'HISTÓRIA' }}
                                        </span>

                                        <div class="absolute inset-x-0 bottom-0 p-4">
                                            <h3 class="text-lg font-black leading-6 text-white">
                                                {{ $categoria->nome }}
                                            </h3>
                                        </div>
                                    </div>

                                    <div class="p-4">
                                        <p class="text-sm leading-6 text-zinc-400">
                                            {{ $categoria->descricao ?: 'Explore esta categoria e descubra histórias sombrias.' }}
                                        </p>

                                        <div class="mt-4 text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                                            Explorar categoria →
                                        </div>
                                    </div>
                                </a>
                            @empty
                                <div class="col-span-full border border-zinc-800 bg-zinc-900/70 p-6 text-zinc-400">
                                    Nenhuma categoria cadastrada ainda.
                                </div>
                            @endforelse
                        </div>

                        <div class="mt-8 border border-zinc-800 bg-black/30 p-5">
                            <div class="grid gap-6 md:grid-cols-3">
                                <div>
                                    <button class="bg-yellow-400 px-4 py-2 text-xs font-extrabold uppercase tracking-[0.16em] text-black">
                                        Categorias ativas
                                    </button>
                                </div>

                                <div>
                                    <h4 class="mb-2 text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                                        Histórias</h4>
                                    <ul class="space-y-1 text-sm text-zinc-300">
                                        @foreach($categorias->where('tipo', 'historia')->take(5) as $cat)
                                            <li>{{ $cat->nome }}</li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div>
                                    <h4 class="mb-2 text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                                        Fanfics</h4>
                                    <ul class="space-y-1 text-sm text-zinc-300">
                                        @foreach($categorias->where('tipo', 'fanfic')->take(5) as $cat)
                                            <li>{{ $cat->nome }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mx-auto max-w-[1440px] px-4 py-10 md:px-8">
                <div class="grid gap-8 lg:grid-cols-[1fr_320px]">
                    <div>
                        <h2 class="mb-5 text-lg font-bold text-white">Navegue por categoria</h2>

                        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                            @foreach($categorias as $categoria)
                                <a href="{{ route('categorias.show', $categoria->slug) }}"
                                    class="group border border-zinc-800 bg-zinc-900/80 p-4 transition duration-300 hover:border-red-700">
                                    <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                                        {{ $categoria->tipo === 'fanfic' ? 'Fanfic' : 'História' }}
                                    </div>
                                    <h3 class="mt-2 text-lg font-black text-white group-hover:text-red-300">
                                        {{ $categoria->nome }}
                                    </h3>
                                    <p class="mt-2 text-sm leading-6 text-zinc-400">
                                        {{ $categoria->descricao ?: 'Descubra publicações desta categoria.' }}
                                    </p>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <aside class="border border-zinc-800 bg-gradient-to-br from-zinc-900 to-red-950/30 p-5 shadow-xl shadow-black/20">
                        <div class="mb-3 text-xs font-extrabold uppercase tracking-[0.2em] text-red-400">
                            Em alta
                        </div>

                        <h3 class="text-2xl font-black text-white">
                            Biblioteca das Sombras
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-zinc-300">
                            Agora a HorrorWiki já puxa as categorias diretamente do banco, facilitando a expansão do portal por temas.
                        </p>

                        <div class="mt-6 space-y-3">
                            @foreach($categorias->take(3) as $categoria)
                                <a href="{{ route('categorias.show', $categoria->slug) }}"
                                    class="block border border-zinc-700 bg-black/30 px-4 py-3 text-sm font-semibold text-zinc-200 transition hover:border-red-600 hover:text-white">
                                    Explorar {{ $categoria->nome }}
                                </a>
                            @endforeach
                        </div>
                    </aside>
                </div>
            </section>

            <section class="border-t border-zinc-800 bg-black/25">
                <div class="mx-auto max-w-[1440px] px-4 py-10 md:px-8">
                    <div class="grid gap-8 md:grid-cols-3">
                        <div class="border border-zinc-800 bg-zinc-900/40 p-5">
                            <h4 class="text-sm font-black uppercase tracking-[0.18em] text-red-400">Categorias</h4>
                            <p class="mt-3 text-sm leading-6 text-zinc-400">
                                Explore relatos reais, contos macabros, lendas, fanfics e outras vertentes do horror organizadas por tema.
                            </p>
                        </div>

                        <div class="border border-zinc-800 bg-zinc-900/40 p-5">
                            <h4 class="text-sm font-black uppercase tracking-[0.18em] text-red-400">Fanfics</h4>
                            <p class="mt-3 text-sm leading-6 text-zinc-400">
                                Fanfics agora seguem estrutura própria, com capa, resumo, introdução e capítulos independentes.
                            </p>
                        </div>

                        <div class="border border-zinc-800 bg-zinc-900/40 p-5">
                            <h4 class="text-sm font-black uppercase tracking-[0.18em] text-red-400">Histórias</h4>
                            <p class="mt-3 text-sm leading-6 text-zinc-400">
                                Histórias comuns continuam separadas das fanfics, deixando o sistema mais limpo e escalável.
                            </p>
                        </div>
                    </div>

                    <div class="mt-8 border-t border-zinc-800 pt-6 text-sm text-zinc-500">
                        © {{ date('Y') }} HorrorWiki — onde toda história deixa marcas.
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>

</html>