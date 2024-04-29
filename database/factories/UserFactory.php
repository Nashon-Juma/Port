<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'image' => $this->faker->imageUrl(),
            'password' => Hash::make('password'),
            'remember_token' => $this->faker->uuid(),
            'info' => $this->faker->word(),
            'about' => $this->faker->word(),
            'description' => $this->faker->text(),
            'role_id' => Role::findOrCreate('Admin', 'web')->id,
        ];
    }
}
