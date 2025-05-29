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
        Schema::create('goals', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->dateTime('target_date');
            $table->boolean('is_completed')->default(false);
            $table->string('category')->nullable();
            $table->integer('priority')->default(1); // 1 = Low, 2 = Medium, 3 = High
            $table->string('progress_status')->default('Not Started'); // e.g., Not Started, In Progress, Completed
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goals');
    }
};
