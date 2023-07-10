<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        User::factory()
            ->create([
                'first_name' => 'Admin',
                'last_name' => 'Eluos',
                'organization_id' => 1,
                'email' => 'admin@eluos.mg',
                'phone' => rand(1111111111, 9999999999),
                'password' => 'admin123',
                'is_active' => true,
            ]);
    }
}
