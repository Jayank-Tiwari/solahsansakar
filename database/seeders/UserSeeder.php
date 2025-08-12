<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Create the main Admin User
        User::firstOrCreate(
            ['email' => 'admin@solahsansakar.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('password'), // Use a secure password
                'role' => 'admin',
            ]
        );
    }
}