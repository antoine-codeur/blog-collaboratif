<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <label for="title">Titre</label>
    <input type="text" name="title" id="title" required>

    <label for="content">Contenu</label>
    <textarea name="content" id="content" required></textarea>

    <button type="submit">Publier</button>
</form>
