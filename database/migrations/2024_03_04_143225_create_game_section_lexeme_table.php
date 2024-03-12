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
        Schema::create('game_section_lexeme', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_section_id');
            $table->foreign('game_section_id')->references('id')->on('game_section');
            $table->foreignId('lexeme_id');
            $table->foreign('lexeme_id')->references('id')->on('lexeme');
            $table->unique( array('game_section_id', 'lexeme_id'), 'game_section_lexeme_unique' );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_section_lexeme');
    }
};
