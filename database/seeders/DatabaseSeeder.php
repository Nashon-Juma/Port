<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\About::factory(10)->create();
        \App\Models\Contact::factory(10)->create();
        \App\Models\Profile::factory(10)->create();
        \App\Models\Project::factory(10)->create();
        \App\Models\Service::factory(10)->create();
        \App\Models\Skills::factory(10)->create();
        \App\Models\Work::factory(10)->create();
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@test.com',
            'password' => Hash::make('password'),
        ]);
    }
}
