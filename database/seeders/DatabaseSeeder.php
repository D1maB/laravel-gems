<?php

namespace Database\Seeders;

use App\Models\Listing;
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

        if(User::count() === 0) {
            User::factory()->create([
                'name' => 'Test User',
                'email' => env('FILAMENT_ADMIN_EMAIL'),
                'password' => Hash::make(env('FILAMENT_ADMIN_PASSWORD')),
            ]);
        }

        $this->call([
            ProjectTagSeeder::class,
        ]);
    }
}
