<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\UsuarioPerfil;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
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
        $usuarioId = session('usuario_id');

        if (!$usuarioId) {
            return redirect()->route('login');
        }

        $dados = $request->validate([
            'bio' => ['required', 'string', 'min:10', 'max:3000'],
        ], [
            'bio.required' => 'A apresentação do perfil é obrigatória.',
            'bio.min' => 'A apresentação do perfil deve ter no mínimo 10 caracteres.',
            'bio.max' => 'A apresentação do perfil deve ter no máximo 3000 caracteres.',
        ]);

        $perfil = UsuarioPerfil::firstOrCreate(
            ['usuario_id' => $usuarioId],
            [
                'perfil_ativo' => true,
                'perfil_completo' => false,
            ]
        );

        $bioLimpa = trim($dados['bio']);

        $perfil->bio = $bioLimpa;
        $perfil->perfil_completo = $bioLimpa !== '';
        $perfil->perfil_ativo = true;
        $perfil->desativado_em = null;
        $perfil->save();

        return redirect()
            ->route('perfil')
            ->with('sucesso', 'Perfil atualizado com sucesso.');
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