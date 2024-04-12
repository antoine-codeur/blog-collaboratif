<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class PostSeeder extends Seeder
{
    public function run()
    {
        // Obtenir tous les utilisateurs
        $users = User::all();

        // Obtenir toutes les catégories
        $categories = Category::all();

        // Créer des posts pour chaque utilisateur
        $users->each(function ($user) use ($categories) {
            Post::factory()->count(3)->make([
                'user_id' => $user->id
            ])->each(function ($post) use ($categories) {
                // Sélectionner entre 1 et 3 catégories aléatoires
                $selectedCategories = $categories->random(rand(1, 3));

                // Créer une description incluant des hashtags de catégories
                $descriptionWithHashtags = collect($selectedCategories)->reduce(function ($description, $category) {
                    return $description . " #" . $category->name;
                }, $post->description ?? "Description initiale");

                // Assigner la description mise à jour et sauvegarder le post
                $post->description = $descriptionWithHashtags;
                $post->save();

                // Attacher les catégories au post
                $post->categories()->attach($selectedCategories->pluck('id')->toArray());
            });
        });
    }
}
