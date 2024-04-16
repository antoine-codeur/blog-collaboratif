<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            'Cuisine', 'Sport', 'Education', 'Politique', 'Technology', 'Mathematics'
        ];

        foreach ($categories as $categoryName) {
            Category::create([
                'name' => $categoryName,
                'description' => "Description for {$categoryName}",
                'image' => 'images/category/categoryDefault.jpeg',
            ]);
        }
    }
}