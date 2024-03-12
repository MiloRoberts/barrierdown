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
        Schema::create('game_genre', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id');
            $table->foreignId('genre_id');
            $table->foreign('game_id')->references('id')->on('game');
            $table->foreign('genre_id')->references('id')->on('genre');
            $table->unique( array('game_id', 'genre_id'), 'game_genre_unique' );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_genre');
    }
};
