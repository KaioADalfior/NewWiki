<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fanfic_capitulos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('fanfic_id')
                ->constrained('fanfics')
                ->onDelete('cascade');

            $table->string('titulo', 180);
            $table->integer('numero');

            $table->longText('conteudo');

            $table->boolean('publicado')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fanfic_capitulos');
    }
};