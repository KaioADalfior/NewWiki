<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FanficCapitulo extends Model
{
    protected $table = 'fanfic_capitulos';

    protected $fillable = [
        'fanfic_id',
        'titulo',
        'numero',
        'conteudo',
        'publicado',
    ];

    protected $casts = [
        'publicado' => 'boolean',
    ];

    public function fanfic()
    {
        return $this->belongsTo(Fanfic::class, 'fanfic_id');
    }
}