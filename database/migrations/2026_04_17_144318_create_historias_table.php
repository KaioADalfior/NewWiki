<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('historias', function (Blueprint $table) {
            $table->id();

            $table->foreignId('usuario_id')
                ->constrained('usuarios')
                ->onDelete('cascade');

            $table->foreignId('categoria_id')
                ->constrained('categorias_historias')
                ->onDelete('restrict');

            $table->string('titulo', 255);
            $table->string('slug', 220)->unique();

            $table->enum('tipo', ['fanfic', 'historia']);
            $table->longText('conteudo');

            $table->string('capa')->nullable();

            $table->boolean('destaque')->default(false);
            $table->boolean('comentarios_liberados')->default(true);
            $table->boolean('ativa')->default(true);

            $table->unsignedInteger('visualizacoes')->default(0);

            $table->timestamp('publicado_em')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('historias');
    }
};