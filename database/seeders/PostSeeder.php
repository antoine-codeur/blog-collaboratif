<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

class PostSeeder extends Seeder
{
    public function run()
    {
        // Obtenir tous les utilisateurs
        $users = User::all();

        // Créer des posts pour chaque utilisateur
        $users->each(function ($user) {
            Post::factory()->count(3)->create([
                'user_id' => $user->id
            ]);
        });
    }
}
