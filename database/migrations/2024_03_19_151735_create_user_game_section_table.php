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
        Schema::create('user_game_section', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_section_id');
            $table->foreignId('user_id');
            $table->foreign('game_section_id')->references('id')->on('game_section');
            $table->foreign('user_id')->references('id')->on('user');
            $table->unique( array('user_id', 'game_section_id'), 'user_game_section_unique' );
            $table->boolean('is_learning')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_game_section');
    }
};
