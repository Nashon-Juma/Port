<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\About;

class AboutFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = About::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(-10000, 10000),
            'content' => $this->faker->paragraphs(3, true),
            'image_1' => $this->faker->imageUrl(),
            'image_2' => $this->faker->imageUrl(),
            'image_3' => $this->faker->imageUrl(),
            'image_4' => $this->faker->imageUrl(),
            'image_5' => $this->faker->imageUrl(),
            'image_6' => $this->faker->imageUrl(),
        ];
    }
}
