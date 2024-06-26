@extends('layouts.app')
@section('content')
    <h1>Edit post</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="POST" class="editPost">
        @csrf
        @method('PUT')

        <div class="inputBox">
            <label for="title">Titre</label>
            <input type="text" name="title" id="title" value="{{ $post->title }}" required>    
        </div>
        <div class="inputBox">
            <label>Auteur</label>
            <p><b>{{ $post->user?->name ?? 'Unknown' }}</b></p>
        </div>
        <div class="inputBox">
            <label for="content">Contenu</label>
            <textarea name="content" id="content" required>{{ $post->content }}</textarea>    
        </div>
        <div class="inputBox">
            <label for="description">Description</label>
            <textarea name="description" id="description" required>{{ $post->description }}</textarea>    
        </div>
        <button class="btn" type="submit">Modifier</button>
    </form>
@endsection