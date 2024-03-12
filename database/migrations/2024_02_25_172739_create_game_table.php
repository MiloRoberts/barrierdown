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
        Schema::create('game', function (Blueprint $table) {
            $table->id();
            $table->foreignId('title_id');
            $table->foreign('title_id')->references('id')->on('title')->onDelete('cascade');
            $table->foreignId('platform_id');
            $table->foreign('platform_id')->references('id')->on('platform')->onDelete('cascade');
            $table->foreignId('as_publisher_company_id');
            $table->foreign('as_publisher_company_id')->references('id')->on('company')->onDelete('cascade');
            $table->unique( array('title_id','platform_id', 'as_publisher_company_id'), 'game_unique' );
            $table->foreignId('difficulty_id');
            $table->foreign('difficulty_id')->references('id')->on('difficulty')->onDelete('cascade');
            $table->text('info')->nullable();
            $table->year('year_released');
            $table->string('slug')->unique();
            // $table->datetime('...stuff...');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game');
    }
};
