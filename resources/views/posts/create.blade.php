@extends('layouts.app')
@section('content')
    <form action="{{ route('posts.store') }}" method="POST" class="createPost">
        @csrf
        <label for="title">Titre</label>
        <input type="text" name="title" id="title" required>
        <label for="description">Description</label>
        <textarea name="description" id="description" required></textarea>
        <label for="content">Contenu</label>
        <textarea name="content" id="content" required></textarea>
        <button type="submit">Publier</button>
    </form>
@endsection
