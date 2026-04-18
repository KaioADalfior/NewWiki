<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\UsuarioPerfil;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class PerfilController extends Controller
{
    public function index(): View|RedirectResponse
    {
        $usuarioId = session('usuario_id');

        if (!$usuarioId) {
            return redirect()->route('login');
        }

        $usuario = Usuario::with('perfil')->find($usuarioId);

        if (!$usuario) {
            session()->flush();
            return redirect()->route('login');
        }

        $perfil = $usuario->perfil;

        return view('perfil', compact('usuario', 'perfil'));
    }

    public function salvar(Request $request): RedirectResponse
    {
        $request->validate([
            'bio' => 'nullable|string|max:1000',
            'foto_perfil' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
        ], [
            'bio.max' => 'A bio deve ter no máximo 1000 caracteres.',
            'foto_perfil.uploaded' => 'Falha ao enviar a imagem.',
            'foto_perfil.image' => 'O arquivo enviado precisa ser uma imagem.',
            'foto_perfil.mimes' => 'A imagem deve ser JPG, JPEG, PNG ou WEBP.',
            'foto_perfil.max' => 'A imagem deve ter no máximo 5 MB.',
        ]);

        $usuarioId = session('usuario_id');

        if (!$usuarioId) {
            return redirect()->route('login');
        }

        $perfil = UsuarioPerfil::firstOrCreate(
            ['usuario_id' => $usuarioId],
            [
                'bio' => null,
                'perfil_completo' => false,
                'perfil_ativo' => true,
            ]
        );

        $perfil->bio = $request->bio;

        if ($request->hasFile('foto_perfil')) {
            if (!empty($perfil->foto_perfil) && Storage::disk('public')->exists($perfil->foto_perfil)) {
                Storage::disk('public')->delete($perfil->foto_perfil);
            }

            $caminhoFoto = $request->file('foto_perfil')->store('perfis', 'public');
            $perfil->foto_perfil = $caminhoFoto;
        }

        $perfil->perfil_completo = !empty($perfil->bio) || !empty($perfil->foto_perfil);
        $perfil->save();

        return redirect()->back()->with('sucesso', 'Perfil atualizado com sucesso!');
    }

    public function desativar(Request $request): RedirectResponse
    {
        $usuarioId = session('usuario_id');

        if (!$usuarioId) {
            return redirect()->route('login');
        }

        $perfil = UsuarioPerfil::firstOrCreate(
            ['usuario_id' => $usuarioId],
            [
                'perfil_ativo' => true,
                'perfil_completo' => false,
            ]
        );

        $perfil->perfil_ativo = false;
        $perfil->desativado_em = now();
        $perfil->save();

        $request->session()->flush();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('login')
            ->with('sucesso', 'Perfil desativado com sucesso.');
    }
}