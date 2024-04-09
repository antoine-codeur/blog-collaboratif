<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <label for="title">Titre</label>
    <input type="text" name="title" id="title" value="{{ $post->title }}" required>

    <label for="content">Contenu</label>
    <textarea name="content" id="content" required>{{ $post->content }}</textarea>

    <button type="submit">Modifier</button>
</form>
