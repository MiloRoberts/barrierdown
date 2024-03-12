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
        Schema::create('lexeme_kanji', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kanji_id');
            $table->foreignId('lexeme_id');
            $table->foreign('kanji_id')->references('id')->on('kanji');
            $table->foreign('lexeme_id')->references('id')->on('lexeme');
            $table->unique( array('kanji_id', 'lexeme_id'), 'lexeme_kanji_unique' );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lexeme_kanji');
    }
};
