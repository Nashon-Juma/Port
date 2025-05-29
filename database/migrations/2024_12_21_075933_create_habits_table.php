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
        Schema::create('habits', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name of the habit
            $table->text('description')->nullable(); // Description of the habit
            $table->date('start_date')->nullable(); // When the habit was started
            $table->integer('streak')->default(0); // Current streak count
            $table->integer('goal')->nullable(); // Goal for the habit (e.g., days, repetitions)
            $table->boolean('is_active')->default(true); // Whether the habit is currently active
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habits');
    }
};
