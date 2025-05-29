<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\About::factory(10)->create();
        // \App\Models\Contact::factory(10)->create();
        \App\Models\Profile::factory(10)->create();
        \App\Models\Project::factory(10)->create();
        // \App\Models\Service::factory(10)->create();
        \App\Models\Skills::factory(10)->create();
        \App\Models\User::factory(10)->create();
    }
}
