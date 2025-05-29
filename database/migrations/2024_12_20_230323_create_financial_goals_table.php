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
        Schema::create('financial_goals', function (Blueprint $table) {
            $table->id();
            $table->string('goal_name'); // Name of the financial goal
            $table->text('description')->nullable(); // Description of the goal
            $table->decimal('target_amount', 15, 2); // Target amount for the goal
            $table->decimal('current_amount', 15, 2)->default(0); // Current saved amount
            $table->date('target_date')->nullable(); // Target completion date
            $table->boolean('is_achieved')->default(false); // Status of the goal
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('financial_goals');
    }
};
