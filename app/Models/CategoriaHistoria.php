<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriaHistoria extends Model
{
    protected $table = 'categorias_historias';

    protected $fillable = [
        'nome',
        'slug',
        'tipo',
        'descricao',
        'ativa',
    ];

    protected $casts = [
        'ativa' => 'boolean',
    ];

    public function historias()
    {
        return $this->hasMany(Historia::class, 'categoria_id');
    }
}