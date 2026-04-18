<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar | HorrorWiki</title>
    <meta name="description" content="Faça login na HorrorWiki.">

    <link rel="icon" type="image/png" href="{{ asset('images/icon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-zinc-950 text-zinc-100 antialiased selection:bg-red-700/40 selection:text-white">

    <div class="min-h-screen bg-[radial-gradient(circle_at_top,_rgba(127,29,29,0.18),_transparent_25%),linear-gradient(180deg,_#140406_0%,_#0b0b0d_45%,_#09090b_100%)]">

        <!-- HEADER -->
        <header class="sticky top-0 z-30 border-b border-zinc-800 bg-zinc-950/95 backdrop-blur">
            <div class="mx-auto flex max-w-[1500px] items-center justify-between gap-4 px-4 py-3 md:px-6">
                <div class="flex items-center gap-3">
                    <a href="{{ url('/') }}"
                        class="inline-flex items-center gap-2 border border-zinc-800 bg-zinc-900 px-4 py-2 text-xs font-bold uppercase tracking-[0.16em] text-zinc-300 transition hover:border-red-700 hover:bg-zinc-800 hover:text-white">
                        ← Voltar
                    </a>

                    <img src="{{ asset('images/logo.png') }}" alt="HorrorWiki"
                        class="h-10 w-auto object-contain md:h-12">
                </div>

                <a href="{{ route('register') }}"
                    class="border border-zinc-700 bg-zinc-900 px-4 py-2 text-xs font-black uppercase tracking-[0.16em] text-zinc-200 transition hover:border-red-700 hover:bg-red-700 hover:text-white">
                    Criar conta
                </a>
            </div>
        </header>

        <!-- MAIN -->
        <main class="mx-auto max-w-[1500px] px-4 py-6 md:px-6 md:py-8">

            <section class="overflow-hidden border border-zinc-800 bg-zinc-900/80 shadow-[0_20px_70px_rgba(0,0,0,0.45)]">

                <!-- TOPO -->
                <div class="relative overflow-hidden border-b border-zinc-800">
                    <div class="absolute inset-0 bg-[linear-gradient(135deg,rgba(127,29,29,0.95)_0%,rgba(24,24,27,0.60)_45%,rgba(9,9,11,0.95)_100%)]"></div>

                    <div class="absolute inset-0 opacity-20">
                        <div class="absolute inset-0 bg-[radial-gradient(circle_at_20%_20%,rgba(255,255,255,0.16),transparent_18%),radial-gradient(circle_at_80%_30%,rgba(255,255,255,0.08),transparent_16%),radial-gradient(circle_at_55%_75%,rgba(255,255,255,0.05),transparent_18%)]"></div>
                    </div>

                    <div class="relative px-6 py-10 md:px-8 md:py-14">
                        <div class="max-w-3xl">
                            <div class="inline-flex items-center gap-2 border border-red-900/60 bg-black/30 px-4 py-1.5 text-[11px] font-extrabold uppercase tracking-[0.18em] text-red-300 backdrop-blur">
                                <span class="h-2 w-2 rounded-full bg-red-500"></span>
                                Acesso à conta
                            </div>

                            <h1 class="mt-4 text-4xl font-black tracking-tight text-white md:text-6xl">
                                Entrar na HorrorWiki
                            </h1>

                            <p class="mt-3 max-w-2xl text-sm leading-7 text-zinc-200/90 md:text-base">
                                Acesse sua conta para publicar histórias, explorar conteúdos sombrios e continuar sua jornada dentro da comunidade.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CONTEÚDO -->
                <div class="grid gap-0 xl:grid-cols-[1.05fr_0.95fr]">

                    <!-- COLUNA ESQUERDA -->
                    <section class="border-b border-zinc-800 p-6 md:p-8 xl:border-b-0 xl:border-r">
                        <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                            Bem-vindo de volta
                        </div>

                        <h2 class="mt-2 text-2xl font-black text-white md:text-3xl">
                            Seu portal para o obscuro
                        </h2>

                        <p class="mt-4 max-w-2xl text-sm leading-7 text-zinc-400">
                            Entre para acessar seu perfil, suas publicações e os recursos da HorrorWiki com uma experiência mais imersiva, organizada e segura.
                        </p>

                        <div class="mt-8 grid gap-4 sm:grid-cols-2">
                            <div class="border border-zinc-800 bg-black/20 p-5">
                                <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-zinc-500">
                                    Perfil
                                </div>
                                <div class="mt-2 text-lg font-bold text-white">
                                    Personalize sua presença
                                </div>
                                <p class="mt-2 text-sm leading-6 text-zinc-400">
                                    Edite bio, foto e identidade da sua conta.
                                </p>
                            </div>

                            <div class="border border-zinc-800 bg-black/20 p-5">
                                <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-zinc-500">
                                    Conteúdo
                                </div>
                                <div class="mt-2 text-lg font-bold text-white">
                                    Histórias e fanfics
                                </div>
                                <p class="mt-2 text-sm leading-6 text-zinc-400">
                                    Continue escrevendo e explorando novos relatos.
                                </p>
                            </div>

                            <div class="border border-zinc-800 bg-black/20 p-5">
                                <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-zinc-500">
                                    Comunidade
                                </div>
                                <div class="mt-2 text-lg font-bold text-white">
                                    Biblioteca das Sombras
                                </div>
                                <p class="mt-2 text-sm leading-6 text-zinc-400">
                                    Participe da comunidade e descubra conteúdos macabros.
                                </p>
                            </div>

                            <div class="border border-zinc-800 bg-black/20 p-5">
                                <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-zinc-500">
                                    Segurança
                                </div>
                                <div class="mt-2 text-lg font-bold text-white">
                                    Login protegido
                                </div>
                                <p class="mt-2 text-sm leading-6 text-zinc-400">
                                    Seus dados protegidos com acesso privado à sua conta.
                                </p>
                            </div>
                        </div>

                        <div class="mt-8 border border-zinc-800 bg-gradient-to-br from-zinc-900 to-red-950/30 p-6">
                            <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                                HorrorWiki
                            </div>

                            <h3 class="mt-2 text-2xl font-black text-white">
                                Entre e continue sua história
                            </h3>

                            <p class="mt-3 text-sm leading-6 text-zinc-300">
                                Seus relatos, páginas salvas, interações e futuras publicações começam aqui.
                            </p>
                        </div>
                    </section>

                    <!-- COLUNA DIREITA -->
                    <section class="p-6 md:p-8">
                        <div class="mx-auto max-w-xl">

                            <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                                Login
                            </div>

                            <h2 class="mt-2 text-3xl font-black text-white">
                                Acesse sua conta
                            </h2>

                            <p class="mt-3 text-sm leading-6 text-zinc-400">
                                Informe seu usuário e senha para continuar.
                            </p>

                            @if ($errors->any())
                                <div class="mt-6 border border-red-900/60 bg-red-950/30 px-5 py-4 text-sm text-red-300">
                                    @foreach ($errors->all() as $error)
                                        <div>{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif

                            @if (session('sucesso'))
                                <div class="mt-6 border border-emerald-900/60 bg-emerald-950/30 px-5 py-4 text-sm text-emerald-300">
                                    {{ session('sucesso') }}
                                </div>
                            @endif

                            <form action="{{ route('login.autenticar') }}" method="POST" class="mt-8 space-y-5">
                                @csrf

                                <div>
                                    <label class="mb-2 block text-xs font-extrabold uppercase tracking-[0.16em] text-zinc-500">
                                        Usuário
                                    </label>

                                    <input
                                        type="text"
                                        name="nome_usuario"
                                        value="{{ old('nome_usuario') }}"
                                        placeholder="Digite seu usuário"
                                        class="w-full border border-zinc-800 bg-zinc-950 px-4 py-3 text-zinc-100 placeholder:text-zinc-500 focus:border-red-700 focus:outline-none"
                                    >
                                </div>

                                <div>
                                    <div class="mb-2 flex items-center justify-between gap-3">
                                        <label class="block text-xs font-extrabold uppercase tracking-[0.16em] text-zinc-500">
                                            Senha
                                        </label>

                                        <a href="#"
                                            class="text-[11px] font-extrabold uppercase tracking-[0.16em] text-zinc-500 transition hover:text-red-400">
                                            Esqueci minha senha
                                        </a>
                                    </div>

                                    <input
                                        type="password"
                                        name="senha"
                                        placeholder="Digite sua senha"
                                        class="w-full border border-zinc-800 bg-zinc-950 px-4 py-3 text-zinc-100 placeholder:text-zinc-500 focus:border-red-700 focus:outline-none"
                                    >
                                </div>

                                <div class="flex items-center justify-between border border-zinc-800 bg-black/20 px-4 py-4">
                                    <label class="flex items-center gap-3 text-sm text-zinc-400">
                                        <input
                                            type="checkbox"
                                            name="lembrar"
                                            class="border-zinc-700 bg-zinc-950 text-red-700 focus:ring-red-700"
                                        >
                                        Manter conectado
                                    </label>

                                    <span class="text-[11px] font-extrabold uppercase tracking-[0.16em] text-zinc-600">
                                        Seguro
                                    </span>
                                </div>

                                <button
                                    type="submit"
                                    class="w-full bg-red-700 px-6 py-4 text-sm font-black uppercase tracking-[0.18em] text-white transition hover:bg-red-600"
                                >
                                    Entrar agora
                                </button>

                                <div class="border border-zinc-800 bg-black/20 px-5 py-4 text-center">
                                    <p class="text-sm text-zinc-400">
                                        Não possui conta?
                                        <a href="{{ route('register') }}"
                                            class="font-bold text-white transition hover:text-red-400">
                                            Criar conta
                                        </a>
                                    </p>
                                </div>
                            </form>

                            <!-- SOCIAL OPCIONAL -->
                            <div class="mt-8 border-t border-zinc-800 pt-6">
                                <div class="mb-4 text-xs font-extrabold uppercase tracking-[0.16em] text-zinc-500">
                                    Ou continue com
                                </div>

                                <div class="grid gap-3 sm:grid-cols-2">
                                    <a href="#"
                                        class="flex items-center justify-between border border-zinc-800 bg-black/20 px-4 py-3 text-sm font-semibold text-zinc-200 transition hover:border-red-700 hover:bg-zinc-800 hover:text-white">
                                        <span class="flex items-center gap-3">
                                            <span class="flex h-8 w-8 items-center justify-center border border-zinc-700 bg-zinc-900 text-sm font-bold">G</span>
                                            Google
                                        </span>
                                        <span>→</span>
                                    </a>

                                    <a href="#"
                                        class="flex items-center justify-between border border-zinc-800 bg-black/20 px-4 py-3 text-sm font-semibold text-zinc-200 transition hover:border-red-700 hover:bg-zinc-800 hover:text-white">
                                        <span class="flex items-center gap-3">
                                            <span class="flex h-8 w-8 items-center justify-center border border-zinc-700 bg-zinc-900 text-sm font-bold">f</span>
                                            Facebook
                                        </span>
                                        <span>→</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
            </section>
        </main>
    </div>

</body>
</html>