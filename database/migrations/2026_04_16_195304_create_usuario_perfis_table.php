<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('usuario_perfis', function (Blueprint $table) {
            $table->id();

            $table->foreignId('usuario_id')
                ->constrained('usuarios')
                ->onDelete('cascade');

            $table->text('bio')->nullable();
            $table->string('foto_perfil')->nullable();

            $table->boolean('perfil_completo')->default(false);
            $table->boolean('perfil_ativo')->default(true);

            $table->timestamp('desativado_em')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('usuario_perfis');
    }
};