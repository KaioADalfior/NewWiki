<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\CadastroRealizadoMail;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class CadastroController extends Controller
{
    public function cadastrar(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email|unique:usuarios,email',
            'nome_usuario' => 'required|string|max:255|unique:usuarios,nome_usuario',
            'senha' => 'required|string|min:6',
            'aceitou_termos' => 'required',
        ], [
            'email.required' => 'O email é obrigatório.',
            'email.email' => 'Informe um email válido.',
            'email.unique' => 'Este email já está cadastrado.',
            'nome_usuario.required' => 'O nome de usuário é obrigatório.',
            'nome_usuario.unique' => 'Este nome de usuário já está em uso.',
            'senha.required' => 'A senha é obrigatória.',
            'senha.min' => 'A senha deve ter no mínimo 6 caracteres.',
            'aceitou_termos.required' => 'Você precisa aceitar os termos.',
        ]);

        $usuario = Usuario::create([
            'email' => $request->email,
            'nome_usuario' => $request->nome_usuario,
            'senha' => Hash::make($request->senha),
            'receber_novidades' => $request->has('receber_novidades') ? 1 : 0,
        ]);

        try {
            Mail::to($usuario->email)->send(new CadastroRealizadoMail($usuario));
        } catch (\Throwable $e) {
            return redirect()
                ->route('register')
                ->withInput()
                ->withErrors(['email' => 'Usuário cadastrado, mas o email de boas-vindas não pôde ser enviado.']);
        }

        return redirect()
            ->route('login')
            ->with('sucesso', 'Cadastro realizado com sucesso. Verifique seu email.');
    }
}