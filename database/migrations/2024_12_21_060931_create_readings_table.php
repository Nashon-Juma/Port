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
        Schema::create('readings', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Title of the book
            $table->string('author')->nullable(); // Author of the book
            $table->date('start_date')->nullable(); // Date when reading started
            $table->date('end_date')->nullable(); // Date when reading ended
            $table->integer('rating')->nullable(); // Rating given to the book
            $table->boolean('is_favorite')->default(false); // Mark as favorite
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('readings');
    }
};
