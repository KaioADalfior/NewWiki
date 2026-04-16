<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HorrorWiki | Início</title>
    <meta name="description" content="HorrorWiki — portal sombrio de histórias de terror, fanfics, criaturas e fórum macabro.">

    <link rel="icon" type="image/png" href="{{ asset('images/icon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-zinc-950 text-zinc-100 antialiased selection:bg-red-700/40 selection:text-white overflow-x-hidden">
    <div id="pageWrapper"
        class="min-h-screen transition-all duration-300 bg-[radial-gradient(circle_at_top,_rgba(127,29,29,0.22),_transparent_30%),linear-gradient(180deg,_#140406_0%,_#0b0b0d_40%,_#09090b_100%)]">

        <!-- OVERLAY -->
        <div id="profileOverlay"
            class="pointer-events-none fixed inset-0 z-40 bg-black/40 opacity-0 transition duration-300"></div>

        <!-- SIDEBAR ESQUERDA -->
        <aside
            class="fixed left-0 top-0 z-40 hidden h-screen w-16 border-r border-zinc-800 bg-zinc-950/95 md:flex md:flex-col md:justify-between">
            <div class="flex flex-col items-center gap-3 pt-4">
                <a href="{{ route('home.logado') }}"
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

        <!-- SIDEBAR DIREITA DO PERFIL -->
        <aside id="profileSidebar"
            class="fixed right-0 top-0 z-50 h-screen w-[320px] max-w-[88vw] translate-x-full border-l border-zinc-800 bg-zinc-950 shadow-2xl transition-transform duration-300">

            <div class="flex h-full flex-col">
                <!-- TOPO -->
                <div class="flex items-center justify-between border-b border-zinc-800 px-4 py-4">
                    <h2 class="text-lg font-black text-white">Sua conta</h2>

                    <button id="closeProfileSidebar" type="button"
                        class="flex h-10 w-10 items-center justify-center rounded-md border border-zinc-700 bg-zinc-900 text-zinc-300 transition hover:border-red-700 hover:text-white">
                        ✕
                    </button>
                </div>

                <!-- CONTEÚDO -->
                <div class="flex-1 overflow-y-auto px-5 py-6">
                    <div class="flex flex-col items-center text-center">
                        <div
                            class="flex h-28 w-28 items-center justify-center rounded-full border-4 border-red-800 bg-zinc-900 text-4xl font-black text-white shadow-[0_0_30px_rgba(127,29,29,0.35)]">
                            {{ strtoupper(substr(session('usuario_nome'), 0, 1)) }}
                        </div>

                        <h3 class="mt-5 text-2xl font-black text-white">
                            {{ session('usuario_nome') }}
                        </h3>

                        <p class="mt-2 text-sm text-zinc-400">
                            {{ session('usuario_email') }}
                        </p>

                        <a href="{{ route('perfil') }}"
                            class="mt-6 inline-flex w-full items-center justify-center rounded-md bg-red-700 px-4 py-3 text-sm font-black uppercase tracking-[0.16em] text-white transition hover:bg-red-600">
                            Ver perfil
                        </a>
                    </div>

                    <div class="mt-8 rounded-xl border border-zinc-800 bg-zinc-900/60 p-4">
                        <div class="mb-4 text-[11px] font-extrabold uppercase tracking-[0.18em] text-zinc-500">
                            Acesso rápido
                        </div>

                        <div class="space-y-3">
                            <a href="#"
                                class="block rounded-md border border-zinc-800 bg-black/20 px-4 py-3 text-sm font-semibold text-zinc-300 transition hover:border-red-700 hover:text-white">
                                Minhas leituras
                            </a>

                            <a href="#"
                                class="block rounded-md border border-zinc-800 bg-black/20 px-4 py-3 text-sm font-semibold text-zinc-300 transition hover:border-red-700 hover:text-white">
                                Itens salvos
                            </a>

                            <a href="#"
                                class="block rounded-md border border-zinc-800 bg-black/20 px-4 py-3 text-sm font-semibold text-zinc-300 transition hover:border-red-700 hover:text-white">
                                Configurações
                            </a>
                        </div>
                    </div>
                </div>

                <!-- RODAPÉ -->
                <div class="border-t border-zinc-800 p-5">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="inline-flex w-full items-center justify-center rounded-md border border-zinc-700 bg-zinc-900 px-4 py-3 text-sm font-black uppercase tracking-[0.16em] text-zinc-200 transition hover:border-red-700 hover:bg-red-700 hover:text-white">
                            Desconectar
                        </button>
                    </form>
                </div>
            </div>
        </aside>

        <!-- HEADER -->
        <header class="sticky top-0 z-30 border-b border-zinc-800 bg-zinc-950/90 backdrop-blur">
            <div class="mx-auto flex max-w-[1440px] items-center justify-between gap-4 px-4 py-3 md:pl-24 md:pr-6">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('images/logo.png') }}" alt="HorrorWiki"
                        class="h-12 w-auto object-contain md:h-14">
                </div>

                <div class="hidden flex-1 justify-center xl:flex">
                    <div class="w-full max-w-lg">
                        <div
                            class="flex items-center border border-zinc-700 bg-zinc-900 px-4 py-2 shadow-lg shadow-black/20 transition focus-within:border-red-700">
                            <input type="text" placeholder="Pesquisar lendas, criaturas e histórias..."
                                class="w-full bg-transparent text-sm text-zinc-200 placeholder:text-zinc-500 focus:outline-none">
                            <button class="ml-3 text-zinc-500 transition hover:text-red-400" aria-label="Pesquisar">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2"
                                        d="M21 21l-4.35-4.35m1.35-5.15a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <div class="hidden text-right md:block">
                        <div class="text-xs uppercase tracking-[0.16em] text-zinc-500">Conectado como</div>
                        <div class="text-sm font-bold text-white">{{ session('usuario_nome') }}</div>
                    </div>

                    <!-- BOTÃO DE PERFIL COM ÍCONE SVG -->
                    <button id="openProfileSidebar" type="button"
                        class="group flex h-12 w-12 items-center justify-center rounded-md border-2 border-zinc-700 bg-zinc-900 text-zinc-400 transition hover:border-red-700 hover:bg-zinc-800 hover:text-white"
                        aria-label="Abrir perfil">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                    </button>
                </div>
            </div>
        </header>

        <main class="md:pl-16">
            <section class="relative overflow-hidden border-b border-zinc-800">
                <div
                    class="absolute inset-0 bg-[radial-gradient(circle_at_18%_18%,rgba(239,68,68,0.12),transparent_18%),radial-gradient(circle_at_83%_26%,rgba(168,85,247,0.08),transparent_16%),radial-gradient(circle_at_50%_78%,rgba(220,38,38,0.08),transparent_20%)]">
                </div>

                <div class="relative mx-auto max-w-[1440px] px-4 py-10 md:px-8 md:py-14">
                    <div class="mx-auto max-w-6xl">
                        <div class="mb-8 flex items-center justify-between gap-4">
                            <div>
                                <h1 class="text-3xl font-black tracking-tight text-white md:text-5xl">
                                    Bem-vindo de volta, {{ session('usuario_nome') }}
                                </h1>
                                <p class="mt-3 max-w-2xl text-sm leading-7 text-zinc-400 md:text-base">
                                    Continue explorando relatos macabros, universos de horror, fanfics e wikis
                                    sombrias.
                                </p>
                            </div>

                            <a href="{{ route('perfil') }}"
                                class="hidden rounded-md border border-zinc-700 bg-zinc-900 px-4 py-3 text-xs font-extrabold uppercase tracking-[0.16em] text-zinc-200 transition hover:border-red-700 hover:text-white md:inline-flex">
                                Minha conta
                            </a>
                        </div>

                        @php
                            $cards = [
                                ['cat' => 'FANFIC', 'title' => 'A Noiva da Casa do Bosque Negro', 'img' => 'https://images.unsplash.com/photo-1509248961158-e54f6934749c?q=80&w=1200&auto=format&fit=crop'],
                                ['cat' => 'CRIATURAS', 'title' => 'Depois de 11 Anos, O Colecionador de Ossos Voltou', 'img' => 'https://images.unsplash.com/photo-1518709268805-4e9042af2176?q=80&w=1200&auto=format&fit=crop'],
                                ['cat' => 'FÓRUM', 'title' => 'As 7 Teorias Mais Perturbadoras da Ilha Neblina', 'img' => 'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?q=80&w=1200&auto=format&fit=crop'],
                                ['cat' => 'WIKI', 'title' => 'Entenda o Ritual das Portas Vermelhas', 'img' => 'https://images.unsplash.com/photo-1473445361085-b9a07f55608b?q=80&w=1200&auto=format&fit=crop'],
                                ['cat' => 'REVIEW', 'title' => 'Pragmata do Medo: a Maldição da Fábrica Hollow', 'img' => 'https://images.unsplash.com/photo-1483982258113-b72862e6cff6?q=80&w=1200&auto=format&fit=crop'],
                                ['cat' => 'SÉRIES', 'title' => 'O Que Assistir: Horror Cósmico, Found Footage e Mais', 'img' => 'https://images.unsplash.com/photo-1492691527719-9d1e07e534b4?q=80&w=1200&auto=format&fit=crop'],
                            ];
                        @endphp

                        <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-6">
                            @foreach($cards as $card)
                                <article
                                    class="group overflow-hidden border border-red-950/60 bg-zinc-900/75 shadow-xl shadow-black/20 transition duration-300 hover:-translate-y-1 hover:border-red-700">
                                    <div class="relative h-40 overflow-hidden border-b border-zinc-800">
                                        <img src="{{ $card['img'] }}" alt="{{ $card['title'] }}"
                                            class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                                        <div
                                            class="absolute inset-0 bg-gradient-to-t from-black via-black/25 to-transparent">
                                        </div>
                                        <span
                                            class="absolute left-3 top-3 bg-red-700 px-2 py-1 text-[10px] font-extrabold uppercase tracking-[0.14em] text-white">
                                            {{ $card['cat'] }}
                                        </span>
                                    </div>
                                    <div class="p-4">
                                        <h3 class="line-clamp-3 text-sm font-bold leading-5 text-white">
                                            {{ $card['title'] }}
                                        </h3>
                                    </div>
                                </article>
                            @endforeach
                        </div>

                        <div class="mt-8 border border-zinc-800 bg-black/30 p-5">
                            <div class="grid gap-6 md:grid-cols-6">
                                <div>
                                    <button
                                        class="bg-yellow-400 px-4 py-2 text-xs font-extrabold uppercase tracking-[0.16em] text-black">
                                        Top Wikis
                                    </button>
                                </div>

                                <div>
                                    <h4 class="mb-2 text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                                        Criaturas</h4>
                                    <ul class="space-y-1 text-sm text-zinc-300">
                                        <li>Wendigo</li>
                                        <li>Homem-Pálido</li>
                                        <li>Dama do Lago Negro</li>
                                    </ul>
                                </div>

                                <div>
                                    <h4 class="mb-2 text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                                        Lugares</h4>
                                    <ul class="space-y-1 text-sm text-zinc-300">
                                        <li>Sanatório Hollow</li>
                                        <li>Floresta Moura</li>
                                        <li>Capela das Velas</li>
                                    </ul>
                                </div>

                                <div>
                                    <h4 class="mb-2 text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                                        Fórum</h4>
                                    <ul class="space-y-1 text-sm text-zinc-300">
                                        <li>Teorias</li>
                                        <li>Relatos sobrenaturais</li>
                                        <li>Debates de filmes</li>
                                    </ul>
                                </div>

                                <div>
                                    <h4 class="mb-2 text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                                        Fanfics</h4>
                                    <ul class="space-y-1 text-sm text-zinc-300">
                                        <li>Psicológico</li>
                                        <li>Gore</li>
                                        <li>Sobrenatural</li>
                                    </ul>
                                </div>

                                <div class="flex items-center justify-between gap-3 md:justify-end">
                                    <div class="text-sm text-zinc-400">
                                        Mais de <span class="font-bold text-white">250.000</span> histórias para
                                        explorar
                                    </div>
                                    <button
                                        class="flex h-10 w-10 items-center justify-center border border-red-900 bg-red-700 text-white transition hover:bg-red-600">
                                        →
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mx-auto max-w-[1440px] px-4 py-10 md:px-8">
                <div class="mb-8 flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <span class="bg-red-700 px-4 py-2 text-sm font-black uppercase tracking-[0.14em] text-white">
                            Destaques
                        </span>
                        <a href="#"
                            class="text-xs font-bold uppercase tracking-[0.14em] text-zinc-400 transition hover:text-red-400">
                            Ver tudo →
                        </a>
                    </div>
                </div>

                <div class="grid gap-8 lg:grid-cols-[1fr_320px]">
                    <div>
                        <h2 class="mb-5 text-lg font-bold text-white">Páginas populares de terror</h2>

                        @php
                            $popular = [
                                ['title' => 'A Freira do Corredor 13', 'wiki' => 'Wiki Assombrações', 'img' => 'https://images.unsplash.com/photo-1509475826633-fed577a2c71b?q=80&w=1000&auto=format&fit=crop'],
                                ['title' => 'O Homem do Rádio', 'wiki' => 'Wiki Lendas Urbanas', 'img' => 'https://images.unsplash.com/photo-1494526585095-c41746248156?q=80&w=1000&auto=format&fit=crop'],
                                ['title' => 'Harley Quinn Macabra', 'wiki' => 'Wiki Fanfics Dark', 'img' => 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?q=80&w=1000&auto=format&fit=crop'],
                                ['title' => 'Olhos na Janela', 'wiki' => 'Wiki Casos Misteriosos', 'img' => 'https://images.unsplash.com/photo-1515263487990-61b07816b324?q=80&w=1000&auto=format&fit=crop'],
                                ['title' => 'A Filha do Pântano', 'wiki' => 'Wiki Monstros do Sul', 'img' => 'https://images.unsplash.com/photo-1500375592092-40eb2168fd21?q=80&w=1000&auto=format&fit=crop'],
                                ['title' => 'Godzilla Sombrio', 'wiki' => 'Wiki Kaijus Malditos', 'img' => 'https://images.unsplash.com/photo-1518837695005-2083093ee35b?q=80&w=1000&auto=format&fit=crop'],
                            ];
                        @endphp

                        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6">
                            @foreach($popular as $item)
                                <article
                                    class="group overflow-hidden border border-zinc-800 bg-zinc-900/80 transition duration-300 hover:border-red-700">
                                    <div class="h-44 overflow-hidden border-b border-zinc-800">
                                        <img src="{{ $item['img'] }}" alt="{{ $item['title'] }}"
                                            class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                                    </div>
                                    <div class="p-3">
                                        <h3 class="text-sm font-bold text-white">{{ $item['title'] }}</h3>
                                        <p class="mt-1 text-xs text-zinc-400">{{ $item['wiki'] }}</p>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>

                    <aside
                        class="border border-zinc-800 bg-gradient-to-br from-zinc-900 to-red-950/30 p-5 shadow-xl shadow-black/20">
                        <div class="mb-3 text-xs font-extrabold uppercase tracking-[0.2em] text-red-400">
                            Em alta
                        </div>

                        <h3 class="text-2xl font-black text-white">
                            Biblioteca das Sombras
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-zinc-300">
                            Explore universos macabros, publique fanfics, participe de fóruns e descubra criaturas,
                            rituais, casos e lendas proibidas.
                        </p>

                        <div class="mt-6 space-y-3">
                            <a href="#"
                                class="block border border-zinc-700 bg-black/30 px-4 py-3 text-sm font-semibold text-zinc-200 transition hover:border-red-600 hover:text-white">
                                Entrar no Fórum do Medo
                            </a>
                            <a href="#"
                                class="block border border-zinc-700 bg-black/30 px-4 py-3 text-sm font-semibold text-zinc-200 transition hover:border-red-600 hover:text-white">
                                Ler Fanfics Populares
                            </a>
                            <a href="#"
                                class="block border border-zinc-700 bg-black/30 px-4 py-3 text-sm font-semibold text-zinc-200 transition hover:border-red-600 hover:text-white">
                                Explorar Wikis de Criaturas
                            </a>
                        </div>

                        <div class="mt-6 border-t border-zinc-800 pt-5">
                            <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-zinc-500">
                                Tema da semana
                            </div>
                            <div class="mt-2 text-sm font-semibold text-white">
                                Casas abandonadas e arquivos amaldiçoados
                            </div>
                            <p class="mt-2 text-sm leading-6 text-zinc-400">
                                Descubra documentos perdidos, teorias sombrias e relatos de visitantes que nunca mais
                                voltaram os mesmos.
                            </p>
                        </div>
                    </aside>
                </div>
            </section>

            <section class="border-t border-zinc-800 bg-black/25">
                <div class="mx-auto max-w-[1440px] px-4 py-10 md:px-8">
                    <div class="grid gap-8 md:grid-cols-3">
                        <div class="border border-zinc-800 bg-zinc-900/40 p-5">
                            <h4 class="text-sm font-black uppercase tracking-[0.18em] text-red-400">Wiki</h4>
                            <p class="mt-3 text-sm leading-6 text-zinc-400">
                                Enciclopédia de entidades, locais amaldiçoados, fenômenos, objetos malditos e linhas
                                do
                                tempo sobrenaturais.
                            </p>
                        </div>

                        <div class="border border-zinc-800 bg-zinc-900/40 p-5">
                            <h4 class="text-sm font-black uppercase tracking-[0.18em] text-red-400">Fórum</h4>
                            <p class="mt-3 text-sm leading-6 text-zinc-400">
                                Debata teorias, compartilhe relatos, discuta filmes, séries, jogos e universos de
                                horror
                                com a comunidade.
                            </p>
                        </div>

                        <div class="border border-zinc-800 bg-zinc-900/40 p-5">
                            <h4 class="text-sm font-black uppercase tracking-[0.18em] text-red-400">Fanfics</h4>
                            <p class="mt-3 text-sm leading-6 text-zinc-400">
                                Publique histórias em capítulos, acompanhe autores e descubra narrativas psicológicas,
                                sobrenaturais e gore.
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

    <script>
        const openProfileSidebar = document.getElementById('openProfileSidebar');
        const closeProfileSidebar = document.getElementById('closeProfileSidebar');
        const profileSidebar = document.getElementById('profileSidebar');
        const profileOverlay = document.getElementById('profileOverlay');
        const pageWrapper = document.getElementById('pageWrapper');

        function abrirSidebarPerfil() {
            profileSidebar.classList.remove('translate-x-full');
            profileOverlay.classList.remove('opacity-0', 'pointer-events-none');
        }

        function fecharSidebarPerfil() {
            profileSidebar.classList.add('translate-x-full');
            profileOverlay.classList.add('opacity-0', 'pointer-events-none');
        }

        openProfileSidebar?.addEventListener('click', abrirSidebarPerfil);
        closeProfileSidebar?.addEventListener('click', fecharSidebarPerfil);
        profileOverlay?.addEventListener('click', fecharSidebarPerfil);
    </script>
</body>

</html>
