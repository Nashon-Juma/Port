<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'status' => $this->faker->randomElement(['Todo', 'InProgress', 'Done']),
            'due_date' => $this->faker->optional()->date(),
            'priority' => $this->faker->randomElement(['low', 'normal', 'high']),

            'progress' => $this->faker->randomFloat(1, 0, 5),
        ];
    }
}
