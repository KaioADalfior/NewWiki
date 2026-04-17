<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil | HorrorWiki</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-zinc-950 text-zinc-100 antialiased selection:bg-red-700/40 selection:text-white">

    @php
        $bio = $perfil?->bio ?? '';
        $perfilCompleto = $perfil?->perfil_completo ?? false;
        $perfilAtivo = $perfil?->perfil_ativo ?? true;
        $fotoPerfilUrl = $perfil?->foto_perfil ? asset('storage/' . $perfil->foto_perfil) : null;
    @endphp

    <div
        class="min-h-screen bg-[radial-gradient(circle_at_top,_rgba(127,29,29,0.18),_transparent_25%),linear-gradient(180deg,_#140406_0%,_#0b0b0d_45%,_#09090b_100%)]">

        <header class="sticky top-0 z-30 border-b border-zinc-800 bg-zinc-950/95 backdrop-blur">
            <div class="mx-auto flex max-w-[1500px] items-center justify-between gap-4 px-4 py-3 md:px-6">
                <div class="flex items-center gap-3">
                    <a href="{{ route('home.logado') }}"
                        class="inline-flex items-center gap-2 border border-zinc-800 bg-zinc-900 px-4 py-2 text-xs font-bold uppercase tracking-[0.16em] text-zinc-300 transition hover:border-red-700 hover:bg-zinc-800 hover:text-white">
                        ← Voltar
                    </a>

                    <img src="{{ asset('images/logo.png') }}" alt="HorrorWiki"
                        class="h-10 w-auto object-contain md:h-12">
                </div>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="border border-zinc-700 bg-zinc-900 px-4 py-2 text-xs font-black uppercase tracking-[0.16em] text-zinc-200 transition hover:border-red-700 hover:bg-red-700 hover:text-white">
                        Desconectar
                    </button>
                </form>
            </div>
        </header>

        <main class="mx-auto max-w-[1500px] px-4 py-6 md:px-6 md:py-8">

            @if (session('sucesso'))
                <div class="mb-6 border border-emerald-900/60 bg-emerald-950/30 px-5 py-4 text-sm text-emerald-300">
                    {{ session('sucesso') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-6 border border-red-900/60 bg-red-950/30 px-5 py-4 text-sm text-red-300">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <section
                class="overflow-hidden border border-zinc-800 bg-zinc-900/80 shadow-[0_20px_70px_rgba(0,0,0,0.45)]">

                <div class="relative h-56 overflow-hidden border-b border-zinc-800 md:h-72">
                    <div
                        class="absolute inset-0 bg-[linear-gradient(135deg,rgba(127,29,29,0.95)_0%,rgba(24,24,27,0.58)_45%,rgba(9,9,11,0.95)_100%)]">
                    </div>

                    <div class="absolute inset-0 opacity-20">
                        <div
                            class="absolute left-0 top-0 h-full w-full bg-[radial-gradient(circle_at_20%_20%,rgba(255,255,255,0.20),transparent_18%),radial-gradient(circle_at_80%_30%,rgba(255,255,255,0.08),transparent_16%),radial-gradient(circle_at_55%_75%,rgba(255,255,255,0.06),transparent_18%)]">
                        </div>
                    </div>

                    <div
                        class="absolute inset-0 bg-[linear-gradient(180deg,transparent_0%,transparent_55%,rgba(0,0,0,0.55)_100%)]">
                    </div>

                    <div class="absolute inset-x-0 bottom-0">
                        <div class="mx-auto flex max-w-[1500px] items-end justify-between px-6 pb-6">
                            <div>
                                <div
                                    class="inline-flex items-center gap-2 border border-red-900/60 bg-black/30 px-4 py-1.5 text-[11px] font-extrabold uppercase tracking-[0.18em] text-red-300 backdrop-blur">
                                    <span class="h-2 w-2 rounded-full bg-red-500"></span>
                                    Perfil Sombrio
                                </div>

                                <h1 class="mt-4 text-4xl font-black tracking-tight text-white md:text-6xl">
                                    Meu Perfil
                                </h1>

                                <p class="mt-2 max-w-2xl text-sm text-zinc-200/90 md:text-base">
                                    Seu espaço dentro da HorrorWiki para relatos, fanfics, contos macabros e páginas de
                                    horror.
                                </p>
                            </div>

                            <div class="hidden text-right md:block">
                                <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-zinc-300/70">
                                    Membro da comunidade
                                </div>
                                <div class="mt-2 text-2xl font-black text-white">
                                    HorrorWiki
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative px-6 pb-6 pt-0">
                    <div class="flex flex-col gap-8 lg:flex-row lg:items-start lg:justify-between">

                        <div class="flex flex-col gap-5 lg:flex-row lg:items-start">
                            <div class="-mt-14 md:-mt-20">
                                @if($fotoPerfilUrl)
                                    <div
                                        class="h-28 w-28 overflow-hidden rounded-full border-[5px] border-zinc-950 bg-white shadow-[0_20px_60px_rgba(0,0,0,0.55)] md:h-40 md:w-40">
                                        <img src="{{ $fotoPerfilUrl }}" alt="Foto de perfil"
                                            class="block h-full w-full object-cover object-center">
                                    </div>
                                @else
                                    <div
                                        class="flex h-28 w-28 items-center justify-center rounded-full border-[5px] border-zinc-950 bg-zinc-900 text-4xl font-black text-white shadow-[0_20px_60px_rgba(0,0,0,0.55)] md:h-40 md:w-40 md:text-5xl">
                                        {{ strtoupper(substr($usuario->nome_usuario, 0, 1)) }}
                                    </div>
                                @endif
                            </div>

                            <div class="pt-2">
                                <div class="flex flex-wrap items-center gap-3">
                                    <h2 class="text-3xl font-black tracking-tight text-white md:text-5xl">
                                        {{ $usuario->nome_usuario }}
                                    </h2>

                                    <span
                                        class="border border-{{ $perfilAtivo ? 'emerald' : 'red' }}-900/60 bg-black/20 px-3 py-1 text-[10px] font-extrabold uppercase tracking-[0.18em] {{ $perfilAtivo ? 'text-emerald-300' : 'text-red-300' }}">
                                        {{ $perfilAtivo ? 'Perfil ativo' : 'Perfil desativado' }}
                                    </span>
                                </div>

                                <div class="mt-3 flex flex-wrap items-center gap-3 text-sm text-zinc-400">
                                    <span>{{ $usuario->email }}</span>
                                    <span class="hidden text-zinc-700 md:inline">•</span>
                                    <span>Membro da HorrorWiki</span>
                                </div>

                                <div class="mt-6 grid grid-cols-2 gap-3 sm:grid-cols-4">
                                    <div class="border border-zinc-800 bg-black/20 px-4 py-4">
                                        <div class="text-2xl font-black text-white">0</div>
                                        <div
                                            class="mt-1 text-[11px] font-bold uppercase tracking-[0.16em] text-zinc-500">
                                            Relatos</div>
                                    </div>

                                    <div class="border border-zinc-800 bg-black/20 px-4 py-4">
                                        <div class="text-2xl font-black text-white">0</div>
                                        <div
                                            class="mt-1 text-[11px] font-bold uppercase tracking-[0.16em] text-zinc-500">
                                            Fanfics</div>
                                    </div>

                                    <div class="border border-zinc-800 bg-black/20 px-4 py-4">
                                        <div class="text-2xl font-black text-white">0</div>
                                        <div
                                            class="mt-1 text-[11px] font-bold uppercase tracking-[0.16em] text-zinc-500">
                                            Postagens</div>
                                    </div>

                                    <div class="border border-zinc-800 bg-black/20 px-4 py-4">
                                        <div class="text-2xl font-black text-white">0</div>
                                        <div
                                            class="mt-1 text-[11px] font-bold uppercase tracking-[0.16em] text-zinc-500">
                                            Favoritos</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-3 lg:pt-8">
                            <button id="openEditModal" type="button"
                                class="inline-flex items-center justify-center border border-zinc-700 bg-zinc-900 px-5 py-3 text-sm font-black uppercase tracking-[0.16em] text-zinc-200 transition hover:border-red-700 hover:bg-zinc-800 hover:text-white">
                                Editar perfil
                            </button>

                            <button id="openStoryModal" type="button"
                                class="inline-flex items-center justify-center bg-red-700 px-5 py-3 text-sm font-black uppercase tracking-[0.16em] text-white transition hover:bg-red-600">
                                Nova história
                            </button>
                        </div>
                    </div>

                    <div class="mt-8 overflow-x-auto border-t border-zinc-800">
                        <div
                            class="flex min-w-max items-center gap-6 pt-4 text-sm font-bold uppercase tracking-[0.08em]">
                            <button class="border-b-2 border-red-600 px-1 pb-4 pt-1 text-white">Sobre</button>
                            <button
                                class="border-b-2 border-transparent px-1 pb-4 pt-1 text-zinc-500 transition hover:text-zinc-300">Parede</button>
                            <button
                                class="border-b-2 border-transparent px-1 pb-4 pt-1 text-zinc-500 transition hover:text-zinc-300">Blog</button>
                            <button
                                class="border-b-2 border-transparent px-1 pb-4 pt-1 text-zinc-500 transition hover:text-zinc-300">Contribuições</button>
                            <button
                                class="border-b-2 border-transparent px-1 pb-4 pt-1 text-zinc-500 transition hover:text-zinc-300">Atividade</button>
                            <button
                                class="border-b-2 border-transparent px-1 pb-4 pt-1 text-zinc-500 transition hover:text-zinc-300">Favoritos</button>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mt-8 grid gap-8 xl:grid-cols-[minmax(0,1fr)_340px]">

                <div class="space-y-8">
                    <article class="border border-zinc-800 bg-zinc-900/75 p-6 shadow-[0_10px_40px_rgba(0,0,0,0.28)]">
                        <div class="mb-5 flex items-center justify-between gap-3">
                            <div>
                                <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                                    Sobre
                                </div>
                                <h3 class="mt-2 text-2xl font-black text-white">
                                    Apresentação do perfil
                                </h3>
                            </div>
                        </div>

                        <div class="space-y-5 text-zinc-300">
                            @if ($bio !== '')
                                <p class="whitespace-pre-line leading-7">{{ $bio }}</p>
                            @else
                                <p class="leading-7">
                                    Este usuário ainda não preencheu sua página de perfil.
                                </p>

                                <p class="leading-7 text-zinc-400">
                                    Aqui será possível exibir sua descrição pessoal, seus gostos por terror psicológico,
                                    gore, sobrenatural, creepypastas, lendas urbanas, criaturas e fanfics autorais.
                                </p>
                            @endif
                        </div>
                    </article>

                    <article class="border border-zinc-800 bg-zinc-900/75 p-6 shadow-[0_10px_40px_rgba(0,0,0,0.28)]">
                        <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                            Estatísticas
                        </div>
                        <h3 class="mt-2 text-2xl font-black text-white">
                            Resumo da conta
                        </h3>

                        <div class="mt-6 grid gap-4 md:grid-cols-2 xl:grid-cols-4">
                            <div class="border border-zinc-800 bg-black/20 p-5">
                                <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-zinc-500">Nome de
                                    usuário</div>
                                <div class="mt-2 text-lg font-bold text-white">{{ $usuario->nome_usuario }}</div>
                            </div>

                            <div class="border border-zinc-800 bg-black/20 p-5">
                                <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-zinc-500">Email
                                </div>
                                <div class="mt-2 break-all text-lg font-bold text-white">{{ $usuario->email }}</div>
                            </div>

                            <div class="border border-zinc-800 bg-black/20 p-5">
                                <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-zinc-500">Tipo de
                                    perfil</div>
                                <div class="mt-2 text-lg font-bold text-white">Leitor / Autor</div>
                            </div>

                            <div class="border border-zinc-800 bg-black/20 p-5">
                                <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-zinc-500">Status
                                </div>
                                <div
                                    class="mt-2 text-lg font-bold {{ $perfilAtivo ? 'text-emerald-400' : 'text-red-400' }}">
                                    {{ $perfilAtivo ? 'Ativo' : 'Desativado' }}
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <aside class="space-y-8">
                    <div class="border border-zinc-800 bg-zinc-900/75 p-6 shadow-[0_10px_40px_rgba(0,0,0,0.28)]">
                        <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                            Ações
                        </div>

                        <div class="mt-5 space-y-3">
                            <a href="#"
                                class="block border border-zinc-700 bg-black/20 px-4 py-3 text-sm font-semibold text-zinc-200 transition hover:border-red-700 hover:bg-zinc-800 hover:text-white">
                                Ver meus relatos
                            </a>

                            <a href="#"
                                class="block border border-zinc-700 bg-black/20 px-4 py-3 text-sm font-semibold text-zinc-200 transition hover:border-red-700 hover:bg-zinc-800 hover:text-white">
                                Ver minhas fanfics
                            </a>

                            <a href="#"
                                class="block border border-zinc-700 bg-black/20 px-4 py-3 text-sm font-semibold text-zinc-200 transition hover:border-red-700 hover:bg-zinc-800 hover:text-white">
                                Itens salvos
                            </a>

                            <a href="#"
                                class="block border border-zinc-700 bg-black/20 px-4 py-3 text-sm font-semibold text-zinc-200 transition hover:border-red-700 hover:bg-zinc-800 hover:text-white">
                                Configurações da conta
                            </a>
                        </div>
                    </div>

                    <div class="border border-zinc-800 bg-zinc-900/75 p-6 shadow-[0_10px_40px_rgba(0,0,0,0.28)]">
                        <h3 class="text-xl font-black text-white">
                            Ferramentas do perfil
                        </h3>

                        <div class="mt-5 space-y-3">
                            <button id="openEditModalAside" type="button"
                                class="block w-full border border-zinc-700 bg-black/20 px-4 py-3 text-left text-sm font-semibold text-zinc-300 transition hover:border-red-700 hover:bg-zinc-800 hover:text-red-300">
                                Editar informações do perfil
                            </button>
                            <a href="#"
                                class="block border border-zinc-700 bg-black/20 px-4 py-3 text-sm font-semibold text-zinc-300 transition hover:border-red-700 hover:bg-zinc-800 hover:text-red-300">Gerenciar
                                contribuições</a>
                            <a href="#"
                                class="block border border-zinc-700 bg-black/20 px-4 py-3 text-sm font-semibold text-zinc-300 transition hover:border-red-700 hover:bg-zinc-800 hover:text-red-300">Histórico
                                de atividade</a>
                            <a href="#"
                                class="block border border-zinc-700 bg-black/20 px-4 py-3 text-sm font-semibold text-zinc-300 transition hover:border-red-700 hover:bg-zinc-800 hover:text-red-300">Preferências</a>
                            <a href="#"
                                class="block border border-zinc-700 bg-black/20 px-4 py-3 text-sm font-semibold text-zinc-300 transition hover:border-red-700 hover:bg-zinc-800 hover:text-red-300">Segurança
                                da conta</a>
                        </div>
                    </div>

                    <div
                        class="border border-zinc-800 bg-gradient-to-br from-zinc-900 to-red-950/30 p-6 shadow-[0_10px_40px_rgba(0,0,0,0.28)]">
                        <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                            HorrorWiki
                        </div>

                        <h3 class="mt-2 text-2xl font-black text-white">
                            Biblioteca das Sombras
                        </h3>

                        <p class="mt-3 text-sm leading-6 text-zinc-300">
                            Explore relatos perturbadores, publique fanfics macabras, participe de fóruns e mergulhe em
                            histórias proibidas.
                        </p>
                    </div>

                    @if($perfilCompleto)
                        <div
                            class="border border-emerald-900/50 bg-emerald-950/20 p-5 shadow-[0_10px_40px_rgba(0,0,0,0.28)]">
                            <div class="flex items-start gap-3">
                                <div
                                    class="mt-0.5 flex h-9 w-9 items-center justify-center border border-emerald-700/60 bg-emerald-900/20 text-emerald-300">
                                    ✓
                                </div>

                                <div>
                                    <h4 class="text-sm font-black uppercase tracking-[0.16em] text-emerald-300">
                                        Perfil completo
                                    </h4>
                                    <p class="mt-2 text-sm leading-6 text-zinc-300">
                                        Seu perfil está totalmente preenchido e sua bio já foi carregada na página.
                                    </p>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="border border-amber-900/50 bg-amber-950/20 p-5 shadow-[0_10px_40px_rgba(0,0,0,0.28)]">
                            <div class="flex items-start gap-3">
                                <div
                                    class="mt-0.5 flex h-9 w-9 items-center justify-center border border-amber-700/60 bg-amber-900/20 text-amber-300">
                                    !
                                </div>

                                <div>
                                    <h4 class="text-sm font-black uppercase tracking-[0.16em] text-amber-300">
                                        Aviso da conta
                                    </h4>
                                    <p class="mt-2 text-sm leading-6 text-zinc-300">
                                        Complete seu perfil para deixar sua presença mais marcante na comunidade da
                                        HorrorWiki.
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif
                </aside>
            </section>
        </main>
    </div>

    <div id="modalOverlay" class="pointer-events-none fixed inset-0 z-40 bg-black/70 opacity-0 transition duration-300">
    </div>

    <div id="editModal"
        class="pointer-events-none fixed inset-0 z-50 flex items-center justify-center px-4 opacity-0 transition duration-300">
        <div class="w-full max-w-2xl border border-zinc-800 bg-zinc-900 p-8 shadow-[0_25px_80px_rgba(0,0,0,0.55)]">
            <div class="mb-6 flex items-center justify-between border-b border-zinc-800 pb-4">
                <h2 class="text-2xl font-black text-white">
                    Editar perfil
                </h2>

                <button id="closeEditModal" type="button"
                    class="flex h-10 w-10 items-center justify-center border border-zinc-700 bg-zinc-950 text-zinc-300 transition hover:border-red-700 hover:text-white">
                    ✕
                </button>
            </div>

            <form action="{{ route('perfil.salvar') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf

                <div>
                    <label class="mb-2 block text-xs font-extrabold uppercase tracking-[0.16em] text-zinc-500">
                        Nome do usuário
                    </label>

                    <input type="text" value="{{ $usuario->nome_usuario }}" disabled
                        class="w-full border border-zinc-800 bg-zinc-950 px-4 py-3 text-zinc-300">
                </div>

                <div>
                    <label class="mb-2 block text-xs font-extrabold uppercase tracking-[0.16em] text-zinc-500">
                        Email
                    </label>

                    <input type="text" value="{{ $usuario->email }}" disabled
                        class="w-full border border-zinc-800 bg-zinc-950 px-4 py-3 text-zinc-300">
                </div>

                <div>
                    <label class="mb-2 block text-xs font-extrabold uppercase tracking-[0.16em] text-zinc-500">
                        Foto de perfil
                    </label>

                    <input type="file" name="foto_perfil" accept="image/*"
                        class="w-full border border-zinc-800 bg-zinc-950 px-4 py-3 text-zinc-300 file:mr-4 file:border-0 file:bg-red-700 file:px-4 file:py-2 file:text-white file:cursor-pointer">

                    @if($fotoPerfilUrl)
                        <div class="mt-4 flex items-center gap-4 border border-zinc-800 bg-black/20 p-4">
                            <div class="h-20 w-20 overflow-hidden rounded-full border border-zinc-700 bg-white">
                                <img src="{{ $fotoPerfilUrl }}" alt="Foto atual"
                                    class="block h-full w-full object-cover object-center">
                            </div>

                            <div>
                                <div class="text-sm font-bold text-white">Foto atual</div>
                                <div class="text-xs uppercase tracking-[0.14em] text-zinc-500">Avatar da conta</div>
                            </div>
                        </div>
                    @endif
                </div>

                <div>
                    <label class="mb-2 block text-xs font-extrabold uppercase tracking-[0.16em] text-zinc-500">
                        Apresentação do perfil
                    </label>

                    <textarea name="bio" rows="6"
                        class="w-full border border-zinc-800 bg-zinc-950 px-4 py-3 text-zinc-100 focus:border-red-700 focus:outline-none"
                        placeholder="Conte sobre você, seus gostos por histórias de terror, fanfics, relatos e criaturas...">{{ old('bio', $bio) }}</textarea>
                </div>

                <div class="mt-6 flex flex-col gap-3 border-t border-zinc-800 pt-5 sm:flex-row sm:justify-between">
                    <button type="button" id="openDeactivateConfirm"
                        class="w-full border border-red-800 bg-zinc-950 px-5 py-3 text-sm font-black uppercase tracking-[0.16em] text-red-400 transition hover:bg-red-950/20 sm:w-auto">
                        Desativar perfil
                    </button>

                    <button type="submit"
                        class="w-full bg-red-700 px-6 py-3 text-sm font-black uppercase tracking-[0.16em] text-white transition hover:bg-red-600 sm:w-auto">
                        Salvar
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div id="deactivateOverlay"
        class="pointer-events-none fixed inset-0 z-[55] bg-black/80 opacity-0 transition duration-300"></div>

    <div id="deactivateModal"
        class="pointer-events-none fixed inset-0 z-[60] flex items-center justify-center px-4 opacity-0 transition duration-300">
        <div class="w-full max-w-md border border-zinc-800 bg-zinc-900 p-6 shadow-[0_25px_80px_rgba(0,0,0,0.55)]">
            <h3 class="text-xl font-black text-white">Desativar perfil</h3>

            <p class="mt-3 text-sm leading-6 text-zinc-300">
                Tem certeza que deseja desativar seu perfil? Você será desconectado e não poderá entrar novamente
                enquanto o perfil estiver desativado.
            </p>

            <div class="mt-6 flex flex-col gap-3 border-t border-zinc-800 pt-5 sm:flex-row sm:justify-end">
                <button id="closeDeactivateModal" type="button"
                    class="border border-zinc-700 bg-zinc-950 px-4 py-3 text-sm font-black uppercase tracking-[0.16em] text-zinc-200 transition hover:border-red-700 hover:text-white">
                    Cancelar
                </button>

                <form action="{{ route('perfil.desativar') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="bg-red-700 px-5 py-3 text-sm font-black uppercase tracking-[0.16em] text-white transition hover:bg-red-600">
                        Confirmar
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        const openEditModal = document.getElementById('openEditModal');
        const openEditModalAside = document.getElementById('openEditModalAside');
        const closeEditModal = document.getElementById('closeEditModal');
        const modalOverlay = document.getElementById('modalOverlay');
        const editModal = document.getElementById('editModal');

        const openDeactivateConfirm = document.getElementById('openDeactivateConfirm');
        const closeDeactivateModal = document.getElementById('closeDeactivateModal');
        const deactivateOverlay = document.getElementById('deactivateOverlay');
        const deactivateModal = document.getElementById('deactivateModal');

        function abrirModal() {
            modalOverlay.classList.remove('opacity-0', 'pointer-events-none');
            editModal.classList.remove('opacity-0', 'pointer-events-none');
        }

        function fecharModal() {
            modalOverlay.classList.add('opacity-0', 'pointer-events-none');
            editModal.classList.add('opacity-0', 'pointer-events-none');
        }

        function abrirModalDesativacao() {
            deactivateOverlay.classList.remove('opacity-0', 'pointer-events-none');
            deactivateModal.classList.remove('opacity-0', 'pointer-events-none');
        }

        function fecharModalDesativacao() {
            deactivateOverlay.classList.add('opacity-0', 'pointer-events-none');
            deactivateModal.classList.add('opacity-0', 'pointer-events-none');
        }

        openEditModal?.addEventListener('click', abrirModal);
        openEditModalAside?.addEventListener('click', abrirModal);
        closeEditModal?.addEventListener('click', fecharModal);
        modalOverlay?.addEventListener('click', fecharModal);

        openDeactivateConfirm?.addEventListener('click', abrirModalDesativacao);
        closeDeactivateModal?.addEventListener('click', fecharModalDesativacao);
        deactivateOverlay?.addEventListener('click', fecharModalDesativacao);

        @if ($errors->any())
            abrirModal();
        @endif
    </script>


    <div id="storyOverlay"
        class="pointer-events-none fixed inset-0 z-[70] bg-black/70 opacity-0 transition duration-300"></div>

    <div id="storyModal"
        class="pointer-events-none fixed inset-0 z-[80] flex items-center justify-center px-4 opacity-0 transition duration-300">
        <div class="w-full max-w-3xl border border-zinc-800 bg-zinc-900 p-6 shadow-[0_25px_80px_rgba(0,0,0,0.55)]">
            <div class="mb-6 flex items-center justify-between border-b border-zinc-800 pb-4">
                <div>
                    <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                        HorrorWiki
                    </div>
                    <h2 class="mt-2 text-2xl font-black text-white">
                        Escolha uma categoria
                    </h2>
                </div>

                <button id="closeStoryModal" type="button"
                    class="flex h-10 w-10 items-center justify-center border border-zinc-700 bg-zinc-950 text-zinc-300 transition hover:border-red-700 hover:text-white">
                    ✕
                </button>
            </div>

            <div id="storyCategories" class="grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
                <div class="border border-zinc-800 bg-black/20 px-4 py-4 text-sm text-zinc-400">
                    Carregando categorias...
                </div>
            </div>
        </div>
    </div>


    <script>
    const openStoryModal = document.getElementById('openStoryModal');
        const closeStoryModal = document.getElementById('closeStoryModal');
        const storyOverlay = document.getElementById('storyOverlay');
        const storyModal = document.getElementById('storyModal');
        const storyCategories = document.getElementById('storyCategories');

        function abrirStoryModal() {
            storyOverlay.classList.remove('opacity-0', 'pointer-events-none');
            storyModal.classList.remove('opacity-0', 'pointer-events-none');
            carregarCategorias();
        }

        function fecharStoryModal() {
            storyOverlay.classList.add('opacity-0', 'pointer-events-none');
            storyModal.classList.add('opacity-0', 'pointer-events-none');
        }

        async function carregarCategorias() {
            storyCategories.innerHTML = `
            <div class="border border-zinc-800 bg-black/20 px-4 py-4 text-sm text-zinc-400">
                Carregando categorias...
            </div>
        `;

            try {
                const response = await fetch("{{ route('historias.categorias') }}");
                const categorias = await response.json();

                storyCategories.innerHTML = '';

                categorias.forEach(categoria => {
                    const card = document.createElement('a');
                    card.href = categoria.tipo === 'fanfic'
                        ? `/fanfics/criar/${categoria.slug}`
                        : `/historias/criar/${categoria.slug}`;
                    card.className = 'block border border-zinc-800 bg-black/20 p-4 transition hover:border-red-700 hover:bg-zinc-800';

                    card.innerHTML = `
                    <div class="text-xs font-extrabold uppercase tracking-[0.18em] ${categoria.tipo === 'fanfic' ? 'text-red-400' : 'text-zinc-500'}">
                        ${categoria.tipo === 'fanfic' ? 'Fanfic' : 'História'}
                    </div>
                    <div class="mt-2 text-lg font-black text-white">${categoria.nome}</div>
                    <div class="mt-2 text-sm leading-6 text-zinc-400">${categoria.descricao ?? ''}</div>
                `;

                    storyCategories.appendChild(card);
                });
            } catch (error) {
                storyCategories.innerHTML = `
                <div class="border border-red-900/60 bg-red-950/20 px-4 py-4 text-sm text-red-300">
                    Erro ao carregar categorias.
                </div>
            `;
            }
        }

        openStoryModal?.addEventListener('click', abrirStoryModal);
        closeStoryModal?.addEventListener('click', fecharStoryModal);
        storyOverlay?.addEventListener('click', fecharStoryModal);
    </script>
</body>

</html>