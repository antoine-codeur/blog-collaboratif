<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{

    public function index()
    {
        $posts = Post::all(); // Utilisez `latest()->get()` pour les trier par les plus récents
        return view('home', compact('posts'));
    }
    
}
