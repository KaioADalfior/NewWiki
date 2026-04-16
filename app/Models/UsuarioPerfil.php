<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsuarioPerfil extends Model
{
    protected $table = 'usuario_perfis';

    protected $fillable = [
        'usuario_id',
        'bio',
        'foto_perfil',
        'perfil_completo',
        'perfil_ativo',
        'desativado_em',
    ];

    protected $casts = [
        'perfil_completo' => 'boolean',
        'perfil_ativo' => 'boolean',
        'desativado_em' => 'datetime',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
}