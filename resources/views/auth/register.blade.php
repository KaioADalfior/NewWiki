<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar | HorrorWiki</title>
    <meta name="description" content="Crie sua conta na HorrorWiki.">

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

                <a href="{{ route('login') }}"
                    class="border border-zinc-700 bg-zinc-900 px-4 py-2 text-xs font-black uppercase tracking-[0.16em] text-zinc-200 transition hover:border-red-700 hover:bg-red-700 hover:text-white">
                    Já tenho conta
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
                                Novo acesso
                            </div>

                            <h1 class="mt-4 text-4xl font-black tracking-tight text-white md:text-6xl">
                                Crie sua conta na HorrorWiki
                            </h1>

                            <p class="mt-3 max-w-2xl text-sm leading-7 text-zinc-200/90 md:text-base">
                                Faça parte da comunidade, publique histórias, acompanhe conteúdos macabros e personalize sua presença no portal.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CONTEÚDO -->
                <div class="grid gap-0 xl:grid-cols-[1.05fr_0.95fr]">

                    <!-- ESQUERDA -->
                    <section class="border-b border-zinc-800 p-6 md:p-8 xl:border-b-0 xl:border-r">
                        <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                            Comece agora
                        </div>

                        <h2 class="mt-2 text-2xl font-black text-white md:text-3xl">
                            Entre para a Biblioteca das Sombras
                        </h2>

                        <p class="mt-4 max-w-2xl text-sm leading-7 text-zinc-400">
                            Cadastre-se para criar seu perfil, publicar relatos, salvar histórias, acompanhar categorias e mergulhar no universo sombrio da HorrorWiki.
                        </p>

                        <div class="mt-8 grid gap-4 sm:grid-cols-2">
                            <div class="border border-zinc-800 bg-black/20 p-5">
                                <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-zinc-500">
                                    Perfil
                                </div>
                                <div class="mt-2 text-lg font-bold text-white">
                                    Monte sua identidade
                                </div>
                                <p class="mt-2 text-sm leading-6 text-zinc-400">
                                    Personalize sua conta com bio, foto e presença própria.
                                </p>
                            </div>

                            <div class="border border-zinc-800 bg-black/20 p-5">
                                <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-zinc-500">
                                    Publicações
                                </div>
                                <div class="mt-2 text-lg font-bold text-white">
                                    Compartilhe histórias
                                </div>
                                <p class="mt-2 text-sm leading-6 text-zinc-400">
                                    Envie relatos, fanfics e conteúdos para a comunidade.
                                </p>
                            </div>

                            <div class="border border-zinc-800 bg-black/20 p-5">
                                <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-zinc-500">
                                    Comunidade
                                </div>
                                <div class="mt-2 text-lg font-bold text-white">
                                    Faça parte do portal
                                </div>
                                <p class="mt-2 text-sm leading-6 text-zinc-400">
                                    Descubra novos autores, páginas e temas obscuros.
                                </p>
                            </div>

                            <div class="border border-zinc-800 bg-black/20 p-5">
                                <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-zinc-500">
                                    Acesso
                                </div>
                                <div class="mt-2 text-lg font-bold text-white">
                                    Cadastro rápido
                                </div>
                                <p class="mt-2 text-sm leading-6 text-zinc-400">
                                    Crie sua conta e entre no universo da HorrorWiki.
                                </p>
                            </div>
                        </div>

                        <div class="mt-8 border border-zinc-800 bg-gradient-to-br from-zinc-900 to-red-950/30 p-6">
                            <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                                HorrorWiki
                            </div>

                            <h3 class="mt-2 text-2xl font-black text-white">
                                Sua jornada começa aqui
                            </h3>

                            <p class="mt-3 text-sm leading-6 text-zinc-300">
                                Cadastre-se para registrar suas histórias, salvar conteúdos e explorar uma comunidade feita para amantes do terror.
                            </p>
                        </div>
                    </section>

                    <!-- DIREITA -->
                    <section class="p-6 md:p-8">
                        <div class="mx-auto max-w-xl">

                            <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                                Cadastro
                            </div>

                            <h2 class="mt-2 text-3xl font-black text-white">
                                Criar conta
                            </h2>

                            <p class="mt-3 text-sm leading-6 text-zinc-400">
                                Preencha os dados abaixo para acessar a HorrorWiki.
                            </p>

                            @if (session('sucesso'))
                                <div class="mt-6 border border-emerald-800 bg-emerald-950/40 px-5 py-4 text-sm text-emerald-300">
                                    {{ session('sucesso') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="mt-6 border border-red-900/60 bg-red-950/30 px-5 py-4 text-sm text-red-300">
                                    <ul class="space-y-1">
                                        @foreach ($errors->all() as $erro)
                                            <li>{{ $erro }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('register.salvar') }}" method="POST" class="mt-8 space-y-5">
                                @csrf

                                <div>
                                    <label class="mb-2 block text-xs font-extrabold uppercase tracking-[0.16em] text-zinc-500">
                                        Email
                                    </label>

                                    <input
                                        type="email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        placeholder="Digite seu email"
                                        class="w-full border border-zinc-800 bg-zinc-950 px-4 py-3 text-zinc-100 placeholder:text-zinc-500 focus:border-red-700 focus:outline-none"
                                    >
                                </div>

                                <div>
                                    <div class="mb-2 flex items-center justify-between gap-3">
                                        <label class="block text-xs font-extrabold uppercase tracking-[0.16em] text-zinc-500">
                                            Nome de usuário
                                        </label>

                                        <button
                                            type="button"
                                            id="gerarUsuarioTopo"
                                            class="text-[11px] font-extrabold uppercase tracking-[0.16em] text-zinc-500 transition hover:text-red-400"
                                        >
                                            Gerar automático
                                        </button>
                                    </div>

                                    <div class="relative">
                                        <input
                                            type="text"
                                            name="nome_usuario"
                                            id="nome_usuario"
                                            value="{{ old('nome_usuario') }}"
                                            placeholder="Escolha seu usuário"
                                            class="w-full border border-zinc-800 bg-zinc-950 px-4 py-3 pr-14 text-zinc-100 placeholder:text-zinc-500 focus:border-red-700 focus:outline-none"
                                        >

                                        <button
                                            type="button"
                                            id="gerarUsuario"
                                            title="Gerar nome de usuário"
                                            class="absolute right-1 top-1/2 flex h-[calc(100%-8px)] w-12 -translate-y-1/2 items-center justify-center border-l border-zinc-800 bg-zinc-900 text-zinc-400 transition hover:bg-red-700 hover:text-white"
                                        >
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.023 9.348h4.992V4.356m-1.636 14.295A9 9 0 105.64 5.64L3 8.28m0 0h5m-5 0V3.28" />
                                            </svg>
                                        </button>
                                    </div>

                                    <p class="mt-2 text-xs text-zinc-500">
                                        Clique no ícone para gerar um nome automático com duas palavras e 5 números.
                                    </p>
                                </div>

                                <div>
                                    <label class="mb-2 block text-xs font-extrabold uppercase tracking-[0.16em] text-zinc-500">
                                        Senha
                                    </label>

                                    <input
                                        type="password"
                                        name="senha"
                                        placeholder="Digite sua senha"
                                        class="w-full border border-zinc-800 bg-zinc-950 px-4 py-3 text-zinc-100 placeholder:text-zinc-500 focus:border-red-700 focus:outline-none"
                                    >
                                </div>

                                <div class="space-y-4 border border-zinc-800 bg-black/20 px-4 py-4">
                                    <label class="flex items-start gap-3 text-sm text-zinc-400">
                                        <input
                                            type="checkbox"
                                            name="receber_novidades"
                                            value="1"
                                            {{ old('receber_novidades') ? 'checked' : '' }}
                                            class="mt-1 h-4 w-4 rounded border-zinc-600 bg-zinc-900 text-red-700 focus:ring-red-700"
                                        >
                                        <span>Receber emails sobre novidades e atualizações da plataforma.</span>
                                    </label>

                                    <label class="flex items-start gap-3 text-sm text-zinc-400">
                                        <input
                                            type="checkbox"
                                            name="aceitou_termos"
                                            value="1"
                                            {{ old('aceitou_termos') ? 'checked' : '' }}
                                            class="mt-1 h-4 w-4 rounded border-zinc-600 bg-zinc-900 text-red-700 focus:ring-red-700"
                                        >
                                        <span>Concordo com os termos de uso e políticas da plataforma.</span>
                                    </label>
                                </div>

                                <button
                                    type="submit"
                                    class="w-full bg-red-700 px-6 py-4 text-sm font-black uppercase tracking-[0.18em] text-white transition hover:bg-red-600"
                                >
                                    Criar conta
                                </button>

                                <div class="border border-zinc-800 bg-black/20 px-5 py-4 text-center">
                                    <p class="text-sm text-zinc-400">
                                        Já possui conta?
                                        <a href="{{ route('login') }}"
                                            class="font-bold text-white transition hover:text-red-400">
                                            Entrar
                                        </a>
                                    </p>
                                </div>
                            </form>

                            <!-- SOCIAL OPCIONAL -->
                            <div class="mt-8 border-t border-zinc-800 pt-6">
                                <div class="mb-4 text-xs font-extrabold uppercase tracking-[0.16em] text-zinc-500">
                                    Ou cadastre-se com
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

    <script>
        const inputNomeUsuario = document.getElementById('nome_usuario');
        const botaoGerarUsuario = document.getElementById('gerarUsuario');
        const botaoGerarUsuarioTopo = document.getElementById('gerarUsuarioTopo');

        const palavras = [
            'lorem','ipsum','dolor','sit','amet','consectetur','adipiscing','elit','sed','do',
            'eiusmod','tempor','incididunt','ut','labore','et','dolore','magna','aliqua','ut',
            'enim','ad','minim','veniam','quis','nostrud','exercitation','ullamco','laboris','nisi',
            'ut','aliquip','ex','ea','commodo','consequat','duis','aute','irure','dolor','in',
            'reprehenderit','voluptate','velit','esse','cillum','dolore','eu','fugiat','nulla','pariatur',

            'shadow','raven','night','whisper','blood','moon','dark','fog','storm','phantom',
            'grim','void','echo','skull','ember','crypt','vortex','cursed','specter','mist',
            'silent','obsidian','abyss','terror','hollow','dread','shade','fury','chaos','sorrow',
            'venom','fang','claw','howl','beast','witch','curse','haunt','fear','doom',
            'creep','lurker','stalker','entity','demon','angel','fallen','reaper','ghost','spirit',

            'fire','water','earth','air','stone','metal','wood','ice','flame','smoke',
            'wind','storm','cloud','rain','thunder','lightning','ember','ash','dust','sand',
            'river','ocean','sea','wave','tide','deep','sky','sun','star','galaxy',
            'cosmos','void','orbit','planet','nova','comet','asteroid','nebula','pulse','flare',

            'alpha','beta','gamma','delta','omega','sigma','theta','lambda','kappa','zeta',
            'vector','matrix','binary','pixel','code','script','logic','array','stack','node',
            'server','client','network','router','switch','fiber','signal','data','packet','stream',

            'hunter','warrior','knight','mage','rogue','archer','paladin','assassin','monk','bard',
            'king','queen','lord','duke','baron','soldier','captain','general','chief','leader',
            'scout','guard','agent','spy','sniper','tracker','warden','guardian','keeper','watcher',

            'forest','jungle','desert','mountain','valley','hill','cave','canyon','cliff','island',
            'field','meadow','swamp','marsh','lake','pond','stream','spring','shore','coast',

            'stone','brick','iron','steel','copper','silver','gold','platinum','crystal','glass',
            'diamond','ruby','emerald','sapphire','pearl','onyx','quartz','opal','topaz','amber',

            'red','blue','green','yellow','purple','violet','indigo','orange','black','white',
            'gray','silver','golden','crimson','scarlet','azure','teal','cyan','magenta','maroon',

            'fast','slow','quick','rapid','swift','steady','silent','loud','bright','dark',
            'cold','hot','warm','cool','sharp','dull','smooth','rough','soft','hard',

            'zero','one','two','three','four','five','six','seven','eight','nine',
            'ten','prime','even','odd','random','fixed','loop','cycle','pattern','shape',

            'memory','dream','vision','mind','soul','spirit','heart','body','thought','idea',
            'imagine','create','build','design','craft','forge','shape','mold','form','draw',

            'ghostly','haunted','forsaken','lost','broken','twisted','warped','mutant','ancient','forgotten',
            'myth','legend','story','tale','lore','script','chapter','page','book','archive',

            'portal','gate','door','key','lock','seal','mark','symbol','glyph','rune',
            'sigil','totem','idol','mask','cloak','hood','robe','armor','shield','blade',

            'slash','strike','cut','pierce','blast','burn','freeze','shock','crush','break',
            'heal','restore','revive','summon','banish','invoke','control','bind','release','awaken',

            'alphaone','betatwo','gammathree','deltafour','omegafive','shadowone','shadowtwo','shadowthree',
            'darkone','darktwo','darkthree','moonone','moontwo','moonthree','bloodone','bloodtwo','bloodthree',

            'novaone','novatwo','novathree','starone','startwo','starthree','voidone','voidtwo','voidthree',
            'cryptone','crypttwo','cryptthree','ghostone','ghosttwo','ghostthree','reaperone','reapertwo','reaperthree',

            'stormone','stormtwo','stormthree','windone','windtwo','windthree','fireone','firetwo','firethree',
            'iceone','icetwo','icethree','earthone','earthtwo','earththree','metalone','metaltwo','metalthree'
        ];

        function gerarCincoNumeros() {
            return Math.floor(10000 + Math.random() * 90000).toString();
        }

        function pegarPalavraAleatoria() {
            return palavras[Math.floor(Math.random() * palavras.length)];
        }

        function gerarNomeUsuarioAutomatico() {
            let palavra1 = pegarPalavraAleatoria();
            let palavra2 = pegarPalavraAleatoria();

            while (palavra1 === palavra2) {
                palavra2 = pegarPalavraAleatoria();
            }

            const numeros = gerarCincoNumeros();
            const nomeGerado = `${palavra1}${palavra2}${numeros}`;

            inputNomeUsuario.value = nomeGerado;
            inputNomeUsuario.focus();
        }

        botaoGerarUsuario?.addEventListener('click', gerarNomeUsuarioAutomatico);
        botaoGerarUsuarioTopo?.addEventListener('click', gerarNomeUsuarioAutomatico);
    </script>

</body>

</html>