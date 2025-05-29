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
        Schema::create('return_of_investments', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Title of the investment or project
            $table->text('description')->nullable(); // Description of the investment
            $table->decimal('amount_invested', 15, 2); // Amount invested
            $table->decimal('current_value', 15, 2)->nullable(); // Current value of the investment
            $table->decimal('roi_percentage', 5, 2)->nullable(); // Return on investment percentage
            $table->date('investment_date'); // Date of investment
            $table->date('maturity_date')->nullable(); // Maturity date of the investment
            $table->string('status')->default('active'); // Status of the investment (e.g., active, completed, etc.)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('return_of_investments');
    }
};
