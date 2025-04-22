<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nome do jogo
            $table->text('description'); // Descrição do jogo
            $table->string('genre'); // Gênero do jogo (Ex: Ação, Aventura, etc)
            $table->integer('release_year'); // Ano de lançamento do jogo
            $table->foreignId('videogame_id')->constrained('videogames')->onDelete('cascade'); // Relacionamento com a tabela videogames
            $table->timestamps(); // Campos de timestamps: created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
