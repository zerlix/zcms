<h1>Neue Seite anlegen</h1>

<form action="{{ route('pages.store') }}" method="POST">
    @csrf

    <label for="title">Titel:</label><br>
    <input type="text" name="title" id="title" required><br><br>

    <label for="slug">Slug (URL):</label><br>
    <input type="text" name="slug" id="slug" required><br><br>

    <label for="content">Inhalt:</label><br>
    <textarea name="content" id="content" rows="8" required></textarea><br><br>

    <label>
        <input type="checkbox" name="is_published" value="1">
        Veröffentlicht
    </label><br><br>

    <button type="submit">Speichern</button>
</form>

<a href="{{ route('pages.index') }}">Zurück zur Übersicht</a>