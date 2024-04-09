@foreach ($posts as $post)
    <div class="post">
        <h3>{{ $post->title }}</h3>
        <p>{{ $post->content }}</p>
        <a href="{{ route('posts.show', $post->id) }}">Lire plus</a>
    </div>
@endforeach
