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
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();
            $table->string('source'); // Source of income
            $table->decimal('amount', 10, 2); // Amount of income
            $table->date('date_received'); // Date income was received
            $table->string('category')->nullable(); // Category of income (e.g., salary, freelance, etc.)
            $table->text('notes')->nullable(); // Additional notes about the income
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incomes');
    }
};
