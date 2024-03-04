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
        Schema::create('game_lexeme', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id');
            $table->foreignId('lexeme_id');
            $table->foreign('game_id')->references('id')->on('game');
            $table->foreign('lexeme_id')->references('id')->on('lexeme');
            $table->unique( array('game_id', 'lexeme_id'), 'game_lexeme_unique' );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_lexeme');
    }
};
