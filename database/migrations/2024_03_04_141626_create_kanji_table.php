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
        Schema::create('kanji', function (Blueprint $table) {
            $table->id();
            $table->foreignID('kanji_symbol_id');
            $table->foreignID('kanji_meaning_id');
            $table->foreignID('kanji_reading_id');
            $table->foreign('kanji_symbol_id')->references('id')->on('kanji_symbol')->onDelete('cascade');
            $table->foreign('kanji_meaning_id')->references('id')->on('kanji_meaning')->onDelete('cascade');
            $table->foreign('kanji_reading_id')->references('id')->on('kanji_reading')->onDelete('cascade');
            $table->unique( array('kanji_symbol_id','kanji_meaning_id', 'kanji_reading_id'), 'kanji_unique' );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kanji');
    }
};
