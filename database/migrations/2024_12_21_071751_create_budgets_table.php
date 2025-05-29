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
        Schema::create('budgets', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name of the budget or category
            $table->decimal('amount', 10, 2); // Budgeted amount
            $table->decimal('spent', 10, 2)->default(0); // Amount spent
            $table->date('start_date'); // Start date of the budget
            $table->date('end_date'); // End date of the budget
            $table->text('notes')->nullable(); // Additional notes
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('budgets');
    }
};
