<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre o Desenvolvedor | HorrorWiki</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-zinc-950 text-zinc-100">

    <div
        class="min-h-screen bg-[radial-gradient(circle_at_top,_rgba(127,29,29,0.18),_transparent_25%),linear-gradient(180deg,_#140406_0%,_#0b0b0d_45%,_#09090b_100%)]">

        <!-- HEADER -->
        <header class="border-b border-zinc-800 bg-zinc-950/90 backdrop-blur">
            <div class="mx-auto flex max-w-[1200px] items-center justify-between px-6 py-4">
                <a href="{{ route('home') }}"
                    class="inline-flex items-center gap-2 border border-zinc-800 bg-zinc-900 px-4 py-2 text-xs font-bold uppercase tracking-[0.16em] text-zinc-300 transition hover:border-red-700 hover:bg-zinc-800 hover:text-white">
                    ← Voltar
                </a>

                <h1 class="text-sm font-black uppercase tracking-[0.18em] text-white md:text-base">
                    Desenvolvedor
                </h1>
            </div>
        </header>

        <!-- CONTEÚDO -->
        <main class="mx-auto max-w-[1000px] px-6 py-12">

            <section
                class="overflow-hidden border border-zinc-800 bg-zinc-900/80 shadow-[0_20px_70px_rgba(0,0,0,0.45)]">

                <!-- TOPO -->
                <div class="relative overflow-hidden border-b border-zinc-800">
                    <div
                        class="absolute inset-0 bg-[linear-gradient(135deg,rgba(127,29,29,0.95)_0%,rgba(24,24,27,0.60)_45%,rgba(9,9,11,0.95)_100%)]">
                    </div>

                    <div class="absolute inset-0 opacity-20">
                        <div
                            class="absolute inset-0 bg-[radial-gradient(circle_at_20%_20%,rgba(255,255,255,0.16),transparent_18%),radial-gradient(circle_at_80%_30%,rgba(255,255,255,0.08),transparent_16%),radial-gradient(circle_at_55%_75%,rgba(255,255,255,0.05),transparent_18%)]">
                        </div>
                    </div>

                    <div class="relative px-6 py-10 md:px-8 md:py-12">
                        <div class="max-w-3xl">
                            <div
                                class="inline-flex items-center gap-2 border border-red-900/60 bg-black/30 px-4 py-1.5 text-[11px] font-extrabold uppercase tracking-[0.18em] text-red-300 backdrop-blur">
                                <span class="h-2 w-2 rounded-full bg-red-500"></span>
                                Sobre o desenvolvedor
                            </div>

                            <h2 class="mt-4 text-4xl font-black tracking-tight text-white md:text-5xl">
                                Kaio Andrião Dalfior
                            </h2>

                            <p class="mt-3 max-w-2xl text-sm leading-7 text-zinc-200/90 md:text-base">
                                A mente por trás da HorrorWiki.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CORPO -->
                <div class="grid gap-0 lg:grid-cols-[1.1fr_0.9fr]">

                    <!-- APRESENTAÇÃO -->
                    <section class="border-b border-zinc-800 p-6 md:p-8 lg:border-b-0 lg:border-r">
                        <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                            Apresentação
                        </div>

                        <h3 class="mt-2 text-2xl font-black text-white md:text-3xl">
                            Quem sou eu
                        </h3>

                        <div class="mt-5 space-y-5 text-zinc-300">
                            <p class="leading-8">
                                Sou <strong class="text-white">Kaio Andrião Dalfior</strong>, formado em
                                <strong class="text-white">Análise e Desenvolvimento de Sistemas</strong>,
                                apaixonado e completamente viciado em programação.
                            </p>

                            <p class="leading-8">
                                Gosto de transformar ideias em sistemas reais, funcionais e bonitos, sempre buscando
                                unir visual moderno, organização e performance em cada projeto que desenvolvo.
                            </p>

                            <p class="leading-8">
                                Além disso, sou louco por tecnologia, interfaces bem construídas e pela sensação de ver
                                um projeto sair do papel e ganhar vida por meio do código.
                            </p>

                            <p class="leading-8 text-zinc-400">
                                A HorrorWiki é mais do que uma página: é um projeto construído com dedicação, identidade
                                própria e muita vontade de criar algo marcante para quem gosta de histórias sombrias.
                            </p>
                        </div>
                    </section>

                    <!-- PAINEL LATERAL -->
                    <aside class="p-6 md:p-8">
                        <div class="border border-zinc-800 bg-gradient-to-br from-zinc-900 to-red-950/30 p-6">
                            <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                                Tecnologias
                            </div>

                            <div class="mt-5 space-y-3">
                                <div
                                    class="border border-zinc-800 bg-black/20 px-4 py-3 text-sm font-semibold text-zinc-200">
                                    PHP
                                </div>
                                <div
                                    class="border border-zinc-800 bg-black/20 px-4 py-3 text-sm font-semibold text-zinc-200">
                                    Laravel
                                </div>
                                <div
                                    class="border border-zinc-800 bg-black/20 px-4 py-3 text-sm font-semibold text-zinc-200">
                                    MySQL
                                </div>
                                <div
                                    class="border border-zinc-800 bg-black/20 px-4 py-3 text-sm font-semibold text-zinc-200">
                                    JavaScript
                                </div>
                                <div
                                    class="border border-zinc-800 bg-black/20 px-4 py-3 text-sm font-semibold text-zinc-200">
                                    HTML + Tailwind
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 border border-zinc-800 bg-zinc-900/75 p-6">
                            <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                                Trilha sonora
                            </div>

                            <h4 class="mt-2 text-xl font-black text-white">
                                Atmosfera macabra
                            </h4>

                            <p class="mt-3 text-sm leading-6 text-zinc-400">
                                Use os controles abaixo para tocar, pausar, ajustar o volume ou reiniciar a música.
                            </p>

                            <div class="mt-5 space-y-4">
                                <audio id="audioMacabro" preload="auto" loop>
                                    <source src="{{ asset('audio/macabra.mp3') }}" type="audio/mpeg">
                                    Seu navegador não suporta áudio.
                                </audio>

                                <div class="flex items-center justify-between gap-4">

                                    <!-- BOTÃO PLAY/PAUSE -->
                                    <button id="btnToggle"
                                        class="flex h-12 w-12 items-center justify-center rounded-full border border-zinc-700 bg-zinc-900 text-zinc-200 transition hover:border-red-700 hover:bg-red-700 hover:text-white">

                                        <!-- ÍCONE (COMEÇA COMO PAUSE) -->
                                        <svg id="iconPause" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <rect x="6" y="5" width="4" height="14" rx="1"></rect>
                                            <rect x="14" y="5" width="4" height="14" rx="1"></rect>
                                        </svg>

                                        <svg id="iconPlay" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M8 5v14l11-7z"></path>
                                        </svg>
                                    </button>

                                    <!-- VOLUME -->
                                    <div class="flex items-center gap-3 w-full">
                                        <span class="text-xs text-zinc-500">🔊</span>
                                        <input id="volumeRange" type="range" min="0" max="1" step="0.01" value="0.35"
                                            class="w-full accent-red-700">
                                    </div>

                                    <!-- REINICIAR -->
                                    <button id="btnRestart"
                                        class="flex h-10 w-10 items-center justify-center border border-zinc-700 bg-zinc-900 text-zinc-400 transition hover:border-red-700 hover:text-white">
                                        ⟲
                                    </button>
                                </div>                  
                            </div>
                        </div>
                    </aside>
                </div>
            </section>

        </main>
    </div>

    <script>
        const audio = document.getElementById('audioMacabro');
        const btnToggle = document.getElementById('btnToggle');
        const btnRestart = document.getElementById('btnRestart');
        const volumeRange = document.getElementById('volumeRange');

        const iconPlay = document.getElementById('iconPlay');
        const iconPause = document.getElementById('iconPause');

        audio.volume = 0.35;

        // TENTAR AUTOPLAY
        window.addEventListener('load', async () => {
            try {
                await audio.play();
            } catch {
                console.log('Autoplay bloqueado');
                iconPlay.classList.remove('hidden');
                iconPause.classList.add('hidden');
            }
        });

        // PLAY / PAUSE TOGGLE
        btnToggle.addEventListener('click', async () => {
            if (audio.paused) {
                await audio.play();
                iconPlay.classList.add('hidden');
                iconPause.classList.remove('hidden');
            } else {
                audio.pause();
                iconPlay.classList.remove('hidden');
                iconPause.classList.add('hidden');
            }
        });

        // REINICIAR
        btnRestart.addEventListener('click', () => {
            audio.currentTime = 0;
            audio.play();
            iconPlay.classList.add('hidden');
            iconPause.classList.remove('hidden');
        });

        // VOLUME
        volumeRange.addEventListener('input', (e) => {
            audio.volume = e.target.value;
        });
    </script>

</body>

</html>