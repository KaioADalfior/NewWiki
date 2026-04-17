<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fanfics', function (Blueprint $table) {
            $table->id();

            $table->foreignId('usuario_id')
                ->constrained('usuarios')
                ->onDelete('cascade');

            $table->foreignId('categoria_id')
                ->constrained('categorias_historias')
                ->onDelete('restrict');

            $table->string('titulo', 180);
            $table->string('slug', 220)->unique();

            $table->text('resumo')->nullable();
            $table->longText('introducao')->nullable();

            $table->string('capa')->nullable();

            $table->boolean('ativa')->default(true);
            $table->boolean('finalizada')->default(false);

            $table->unsignedInteger('visualizacoes')->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fanfics');
    }
};