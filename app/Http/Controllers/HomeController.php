<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{

    public function index()
    {
        $posts = Post::latest()->take(5)->get(); // Récupère les 5 derniers posts
        return view('home', compact('posts'));
    }
    
}
