<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = \App\Models\Category::all();
        return view('categories.index', compact('categories'));
    }
    public function create()
    {
        return view('categories.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $category = new \App\Models\Category([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        $category->save();

        return redirect()->route('categories.index');
    }
    public function show(string $id)
    {
        $category = \App\Models\Category::findOrFail($id);
        return view('categories.show', compact('category'));
    }
    public function edit(string $id)
    {
        $category = \App\Models\Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
    
        $category = \App\Models\Category::findOrFail($id);
        $category->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
    
        return redirect()->route('categories.index');
    }
    public function destroy(string $id)
    {
        $category = \App\Models\Category::findOrFail($id);
        $category->delete();
    
        return redirect()->route('categories.index');
    }
    
}
