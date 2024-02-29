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
            $table->foreignId('platform_id');
            $table->foreign('title_id')->references('id')->on('title')->onDelete('cascade');
            $table->foreign('platform_id')->references('id')->on('platform')->onDelete('cascade');
            $table->unique( array('title_id','platform_id'), 'game_unique' );
            $table->text('info')->nullable();
            $table->year('year_released');
            $table->string('slug')->unique();
            // $table->timestamp('time_posted');
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
