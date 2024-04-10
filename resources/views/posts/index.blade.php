@extends('layouts.app')
@section('content')
    @foreach ($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <span>{{ $post->description }}</span>
            <p>{{ $post->content }}</p>
            <a href="{{ route('posts.show', $post->id) }}">Voir plus</a>
            <a href="{{ route('posts.edit', $post->id) }}">Modifier</a>
        </div>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Supprimer</button>
        </form>
    @endforeach
@endsection
