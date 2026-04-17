<?php

namespace App\Http\Controllers;

use App\Models\CategoriaHistoria;
use App\Models\Fanfic;
use App\Models\Historia;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CategoriaController extends Controller
{
    public function show(string $slug): View|RedirectResponse
    {
        $categoria = CategoriaHistoria::where('slug', $slug)
            ->where('ativa', true)
            ->first();

        if (!$categoria) {
            return redirect()->route('home')->withErrors(['Categoria não encontrada.']);
        }

        $historias = collect();
        $fanfics = collect();

        if ($categoria->tipo === 'historia') {
            $historias = Historia::with('usuario')
                ->where('categoria_id', $categoria->id)
                ->where('ativa', true)
                ->orderByDesc('publicado_em')
                ->orderByDesc('created_at')
                ->get();
        }

        if ($categoria->tipo === 'fanfic') {
            $fanfics = Fanfic::with('usuario')
                ->where('categoria_id', $categoria->id)
                ->where('ativa', true)
                ->orderByDesc('created_at')
                ->get();
        }

        return view('categorias.show', compact('categoria', 'historias', 'fanfics'));
    }
}