<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fanfic extends Model
{
    protected $table = 'fanfics';

    protected $fillable = [
        'usuario_id',
        'categoria_id',
        'titulo',
        'slug',
        'resumo',
        'introducao',
        'capa',
        'ativa',
        'finalizada',
        'visualizacoes',
    ];

    protected $casts = [
        'ativa' => 'boolean',
        'finalizada' => 'boolean',
    ];

    public function capitulos()
    {
        return $this->hasMany(FanficCapitulo::class, 'fanfic_id')->orderBy('numero');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    public function categoria()
    {
        return $this->belongsTo(CategoriaHistoria::class, 'categoria_id');
    }
}