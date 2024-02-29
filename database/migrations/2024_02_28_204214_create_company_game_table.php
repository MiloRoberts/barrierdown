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
        Schema::create('company_game', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id');
            $table->foreignId('game_id');
            $table->foreign('company_id')->references('id')->on('company');
            $table->foreign('game_id')->references('id')->on('game');
            $table->unique( array('company_id', 'game_id'), 'company_game_unique' );
            $table->boolean('is_developer')->default(false);
            $table->boolean('is_publisher')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_game');
    }
};
