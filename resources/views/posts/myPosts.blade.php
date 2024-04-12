@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Mes Posts</h1>
    @foreach ($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->description }}</p>
            <a href="{{ route('posts.show', $post->id) }}">Voir plus</a>
            <a href="{{ route('posts.edit', $post->id) }}">Modifier</a>
        </div>
    @endforeach
</div>
@endsection
