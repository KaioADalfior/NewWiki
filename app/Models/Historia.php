<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Historia extends Model
{
    protected $table = 'historias';

    protected $fillable = [
        'usuario_id',
        'categoria_id',
        'titulo',
        'slug',
        'tipo',
        'conteudo',
        'capa',
        'destaque',
        'comentarios_liberados',
        'ativa',
        'visualizacoes',
        'publicado_em',
    ];

    protected $casts = [
        'destaque' => 'boolean',
        'comentarios_liberados' => 'boolean',
        'ativa' => 'boolean',
        'publicado_em' => 'datetime',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    public function categoria()
    {
        return $this->belongsTo(CategoriaHistoria::class, 'categoria_id');
    }
}