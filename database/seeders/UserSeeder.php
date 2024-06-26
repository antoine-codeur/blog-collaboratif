<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Créer un admin
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
            'profile_image' => 'profile_images/Avatar_default.svg',
        ]);
        // Créer quelques utilisateurs normaux
        User::factory()->count(10)->create();
    }
}
