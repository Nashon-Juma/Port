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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('url')->nullable();
            $table->string('image')->nullable();
            $table->string('category')->nullable(); // To categorize projects
            $table->date('start_date')->nullable(); // To track when the project started
            $table->date('end_date')->nullable(); // To track when the project ended
            $table->boolean('is_active')->default(true); // To indicate if the project is ongoing
            $table->integer('priority')->default(0); // To prioritize projects
            $table->text('technologies')->nullable(); // To list technologies used
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
