<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Service;

class ServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Service::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->text(),
            'image_1' => $this->faker->imageUrl(),
            'image_2' => $this->faker->imageUrl(),
            'image_3' => $this->faker->imageUrl(),
            'image_4' => $this->faker->imageUrl(),
            'image_5' => $this->faker->imageUrl(),
            'image_6' => $this->faker->imageUrl(),
        ];
    }
}
