<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(AdminSeeder::class);
        $this->call(StaffSeeder::class);

        // User::factory()->create([
        //     'name' => 'factory',
        //     'email' => 'test1@example.com',
        // ]);
    }
}
