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
        Schema::create('game_section', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id');
            $table->foreign('game_id')->references('id')->on('game')->onDelete('cascade');
            $table->string('name', 40);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_section');
    }
};
