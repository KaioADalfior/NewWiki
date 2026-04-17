<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'HorrorWiki')</title>
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
                    class="flex w-full flex-col items-center gap-1 {{ request()->routeIs('home') ? 'border-l-2 border-red-600 text-zinc-200' : 'text-zinc-500 hover:text-red-400' }} py-2 transition">
                    <span class="flex h-9 w-9 items-center justify-center border {{ request()->routeIs('home') ? 'border-zinc-700' : 'border-zinc-800' }} bg-zinc-900 text-sm">
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
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/logo.png') }}" alt="HorrorWiki"
                            class="h-12 w-auto object-contain md:h-14">
                    </a>
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
                    @if(session()->has('usuario_id'))
                        <a href="{{ route('perfil') }}"
                            class="border border-zinc-700 px-4 py-2 text-[11px] font-semibold uppercase tracking-[0.14em] text-zinc-200 transition hover:border-red-600 hover:text-white">
                            Meu perfil
                        </a>

                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="bg-red-700 px-4 py-2 text-[11px] font-bold uppercase tracking-[0.14em] text-white transition hover:bg-red-600">
                                Sair
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}"
                            class="border border-zinc-700 px-4 py-2 text-[11px] font-semibold uppercase tracking-[0.14em] text-zinc-200 transition hover:border-red-600 hover:text-white">
                            Entrar
                        </a>
                        <a href="{{ route('register') }}"
                            class="bg-red-700 px-4 py-2 text-[11px] font-bold uppercase tracking-[0.14em] text-white transition hover:bg-red-600">
                            Criar conta
                        </a>
                    @endif
                </div>
            </div>
        </header>

        <main class="md:pl-16">
            @yield('content')
        </main>
    </div>
</body>

</html>