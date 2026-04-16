<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';

    protected $fillable = [
        'nome_usuario',
        'email',
        'senha',
        'receber_novidades',
        'aceitou_termos',
    ];

    protected $hidden = [
        'senha',
    ];

    protected $casts = [
        'receber_novidades' => 'boolean',
        'aceitou_termos' => 'boolean',
    ];

    public function perfil()
    {
        return $this->hasOne(UsuarioPerfil::class, 'usuario_id');
    }
}