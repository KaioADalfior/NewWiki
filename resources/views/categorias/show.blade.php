@extends('layouts.app')

@section('title', $categoria->nome . ' | HorrorWiki')

@section('content')
    <div class="mx-auto max-w-[1440px] px-4 py-8 md:px-8">
        <section class="border border-zinc-800 bg-zinc-900/80 p-6 shadow-[0_20px_70px_rgba(0,0,0,0.45)]">
            <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                {{ $categoria->tipo === 'fanfic' ? 'Fanfic' : 'História' }}
            </div>

            <h1 class="mt-2 text-4xl font-black text-white">
                {{ $categoria->nome }}
            </h1>

            <p class="mt-4 max-w-3xl text-sm leading-7 text-zinc-300">
                {{ $categoria->descricao ?: 'Explore as publicações desta categoria.' }}
            </p>
        </section>

        @if($categoria->tipo === 'historia')
            <section class="mt-8">
                <div class="mb-5 flex items-center justify-between">
                    <h2 class="text-2xl font-black text-white">Histórias desta categoria</h2>
                </div>

                <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-3">
                    @forelse($historias as $historia)
                        <article class="border border-zinc-800 bg-zinc-900/75 p-5 transition hover:border-red-700">
                            <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                                História
                            </div>

                            <h3 class="mt-2 text-xl font-black text-white break-words">
                                {{ $historia->titulo }}
                            </h3>

                            <p class="mt-3 text-sm text-zinc-500">
                                Por {{ $historia->usuario->nome_usuario ?? 'Autor' }}
                            </p>

                            <div class="mt-4">
                                <a href="#"
                                    class="inline-flex items-center border border-zinc-700 bg-zinc-950 px-4 py-2 text-xs font-black uppercase tracking-[0.16em] text-zinc-200 transition hover:border-red-700 hover:text-white">
                                    Ler história
                                </a>
                            </div>
                        </article>
                    @empty
                        <div class="md:col-span-2 xl:col-span-3 border border-zinc-800 bg-zinc-900/75 p-6 text-zinc-400">
                            Nenhuma história publicada nesta categoria ainda.
                        </div>
                    @endforelse
                </div>
            </section>
        @endif

        @if($categoria->tipo === 'fanfic')
            <section class="mt-8">
                <div class="mb-5 flex items-center justify-between">
                    <h2 class="text-2xl font-black text-white">Fanfics desta categoria</h2>
                </div>

                <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-3">
                    @forelse($fanfics as $fanfic)
                        <article class="overflow-hidden border border-zinc-800 bg-zinc-900/75 transition hover:border-red-700">
                            @if($fanfic->capa)
                                <div class="h-56 overflow-hidden border-b border-zinc-800">
                                    <img src="{{ asset('storage/' . $fanfic->capa) }}"
                                        alt="{{ $fanfic->titulo }}"
                                        class="h-full w-full object-cover">
                                </div>
                            @endif

                            <div class="p-5">
                                <div class="text-xs font-extrabold uppercase tracking-[0.18em] text-red-400">
                                    Fanfic
                                </div>

                                <h3 class="mt-2 text-xl font-black text-white break-words">
                                    {{ $fanfic->titulo }}
                                </h3>

                                <p class="mt-3 text-sm text-zinc-500">
                                    Por {{ $fanfic->usuario->nome_usuario ?? 'Autor' }}
                                </p>

                                @if($fanfic->resumo)
                                    <p class="mt-4 line-clamp-4 text-sm leading-6 text-zinc-300 break-words">
                                        {{ $fanfic->resumo }}
                                    </p>
                                @endif

                                <div class="mt-4">
                                    <a href="{{ route('fanfics.visualizar', $fanfic->slug) }}"
                                        class="inline-flex items-center border border-zinc-700 bg-zinc-950 px-4 py-2 text-xs font-black uppercase tracking-[0.16em] text-zinc-200 transition hover:border-red-700 hover:text-white">
                                        Ler fanfic
                                    </a>
                                </div>
                            </div>
                        </article>
                    @empty
                        <div class="md:col-span-2 xl:col-span-3 border border-zinc-800 bg-zinc-900/75 p-6 text-zinc-400">
                            Nenhuma fanfic publicada nesta categoria ainda.
                        </div>
                    @endforelse
                </div>
            </section>
        @endif
    </div>
@endsection