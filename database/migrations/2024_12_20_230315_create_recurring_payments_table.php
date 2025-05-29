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
        Schema::create('recurring_payments', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name of the payment or subscription
            $table->decimal('amount', 10, 2); // Payment amount
            $table->string('currency', 3); // Currency code (e.g., USD, EUR)
            $table->date('start_date'); // Start date of the recurring payment
            $table->date('end_date')->nullable(); // Optional end date
            $table->enum('frequency', ['daily', 'weekly', 'monthly', 'yearly']); // Payment frequency
            $table->text('description')->nullable(); // Optional description
            $table->boolean('is_active')->default(true); // Status of the recurring payment
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recurring_payments');
    }
};
