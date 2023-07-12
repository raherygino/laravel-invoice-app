<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Organization;
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

        $organizationId = Organization::factory()
            ->create([
                'title' => 'Eluos',
                'theme_logo' => '',
                'email' => 'contact@eluos.mg',
                'address' => "Antsirabe",
                'city' => 'Antsirabe',
                'phone' => rand(1111111111, 9999999999)
            ])->id;

        User::factory()
            ->create([
                'first_name' => 'Admin',
                'last_name' => 'Eluos',
                'role' => 'admin',
                'organization_id' => $organizationId,
                'email' => 'admin@eluos.mg',
                'phone' => rand(1111111111, 9999999999),
                'password' => '1234567890',
                'is_active' => true,
        ]);
    }
}
