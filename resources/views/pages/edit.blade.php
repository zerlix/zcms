<h1>Seite bearbeiten</h1>

<form action="{{ route('pages.update', $page) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="title">Titel:</label><br>
    <input type="text" name="title" id="title" value="{{ old('title', $page->title) }}" required><br><br>

    <label for="slug">Slug (URL):</label><br>
    <input type="text" name="slug" id="slug" value="{{ old('slug', $page->slug) }}" required><br><br>

    <label for="content">Inhalt:</label><br>
    <textarea name="content" id="content" rows="8" required>{{ old('content', $page->content) }}</textarea><br><br>

    <label>
        <input type="checkbox" name="is_published" value="1" {{ $page->is_published ? 'checked' : '' }}>
        Veröffentlicht
    </label><br><br>

    <button type="submit">Speichern</button>
</form>

<a href="{{ route('pages.show', $page) }}">Zurück zur Seite</a>