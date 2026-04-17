<?php

namespace App\Http\Controllers;

use App\Models\CategoriaHistoria;
use App\Models\Fanfic;
use App\Models\FanficCapitulo;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class FanficController extends Controller
{
    public function criar(string $slug): View|RedirectResponse
    {
        $usuarioId = session('usuario_id');

        if (!$usuarioId) {
            return redirect()->route('login');
        }

        $categoria = CategoriaHistoria::where('slug', $slug)
            ->where('ativa', true)
            ->where('tipo', 'fanfic')
            ->first();

        if (!$categoria) {
            return redirect()->route('perfil')->withErrors(['Categoria de fanfic não encontrada.']);
        }

        return view('fanfics.criar', compact('categoria'));
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
            'resumo' => 'nullable|string|max:1500',
            'introducao' => 'nullable|string',
            'capa' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
        ]);

        $categoria = CategoriaHistoria::where('id', $request->categoria_id)
            ->where('ativa', true)
            ->where('tipo', 'fanfic')
            ->firstOrFail();

        $slugBase = Str::slug($request->titulo);
        $slug = $slugBase;
        $contador = 1;

        while (Fanfic::where('slug', $slug)->exists()) {
            $slug = $slugBase . '-' . $contador;
            $contador++;
        }

        $capa = null;

        if ($request->hasFile('capa')) {
            $capa = $request->file('capa')->store('fanfics/capas', 'public');
        }

        $fanfic = Fanfic::create([
            'usuario_id' => $usuarioId,
            'categoria_id' => $categoria->id,
            'titulo' => $request->titulo,
            'slug' => $slug,
            'resumo' => $request->resumo,
            'introducao' => $request->introducao,
            'capa' => $capa,
            'ativa' => true,
            'finalizada' => false,
            'visualizacoes' => 0,
        ]);

        return redirect()
            ->route('fanfics.capitulos.index', $fanfic->id)
            ->with('sucesso', 'Fanfic criada com sucesso! Agora adicione os capítulos.');
    }

    public function capitulosIndex(int $id): View|RedirectResponse
    {
        $usuarioId = session('usuario_id');

        if (!$usuarioId) {
            return redirect()->route('login');
        }

        $fanfic = Fanfic::with('capitulos')
            ->where('id', $id)
            ->where('usuario_id', $usuarioId)
            ->first();

        if (!$fanfic) {
            return redirect()->route('perfil')->withErrors(['Fanfic não encontrada.']);
        }

        return view('fanfics.capitulos.index', compact('fanfic'));
    }

    public function capituloCriar(int $id): View|RedirectResponse
    {
        $usuarioId = session('usuario_id');

        if (!$usuarioId) {
            return redirect()->route('login');
        }

        $fanfic = Fanfic::where('id', $id)
            ->where('usuario_id', $usuarioId)
            ->first();

        if (!$fanfic) {
            return redirect()->route('perfil')->withErrors(['Fanfic não encontrada.']);
        }

        $proximoNumero = (int) FanficCapitulo::where('fanfic_id', $fanfic->id)->max('numero') + 1;

        return view('fanfics.capitulos.criar', compact('fanfic', 'proximoNumero'));
    }

    public function capituloSalvar(Request $request, int $id): RedirectResponse
    {
        $usuarioId = session('usuario_id');

        if (!$usuarioId) {
            return redirect()->route('login');
        }

        $fanfic = Fanfic::where('id', $id)
            ->where('usuario_id', $usuarioId)
            ->first();

        if (!$fanfic) {
            return redirect()->route('perfil')->withErrors(['Fanfic não encontrada.']);
        }

        $request->validate([
            'titulo' => 'required|string|max:180',
            'numero' => 'required|integer|min:1',
            'conteudo' => 'required|string',
        ]);

        $existeNumero = FanficCapitulo::where('fanfic_id', $fanfic->id)
            ->where('numero', $request->numero)
            ->exists();

        if ($existeNumero) {
            return back()
                ->withErrors(['Já existe um capítulo com esse número.'])
                ->withInput();
        }

        FanficCapitulo::create([
            'fanfic_id' => $fanfic->id,
            'titulo' => $request->titulo,
            'numero' => $request->numero,
            'conteudo' => $request->conteudo,
            'publicado' => $request->has('publicado'),
        ]);

        return redirect()
            ->route('fanfics.capitulos.index', $fanfic->id)
            ->with('sucesso', 'Capítulo criado com sucesso!');
    }

    public function capituloEditar(int $fanficId, int $capituloId): View|RedirectResponse
    {
        $usuarioId = session('usuario_id');

        if (!$usuarioId) {
            return redirect()->route('login');
        }

        $fanfic = Fanfic::where('id', $fanficId)
            ->where('usuario_id', $usuarioId)
            ->first();

        if (!$fanfic) {
            return redirect()->route('perfil')->withErrors(['Fanfic não encontrada.']);
        }

        $capitulo = FanficCapitulo::where('id', $capituloId)
            ->where('fanfic_id', $fanfic->id)
            ->first();

        if (!$capitulo) {
            return redirect()->route('fanfics.capitulos.index', $fanfic->id)
                ->withErrors(['Capítulo não encontrado.']);
        }

        return view('fanfics.capitulos.editar', compact('fanfic', 'capitulo'));
    }

    public function capituloAtualizar(Request $request, int $fanficId, int $capituloId): RedirectResponse
    {
        $usuarioId = session('usuario_id');

        if (!$usuarioId) {
            return redirect()->route('login');
        }

        $fanfic = Fanfic::where('id', $fanficId)
            ->where('usuario_id', $usuarioId)
            ->first();

        if (!$fanfic) {
            return redirect()->route('perfil')->withErrors(['Fanfic não encontrada.']);
        }

        $capitulo = FanficCapitulo::where('id', $capituloId)
            ->where('fanfic_id', $fanfic->id)
            ->first();

        if (!$capitulo) {
            return redirect()->route('fanfics.capitulos.index', $fanfic->id)
                ->withErrors(['Capítulo não encontrado.']);
        }

        $request->validate([
            'titulo' => 'required|string|max:180',
            'numero' => 'required|integer|min:1',
            'conteudo' => 'required|string',
        ]);

        $existeNumero = FanficCapitulo::where('fanfic_id', $fanfic->id)
            ->where('numero', $request->numero)
            ->where('id', '!=', $capitulo->id)
            ->exists();

        if ($existeNumero) {
            return back()
                ->withErrors(['Já existe outro capítulo com esse número.'])
                ->withInput();
        }

        $capitulo->update([
            'titulo' => $request->titulo,
            'numero' => $request->numero,
            'conteudo' => $request->conteudo,
            'publicado' => $request->has('publicado'),
        ]);

        return redirect()
            ->route('fanfics.capitulos.index', $fanfic->id)
            ->with('sucesso', 'Capítulo atualizado com sucesso!');
    }

    public function capituloPublicar(int $fanficId, int $capituloId): RedirectResponse
    {
        $usuarioId = session('usuario_id');

        if (!$usuarioId) {
            return redirect()->route('login');
        }

        $fanfic = Fanfic::where('id', $fanficId)
            ->where('usuario_id', $usuarioId)
            ->firstOrFail();

        $capitulo = FanficCapitulo::where('id', $capituloId)
            ->where('fanfic_id', $fanfic->id)
            ->firstOrFail();

        $capitulo->publicado = !$capitulo->publicado;
        $capitulo->save();

        return redirect()
            ->route('fanfics.capitulos.index', $fanfic->id)
            ->with('sucesso', 'Status do capítulo atualizado!');
    }

    public function visualizar(string $slug): View|RedirectResponse
    {
        $fanfic = Fanfic::with(['usuario', 'capitulos' => function ($query) {
                $query->where('publicado', true)->orderBy('numero');
            }])
            ->where('slug', $slug)
            ->where('ativa', true)
            ->first();

        if (!$fanfic) {
            return redirect()->route('perfil')->withErrors(['Fanfic não encontrada.']);
        }

        $fanfic->increment('visualizacoes');

        return view('fanfics.visualizar', compact('fanfic'));
    }

    public function visualizarCapitulo(string $slug, int $numero): View|RedirectResponse
    {
        $fanfic = Fanfic::where('slug', $slug)
            ->where('ativa', true)
            ->first();

        if (!$fanfic) {
            return redirect()->route('perfil')->withErrors(['Fanfic não encontrada.']);
        }

        $capitulo = FanficCapitulo::where('fanfic_id', $fanfic->id)
            ->where('numero', $numero)
            ->where('publicado', true)
            ->first();

        if (!$capitulo) {
            return redirect()->route('fanfics.visualizar', $fanfic->slug)
                ->withErrors(['Capítulo não encontrado.']);
        }

        $anterior = FanficCapitulo::where('fanfic_id', $fanfic->id)
            ->where('publicado', true)
            ->where('numero', '<', $capitulo->numero)
            ->orderByDesc('numero')
            ->first();

        $proximo = FanficCapitulo::where('fanfic_id', $fanfic->id)
            ->where('publicado', true)
            ->where('numero', '>', $capitulo->numero)
            ->orderBy('numero')
            ->first();

        return view('fanfics.capitulos.visualizar', compact('fanfic', 'capitulo', 'anterior', 'proximo'));
    }
}