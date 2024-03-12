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
        Schema::create('lexeme', function (Blueprint $table) {
            $table->id();
            $table->foreignID('lexeme_item_id');
            $table->foreignID('lexeme_meaning_id');
            $table->foreignID('lexeme_reading_id');
            $table->foreign('lexeme_item_id')->references('id')->on('lexeme_item')->onDelete('cascade');
            $table->foreign('lexeme_meaning_id')->references('id')->on('lexeme_meaning')->onDelete('cascade');
            $table->foreign('lexeme_reading_id')->references('id')->on('lexeme_reading')->onDelete('cascade');
            $table->unique( array('lexeme_item_id','lexeme_meaning_id', 'lexeme_reading_id'), 'lexeme_unique' );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lexeme');
    }
};
