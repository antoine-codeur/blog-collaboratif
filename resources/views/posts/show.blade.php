@extends('layouts.app')
@section('content')
    <div class="container">
        ajouter auteur et si modifié noté le username du modifieur 
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
    </div>
@endsection