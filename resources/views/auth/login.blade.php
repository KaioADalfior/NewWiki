<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entrar | HorrorWiki</title>
    <meta name="description" content="Faça login na HorrorWiki.">

    <link rel="icon" type="image/png" href="{{ asset('images/icon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-zinc-950 text-zinc-100 antialiased selection:bg-red-700/40 selection:text-white">
    <div class="relative min-h-screen overflow-hidden bg-[radial-gradient(circle_at_top,_rgba(127,29,29,0.22),_transparent_30%),linear-gradient(180deg,_#140406_0%,_#0b0b0d_40%,_#09090b_100%)]">

        <!-- FUNDO -->
        <div class="pointer-events-none absolute inset-0">
            <div class="absolute left-[-120px] top-[-120px] h-72 w-72 rounded-full bg-red-800/10 blur-3xl"></div>
            <div class="absolute right-[-80px] top-[15%] h-72 w-72 rounded-full bg-red-700/10 blur-3xl"></div>
            <div class="absolute bottom-[-80px] left-[20%] h-72 w-72 rounded-full bg-zinc-700/10 blur-3xl"></div>
        </div>

        <!-- HEADER -->
        <section class="relative overflow-hidden border-b border-zinc-800/80">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_18%_18%,rgba(239,68,68,0.10),transparent_18%),radial-gradient(circle_at_83%_26%,rgba(168,85,247,0.05),transparent_16%)]"></div>

            <div class="relative mx-auto max-w-[1440px] px-4 py-10 md:px-8 md:py-16">
                <div class="mx-auto max-w-4xl text-center">
                    <img src="{{ asset('images/logo.png') }}"
                         alt="HorrorWiki"
                         class="mx-auto h-20 w-auto object-contain drop-shadow-[0_0_20px_rgba(220,38,38,0.15)] md:h-28">

                    <div class="mt-6 inline-flex items-center gap-2 rounded-full border border-red-900/50 bg-red-950/30 px-4 py-1.5 text-[11px] font-bold uppercase tracking-[0.18em] text-red-300 backdrop-blur">
                        <span class="h-2 w-2 rounded-full bg-red-500"></span>
                        Portal sombrio
                    </div>

                    <h1 class="mt-5 text-3xl font-black tracking-tight text-white md:text-5xl xl:text-6xl">
                        Entre na HorrorWiki
                    </h1>

                    <p class="mx-auto mt-4 max-w-2xl text-sm leading-7 text-zinc-400 md:text-base">
                        Acesse seu portal de lendas, relatos e criaturas.
                    </p>
                </div>
            </div>
        </section>

        <!-- CONTEÚDO -->
        <main class="relative mx-auto max-w-[1440px] px-4 py-8 md:px-8 md:py-14">
            <div class="mb-8">
                <a href="{{ url('/') }}"
                   class="group inline-flex items-center gap-2 rounded-md border border-zinc-800 bg-zinc-900/60 px-4 py-2 text-xs font-bold uppercase tracking-[0.16em] text-zinc-300 transition hover:border-red-700 hover:text-white">
                    <span class="text-base transition group-hover:-translate-x-0.5">←</span>
                    Voltar
                </a>
            </div>

            <div class="grid gap-8 xl:grid-cols-[1fr_1.1fr]">

                <!-- SOCIAL -->
                <section>
                    <div class="relative h-full overflow-hidden rounded-xl border border-zinc-800/80 bg-zinc-900/60 p-6 shadow-[0_20px_80px_rgba(0,0,0,0.35)] backdrop-blur-xl md:p-8">

                        <h2 class="text-2xl font-black tracking-tight text-white md:text-3xl">
                            Entre com outra conta
                        </h2>

                        <p class="mt-3 max-w-md text-sm leading-6 text-zinc-400">
                            Continue com um provedor externo.
                        </p>

                        <div class="mt-8 space-y-3">
                            <a href="#" class="group flex h-14 items-center justify-between rounded-md border border-zinc-800 bg-zinc-950/80 px-4 text-sm font-bold text-zinc-100 transition hover:border-red-700">
                                <div class="flex items-center gap-4">
                                    <div class="flex h-9 w-9 items-center justify-center rounded-md border border-zinc-700 bg-zinc-900">G</div>
                                    <span>Entrar com Google</span>
                                </div>
                                <span>→</span>
                            </a>

                            <a href="#" class="group flex h-14 items-center justify-between rounded-md border border-zinc-800 bg-zinc-950/60 px-4 text-sm font-bold text-zinc-100 transition hover:border-red-700">
                                <div class="flex items-center gap-4">
                                    <div class="flex h-9 w-9 items-center justify-center rounded-md border border-zinc-700 bg-zinc-900">f</div>
                                    <span>Entrar com Facebook</span>
                                </div>
                                <span>→</span>
                            </a>

                            <a href="#" class="group flex h-14 items-center justify-between rounded-md border border-zinc-800 bg-zinc-950/60 px-4 text-sm font-bold text-zinc-100 transition hover:border-red-700">
                                <div class="flex items-center gap-4">
                                    <div class="flex h-9 w-9 items-center justify-center rounded-md border border-zinc-700 bg-zinc-900">⌖</div>
                                    <span>Entrar com Twitch</span>
                                </div>
                                <span>→</span>
                            </a>

                            <a href="#" class="group flex h-14 items-center justify-between rounded-md border border-zinc-800 bg-black px-4 text-sm font-bold text-zinc-100 transition hover:border-red-700">
                                <div class="flex items-center gap-4">
                                    <div class="flex h-9 w-9 items-center justify-center rounded-md border border-zinc-700 bg-zinc-900"></div>
                                    <span>Entrar com Apple</span>
                                </div>
                                <span>→</span>
                            </a>
                        </div>
                    </div>
                </section>

                <!-- FORM -->
                <section>
                    <div class="relative overflow-hidden rounded-xl border border-zinc-800/80 bg-zinc-900/70 p-6 shadow-[0_20px_80px_rgba(0,0,0,0.35)] backdrop-blur-xl md:p-8 lg:p-10">

                        <h2 class="text-2xl font-black tracking-tight text-white md:text-3xl">
                            Faça seu login
                        </h2>

                        <p class="mt-3 text-sm leading-6 text-zinc-400">
                            Entre com seu usuário e senha.
                        </p>

                        <form action="#" method="POST" class="mt-8 space-y-5">
                            @csrf

                            <div class="space-y-2">
                                <label class="block text-[11px] font-extrabold uppercase tracking-[0.18em] text-zinc-400">
                                    Usuário
                                </label>

                                <input
                                    type="text"
                                    name="username"
                                    placeholder="Digite seu usuário"
                                    class="h-14 w-full rounded-md border border-zinc-700 bg-zinc-950/90 px-4 text-sm text-zinc-100 outline-none transition focus:border-red-700"
                                >
                            </div>

                            <div class="space-y-2">
                                <label class="block text-[11px] font-extrabold uppercase tracking-[0.18em] text-zinc-400">
                                    Senha
                                </label>

                                <input
                                    type="password"
                                    name="password"
                                    placeholder="Digite sua senha"
                                    class="h-14 w-full rounded-md border border-zinc-700 bg-zinc-950/90 px-4 text-sm text-zinc-100 outline-none transition focus:border-red-700"
                                >
                            </div>

                            <div class="flex items-center justify-between rounded-md border border-zinc-800 bg-zinc-950/50 px-4 py-3">
                                <label class="flex items-center gap-3 text-sm text-zinc-400">
                                    <input type="checkbox">
                                    Manter conectado
                                </label>
                                <span class="text-xs font-bold uppercase tracking-[0.16em] text-zinc-600">
                                    Seguro
                                </span>
                            </div>

                            <button
                                type="submit"
                                class="group inline-flex h-14 w-full items-center justify-center gap-3 rounded-md bg-red-700 px-6 text-sm font-black uppercase tracking-[0.18em] text-white shadow-[0_10px_30px_rgba(185,28,28,0.30)] transition hover:bg-red-600"
                            >
                                Entrar agora →
                            </button>

                            <div class="rounded-md border border-zinc-800 bg-black/20 px-4 py-4 text-center">
                                <p class="text-sm text-zinc-400">
                                    Não possui conta?
                                    <a href="{{ route('register') }}" class="font-bold text-zinc-100 transition hover:text-red-400">
                                        Criar conta
                                    </a>
                                </p>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </main>
    </div>
</body>
</html>