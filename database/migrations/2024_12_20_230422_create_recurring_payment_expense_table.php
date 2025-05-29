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
        Schema::create('recurring_payment_expense', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name of the expense
            $table->text('description')->nullable(); // Description of the expense
            $table->decimal('amount', 10, 2); // Amount of the expense
            $table->date('start_date'); // Start date of the recurring payment
            $table->date('end_date')->nullable(); // End date of the recurring payment
            $table->enum('frequency', ['daily', 'weekly', 'monthly', 'yearly']); // Frequency of the payment
            $table->boolean('is_active')->default(true); // Whether the payment is active
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recurring_payment_expense');
    }
};
