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
        Schema::create('achievements', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Title of the achievement
            $table->text('description')->nullable(); // Description of the achievement
            $table->date('date_achieved')->nullable(); // Date the achievement was accomplished
            $table->string('category')->nullable(); // Category of the achievement (e.g., personal, professional)
            $table->string('icon')->nullable(); // Optional icon or image path for the achievement
            $table->integer('priority')->default(0); // Priority or order for displaying achievements
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achievements');
    }
};
