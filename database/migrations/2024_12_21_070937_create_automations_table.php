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
        Schema::create('automations', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name of the automation
            $table->string('type'); // Type of automation (e.g., email, notification)
            $table->text('description')->nullable(); // Description of the automation
            $table->boolean('is_active')->default(true); // Status of the automation
            $table->timestamp('last_run_at')->nullable(); // Last time the automation was executed
            $table->integer('run_count')->default(0); // Number of times the automation has run
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('automations');
    }
};
