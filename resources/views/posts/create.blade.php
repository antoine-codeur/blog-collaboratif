@extends('layouts.app')
@section('content')
    <h1>Create post</h1>
    <form action="{{ route('posts.store') }}" method="POST" class="createPost">
        @csrf
        <div class="inputBox">
            <label for="title">Titre</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div class="inputBox">
            <label>Auteur</label>
            <p><b>{{ Auth::user()->name }}</b></p>
        </div>
        <div class="inputBox">
            <label for="content">Contenu</label>
            <textarea name="content" id="content" required></textarea>
        </div>
        <div class="inputBox">
            <label for="description">Description</label>
            <textarea name="description" id="description" required></textarea>
        </div>
        <button class="btn" type="submit">Publier</button>
    </form>
@endsection
