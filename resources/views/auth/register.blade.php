<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar | HorrorWiki</title>
    <meta name="description" content="Crie sua conta na HorrorWiki.">

    <link rel="icon" type="image/png" href="{{ asset('images/icon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-zinc-950 text-zinc-100 antialiased selection:bg-red-700/40 selection:text-white">
    <div class="relative min-h-screen overflow-hidden bg-[radial-gradient(circle_at_top,_rgba(127,29,29,0.22),_transparent_30%),linear-gradient(180deg,_#140406_0%,_#0b0b0d_40%,_#09090b_100%)]">

        <div class="pointer-events-none absolute inset-0">
            <div class="absolute left-[-120px] top-[-120px] h-72 w-72 rounded-full bg-red-800/10 blur-3xl"></div>
            <div class="absolute right-[-80px] top-[15%] h-72 w-72 rounded-full bg-red-700/10 blur-3xl"></div>
            <div class="absolute bottom-[-80px] left-[20%] h-72 w-72 rounded-full bg-zinc-700/10 blur-3xl"></div>
        </div>

        <section class="relative overflow-hidden border-b border-zinc-800/80">
            <div class="relative mx-auto max-w-[1440px] px-4 py-10 md:px-8 md:py-16">
                <div class="mx-auto max-w-4xl text-center">
                    <img src="{{ asset('images/logo.png') }}" alt="HorrorWiki"
                        class="mx-auto h-20 w-auto object-contain md:h-28">

                    <div
                        class="mt-6 inline-flex items-center gap-2 rounded-full border border-red-900/50 bg-red-950/30 px-4 py-1.5 text-[11px] font-bold uppercase tracking-[0.18em] text-red-300">
                        <span class="h-2 w-2 rounded-full bg-red-500"></span>
                        Novo acesso
                    </div>

                    <h1 class="mt-5 text-3xl font-black tracking-tight text-white md:text-5xl">
                        Junte-se à HorrorWiki
                    </h1>

                    <p class="mx-auto mt-4 max-w-2xl text-sm leading-7 text-zinc-400">
                        Crie sua conta e participe da comunidade.
                    </p>
                </div>
            </div>
        </section>

        <main class="relative mx-auto max-w-[1440px] px-4 py-8 md:px-8 md:py-14">
            <div class="mb-8">
                <a href="{{ url('/') }}"
                    class="group inline-flex items-center gap-2 rounded-md border border-zinc-800 bg-zinc-900/60 px-4 py-2 text-xs font-bold uppercase tracking-[0.16em] text-zinc-300 transition hover:border-red-700 hover:text-white">
                    ← Voltar
                </a>
            </div>

            <div class="grid gap-8 xl:grid-cols-[1fr_1.1fr]">
                <section>
                    <div
                        class="relative h-full overflow-hidden rounded-xl border border-zinc-800/80 bg-zinc-900/60 p-6 shadow-[0_20px_80px_rgba(0,0,0,0.35)]">

                        <h2 class="text-2xl font-black tracking-tight text-white md:text-3xl">
                            Conecte uma conta
                        </h2>

                        <p class="mt-3 max-w-md text-sm leading-6 text-zinc-400">
                            Use um provedor externo para criar sua conta rapidamente.
                        </p>

                        <div class="mt-8 space-y-3">
                            <a href="#"
                                class="group flex h-14 items-center justify-between rounded-md border border-zinc-800 bg-zinc-950/80 px-4 text-sm font-bold text-zinc-100 transition hover:border-red-700">
                                <div class="flex items-center gap-4">
                                    <div class="flex h-9 w-9 items-center justify-center rounded-md border border-zinc-700 bg-zinc-900">G</div>
                                    <span>Conectar com Google</span>
                                </div>
                                <span>→</span>
                            </a>

                            <a href="#"
                                class="group flex h-14 items-center justify-between rounded-md border border-zinc-800 bg-zinc-950/60 px-4 text-sm font-bold text-zinc-100 transition hover:border-red-700">
                                <div class="flex items-center gap-4">
                                    <div class="flex h-9 w-9 items-center justify-center rounded-md border border-zinc-700 bg-zinc-900">f</div>
                                    <span>Conectar com Facebook</span>
                                </div>
                                <span>→</span>
                            </a>

                            <a href="#"
                                class="group flex h-14 items-center justify-between rounded-md border border-zinc-800 bg-zinc-950/60 px-4 text-sm font-bold text-zinc-100 transition hover:border-red-700">
                                <div class="flex items-center gap-4">
                                    <div class="flex h-9 w-9 items-center justify-center rounded-md border border-zinc-700 bg-zinc-900">⌖</div>
                                    <span>Conectar com Twitch</span>
                                </div>
                                <span>→</span>
                            </a>

                            <a href="#"
                                class="group flex h-14 items-center justify-between rounded-md border border-zinc-800 bg-black px-4 text-sm font-bold text-zinc-100 transition hover:border-red-700">
                                <div class="flex items-center gap-4">
                                    <div class="flex h-9 w-9 items-center justify-center rounded-md border border-zinc-700 bg-zinc-900"></div>
                                    <span>Conectar com Apple</span>
                                </div>
                                <span>→</span>
                            </a>
                        </div>
                    </div>
                </section>

                <section>
                    <div
                        class="relative overflow-hidden rounded-xl border border-zinc-800/80 bg-zinc-900/70 p-6 shadow-[0_20px_80px_rgba(0,0,0,0.35)]">

                        <h2 class="text-2xl font-black tracking-tight text-white md:text-3xl">
                            Criar conta
                        </h2>

                        <p class="mt-3 text-sm leading-6 text-zinc-400">
                            Preencha os campos abaixo.
                        </p>

                        @if (session('sucesso'))
                            <div class="mt-6 rounded-md border border-emerald-800 bg-emerald-950/40 px-4 py-3 text-sm text-emerald-300">
                                {{ session('sucesso') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="mt-6 rounded-md border border-red-900/60 bg-red-950/30 px-4 py-3 text-sm text-red-300">
                                <ul class="space-y-1">
                                    @foreach ($errors->all() as $erro)
                                        <li>{{ $erro }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('register.salvar') }}" method="POST" class="mt-8 space-y-5">
                            @csrf

                            <div class="space-y-2">
                                <input
                                    type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="Digite seu email"
                                    class="h-14 w-full rounded-md border border-zinc-700 bg-zinc-950/90 px-4 text-sm text-zinc-100 placeholder:text-zinc-500 outline-none transition focus:border-red-700">
                            </div>

                            <div class="space-y-2">
                                <input
                                    type="text"
                                    name="nome_usuario"
                                    value="{{ old('nome_usuario') }}"
                                    placeholder="Escolha seu usuário"
                                    class="h-14 w-full rounded-md border border-zinc-700 bg-zinc-950/90 px-4 text-sm text-zinc-100 placeholder:text-zinc-500 outline-none transition focus:border-red-700">
                            </div>

                            <div class="space-y-2">
                                <input
                                    type="password"
                                    name="senha"
                                    placeholder="Digite sua senha"
                                    class="h-14 w-full rounded-md border border-zinc-700 bg-zinc-950/90 px-4 text-sm text-zinc-100 placeholder:text-zinc-500 outline-none transition focus:border-red-700">
                            </div>

                            <div class="space-y-4 rounded-md border border-zinc-800 bg-zinc-950/50 px-4 py-4">
                                <label class="flex items-start gap-3 text-sm text-zinc-400">
                                    <input
                                        type="checkbox"
                                        name="receber_novidades"
                                        value="1"
                                        {{ old('receber_novidades') ? 'checked' : '' }}
                                        class="mt-1 h-4 w-4 rounded border-zinc-600 bg-zinc-900 text-red-700 focus:ring-red-700">
                                    <span>Receber emails sobre novidades.</span>
                                </label>

                                <label class="flex items-start gap-3 text-sm text-zinc-400">
                                    <input
                                        type="checkbox"
                                        name="aceitou_termos"
                                        value="1"
                                        {{ old('aceitou_termos') ? 'checked' : '' }}
                                        class="mt-1 h-4 w-4 rounded border-zinc-600 bg-zinc-900 text-red-700 focus:ring-red-700">
                                    <span>Concordo com os Termos.</span>
                                </label>
                            </div>

                            <button
                                type="submit"
                                class="group inline-flex h-14 w-full items-center justify-center gap-3 rounded-md bg-red-700 px-6 text-sm font-black uppercase tracking-[0.18em] text-white transition hover:bg-red-600">
                                Registrar →
                            </button>

                            <div class="rounded-md border border-zinc-800 bg-black/20 px-4 py-4 text-center">
                                <p class="text-sm text-zinc-400">
                                    Já possui conta?
                                    <a href="{{ route('login') }}" class="font-bold text-zinc-100 hover:text-red-400">
                                        Entrar
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