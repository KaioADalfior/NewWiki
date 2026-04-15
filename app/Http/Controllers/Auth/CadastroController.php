<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class CadastroController extends Controller
{
    public function cadastrar(Request $request): RedirectResponse
    {
        $dados = $request->validate([
            'email' => ['required', 'email', 'max:255', 'unique:usuarios,email'],
            'nome_usuario' => ['required', 'string', 'min:3', 'max:255', 'unique:usuarios,nome_usuario'],
            'senha' => ['required', 'string', 'min:4'],
            'aceitou_termos' => ['required', 'accepted'],
        ], [
            'email.required' => 'O email é obrigatório.',
            'email.email' => 'Informe um email válido.',
            'email.unique' => 'Este email já está cadastrado.',

            'nome_usuario.required' => 'O nome de usuário é obrigatório.',
            'nome_usuario.min' => 'O nome de usuário deve ter no mínimo 3 caracteres.',
            'nome_usuario.unique' => 'Este nome de usuário já está em uso.',

            'senha.required' => 'A senha é obrigatória.',
            'senha.min' => 'A senha deve ter no mínimo 4 caracteres.',

            'aceitou_termos.required' => 'Você precisa aceitar os termos.',
            'aceitou_termos.accepted' => 'Você precisa aceitar os termos.',
        ]);

        Usuario::create([
            'email' => $dados['email'],
            'nome_usuario' => $dados['nome_usuario'],
            'senha' => Hash::make($dados['senha']),
            'receber_novidades' => $request->boolean('receber_novidades'),
            'aceitou_termos' => true,
        ]);

        return redirect()
            ->route('login')
            ->with('sucesso', 'Cadastro realizado com sucesso.');
    }
}