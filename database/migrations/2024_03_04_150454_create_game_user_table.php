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
        Schema::create('game_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id');
            $table->foreignId('user_id');
            $table->foreign('game_id')->references('id')->on('game');
            $table->foreign('user_id')->references('id')->on('user');
            $table->unique( array('game_id', 'user_id'), 'game_user_unique' );
            $table->boolean('is_learning')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_user');
    }
};
