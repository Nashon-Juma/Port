<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
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

        User::create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'), // Replace 'password' with a secure password if necessary
        ]);
    }
}
