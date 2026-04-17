<?php

namespace App\Http\Controllers;

use App\Models\CategoriaHistoria;
use App\Models\Historia;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class HistoriaController extends Controller
{
    public function categorias()
    {
        $categorias = CategoriaHistoria::where('ativa', true)
            ->orderBy('nome')
            ->get();

        return response()->json($categorias);
    }

    public function criar(string $slug): View|RedirectResponse
    {
        $usuarioId = session('usuario_id');

        if (!$usuarioId) {
            return redirect()->route('login');
        }

        $categoria = CategoriaHistoria::where('slug', $slug)
            ->where('ativa', true)
            ->first();

        if (!$categoria) {
            return redirect()->route('perfil')->withErrors(['Categoria não encontrada.']);
        }

        if ($categoria->tipo === 'fanfic') {
            return view('historias.criar_fanfic', compact('categoria'));
        }

        return view('historias.criar', compact('categoria'));
    }

    public function salvar(Request $request): RedirectResponse
    {
        $usuarioId = session('usuario_id');

        if (!$usuarioId) {
            return redirect()->route('login');
        }

        $request->validate([
            'categoria_id' => 'required|exists:categorias_historias,id',
            'titulo' => 'required|string|max:180',
            'conteudo' => 'required|string',
        ]);

        $categoria = CategoriaHistoria::where('id', $request->categoria_id)
            ->where('ativa', true)
            ->firstOrFail();

        $slugBase = Str::slug($request->titulo);
        $slug = $slugBase;
        $contador = 1;

        while (Historia::where('slug', $slug)->exists()) {
            $slug = $slugBase . '-' . $contador;
            $contador++;
        }

        Historia::create([
            'usuario_id' => $usuarioId,
            'categoria_id' => $categoria->id,
            'titulo' => $request->titulo,
            'slug' => $slug,
            'tipo' => $categoria->tipo,
            'conteudo' => $request->conteudo,
            'comentarios_liberados' => true,
            'ativa' => true,
            'visualizacoes' => 0,
            'publicado_em' => now(),
        ]);

        return redirect()->route('perfil')->with('sucesso', 'História publicada com sucesso!');
    }
}