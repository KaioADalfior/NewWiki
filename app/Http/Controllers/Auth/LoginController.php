<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function autenticar(Request $request): RedirectResponse
    {
        $dados = $request->validate([
            'nome_usuario' => ['required', 'string'],
            'senha' => ['required', 'string'],
        ], [
            'nome_usuario.required' => 'O nome de usuário é obrigatório.',
            'senha.required' => 'A senha é obrigatória.',
        ]);

        $usuario = Usuario::with('perfil')
            ->where('nome_usuario', $dados['nome_usuario'])
            ->first();

        if (!$usuario || !Hash::check($dados['senha'], $usuario->senha)) {
            return back()
                ->withInput($request->only('nome_usuario'))
                ->withErrors([
                    'login' => 'Usuário ou senha inválidos.',
                ]);
        }

        if ($usuario->perfil && !$usuario->perfil->perfil_ativo) {
            return back()
                ->withInput($request->only('nome_usuario'))
                ->withErrors([
                    'login' => 'Este perfil está desativado.',
                ]);
        }

        $request->session()->put('usuario_id', $usuario->id);
        $request->session()->put('usuario_nome', $usuario->nome_usuario);
        $request->session()->put('usuario_email', $usuario->email);

        $request->session()->regenerate();

        return redirect()->route('home.logado');
    }

    public function logout(Request $request): RedirectResponse
    {
        $request->session()->forget(['usuario_id', 'usuario_nome', 'usuario_email']);
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('login')
            ->with('sucesso', 'Logout realizado com sucesso.');
    }
}