@foreach ($posts as $post)
    <div class="post">
        <h3>{{ $post->title }}</h3>
        <p>Auteur: <b>{{ $post->user->name }}</b></p>
        <p>{{ $post->content }}</p>
        <a href="{{ route('posts.show', $post->id) }}">Lire plus</a>
    </div>
@endforeach
