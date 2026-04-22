<?php

namespace App\Http\Controllers;

use App\Models\Fanfic;
use App\Models\Historia;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Str;

class AcervoController extends Controller
{
    public function index(Request $request): View
    {
        $busca = trim((string) $request->get('q', ''));
        $tipo = $request->get('tipo', 'todos');

        $historias = collect();
        $fanfics = collect();

        if ($tipo === 'todos' || $tipo === 'historias') {
            $queryHistorias = Historia::with(['usuario', 'categoria'])
                ->where('ativa', true)
                ->whereNotNull('publicado_em');

            if ($busca !== '') {
                $queryHistorias->where(function ($query) use ($busca) {
                    $query->where('titulo', 'like', "%{$busca}%")
                        ->orWhere('conteudo', 'like', "%{$busca}%")
                        ->orWhereHas('categoria', function ($sub) use ($busca) {
                            $sub->where('nome', 'like', "%{$busca}%")
                                ->orWhere('descricao', 'like', "%{$busca}%");
                        })
                        ->orWhereHas('usuario', function ($sub) use ($busca) {
                            $sub->where('nome_usuario', 'like', "%{$busca}%");
                        });
                });
            }

            $historias = $queryHistorias
                ->orderByDesc('publicado_em')
                ->orderByDesc('created_at')
                ->get()
                ->map(function ($historia) {
                    return (object) [
                        'tipo_item' => 'historia',
                        'titulo' => $historia->titulo,
                        'slug' => $historia->slug,
                        'categoria_nome' => $historia->categoria?->nome ?? 'Sem categoria',
                        'autor' => $historia->usuario?->nome_usuario ?? 'Autor desconhecido',
                        'resumo' => Str::limit(strip_tags($historia->conteudo), 220),
                        'visualizacoes' => $historia->visualizacoes,
                        'data_publicacao' => $historia->publicado_em ?? $historia->created_at,
                        'url' => route('historias.show', $historia->slug),
                    ];
                });
        }

        if ($tipo === 'todos' || $tipo === 'fanfics') {
            $queryFanfics = Fanfic::with(['usuario', 'categoria'])
                ->where('ativa', true);

            if ($busca !== '') {
                $queryFanfics->where(function ($query) use ($busca) {
                    $query->where('titulo', 'like', "%{$busca}%")
                        ->orWhere('resumo', 'like', "%{$busca}%")
                        ->orWhere('introducao', 'like', "%{$busca}%")
                        ->orWhereHas('categoria', function ($sub) use ($busca) {
                            $sub->where('nome', 'like', "%{$busca}%")
                                ->orWhere('descricao', 'like', "%{$busca}%");
                        })
                        ->orWhereHas('usuario', function ($sub) use ($busca) {
                            $sub->where('nome_usuario', 'like', "%{$busca}%");
                        });
                });
            }

            $fanfics = $queryFanfics
                ->orderByDesc('created_at')
                ->get()
                ->map(function ($fanfic) {
                    return (object) [
                        'tipo_item' => 'fanfic',
                        'titulo' => $fanfic->titulo,
                        'slug' => $fanfic->slug,
                        'categoria_nome' => $fanfic->categoria?->nome ?? 'Sem categoria',
                        'autor' => $fanfic->usuario?->nome_usuario ?? 'Autor desconhecido',
                        'resumo' => Str::limit(strip_tags($fanfic->resumo ?: $fanfic->introducao), 220),
                        'visualizacoes' => $fanfic->visualizacoes,
                        'data_publicacao' => $fanfic->created_at,
                        'finalizada' => (bool) $fanfic->finalizada,
                        'url' => route('fanfics.visualizar', $fanfic->slug),
                    ];
                });
        }

        $itens = $historias
            ->concat($fanfics)
            ->sortByDesc(function ($item) {
                return optional($item->data_publicacao)->timestamp ?? 0;
            })
            ->values();

        return view('explorar.index', compact('itens', 'busca', 'tipo'));
    }
}