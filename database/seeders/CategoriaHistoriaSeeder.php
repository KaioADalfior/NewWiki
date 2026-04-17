<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaHistoriaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categorias_historias')->upsert([
            [
                'nome' => 'Fanfics de Terror',
                'slug' => 'fanfics-de-terror',
                'tipo' => 'fanfic',
                'descricao' => 'Histórias fictícias de terror criadas pelos usuários.',
                'ativa' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Relatos Reais',
                'slug' => 'relatos-reais',
                'tipo' => 'historia',
                'descricao' => 'Experiências supostamente reais e assustadoras.',
                'ativa' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Contos Macabros',
                'slug' => 'contos-macabros',
                'tipo' => 'historia',
                'descricao' => 'Contos sombrios e perturbadores.',
                'ativa' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Lendas',
                'slug' => 'lendas',
                'tipo' => 'historia',
                'descricao' => 'Lendas urbanas e histórias populares assustadoras.',
                'ativa' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Encontros Sobrenaturais',
                'slug' => 'encontros-sobrenaturais',
                'tipo' => 'historia',
                'descricao' => 'Aparições, espíritos e eventos sobrenaturais.',
                'ativa' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Creepypastas',
                'slug' => 'creepypastas',
                'tipo' => 'historia',
                'descricao' => 'Narrativas virais de horror da internet.',
                'ativa' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Casos Paranormais',
                'slug' => 'casos-paranormais',
                'tipo' => 'historia',
                'descricao' => 'Eventos estranhos sem explicação aparente.',
                'ativa' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Mistérios Sem Explicação',
                'slug' => 'misterios-sem-explicacao',
                'tipo' => 'historia',
                'descricao' => 'Casos sombrios e inexplicáveis.',
                'ativa' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Horror Psicológico',
                'slug' => 'horror-psicologico',
                'tipo' => 'historia',
                'descricao' => 'Histórias de medo mental, tensão e paranoia.',
                'ativa' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Criaturas e Entidades',
                'slug' => 'criaturas-e-entidades',
                'tipo' => 'historia',
                'descricao' => 'Histórias envolvendo monstros, demônios e entidades.',
                'ativa' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ], ['slug'], ['nome', 'tipo', 'descricao', 'ativa', 'updated_at']);
    }
}