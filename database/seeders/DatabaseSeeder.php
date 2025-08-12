<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        // inside the run() method
        $this->call([
            UserSeeder::class,
            PoojaSeeder::class,
            TagSeeder::class,
            PostSeeder::class,
            BookingSeeder::class,
        ]);
    }
}
