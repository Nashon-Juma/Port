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
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('level')->nullable();
            $table->text('description')->nullable(); // Detailed description of the skill
            $table->string('category')->nullable(); // Category of the skill (e.g., technical, soft skill)
            $table->date('acquired_at')->nullable(); // Date the skill was acquired
            $table->integer('proficiency')->nullable(); // Proficiency level (e.g., 1-10 scale)
            $table->boolean('is_active')->default(true); // Whether the skill is currently in use
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
