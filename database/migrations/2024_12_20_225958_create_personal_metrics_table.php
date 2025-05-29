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
        Schema::create('personal_metrics', function (Blueprint $table) {
            $table->id();
            $table->string('metric_name'); // Name of the metric
            $table->text('description')->nullable(); // Description of the metric
            $table->float('value')->nullable(); // Value of the metric
            $table->string('unit')->nullable(); // Unit of measurement (e.g., kg, hours)
            $table->date('recorded_at'); // Date when the metric was recorded
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_metrics');
    }
};
