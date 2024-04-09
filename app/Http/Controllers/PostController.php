<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

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
        $post->title = $request->title;
        $post->content = $request->content;
        $post->description = $request->description;
        $post->save();
    
        return redirect()->route('posts.index')->with('success', 'Post créé avec succès.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::findOrFail($id); // Trouve le post par ID ou lance une exception si non trouvé
        return view('posts.show', compact('post')); // Passe les données à la vue
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
}
