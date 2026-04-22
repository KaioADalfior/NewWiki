<?php

namespace App\Http\Controllers;

use App\Models\Historia;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class HistoriaLeituraController extends Controller
{
    public function show(string $slug): View|RedirectResponse
    {
        $historia = Historia::with(['usuario', 'categoria'])
            ->where('slug', $slug)
            ->where('ativa', true)
            ->first();

        if (!$historia) {
            return redirect()->route('explorar.index')
                ->withErrors(['História não encontrada.']);
        }

        $historia->increment('visualizacoes');

        return view('historias.show', compact('historia'));
    }
}