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
        Schema::create('user_lexeme', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lexeme_id');
            $table->foreignId('user_id');
            $table->foreign('lexeme_id')->references('id')->on('lexeme');
            $table->foreign('user_id')->references('id')->on('user');
            $table->unique( array('lexeme_id', 'user_id'), 'user_lexeme_unique' );
            $table->boolean('is_learning')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_lexeme');
    }
};
