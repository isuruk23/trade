<?php

namespace Database\Seeders;

use App\Models\User;
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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@zimvex.com',
            'role' => 'admin',
            'password' => Hash::make('@gmail.com'),
            'verified' => 1,
            'status' => 1,
        ]);

         $this->call([
            CoinsTableSeeder::class,
        ]);
    }
}
