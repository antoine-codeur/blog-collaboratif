<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        $post = new Post();
        $post->user_id = auth()->id();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->description = $request->description;
        $post->save();
    
        return redirect()->route('posts.index')->with('success', 'Post créé avec succès.');
    }
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
    
        return redirect()->route('posts.index')->with('success', 'Post mis à jour avec succès.');
    }    
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
    
        return back()->with('success', 'Post supprimé avec succès.');
    }

    public function myPosts()
    {
        $userId = Auth::id();
        $posts = Post::where('user_id', $userId)->latest()->get();
    
        return view('posts.myPosts', compact('posts'));
    }
}
