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
        Schema::create('platform', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 22)->unique();
            $table->string('short_name', 22)->unique();
            $table->string('slug', 22)->unique();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('platform');
    }
};
