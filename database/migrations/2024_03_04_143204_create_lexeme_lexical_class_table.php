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
        Schema::create('lexeme_lexical_class', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lexeme_id');
            $table->foreignId('lexical_class_id');
            $table->foreign('lexeme_id')->references('id')->on('lexeme');
            $table->foreign('lexical_class_id')->references('id')->on('lexical_class');
            $table->unique( array('lexeme_id', 'lexical_class_id'), 'lexeme_lexical_class_unique' );
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lexeme_lexical_class');
    }
};
