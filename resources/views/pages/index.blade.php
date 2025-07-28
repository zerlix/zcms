<h1>Seitenübersicht</h1>

<a href="{{ route('pages.create') }}">Neue Seite anlegen</a>

@if($pages->count())
    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titel</th>
                <th>Slug</th>
                <th>Veröffentlicht?</th>
                <th>Aktionen</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pages as $page)
                <tr>
                    <td>{{ $page->id }}</td>
                    <td>{{ $page->title }}</td>
                    <td>{{ $page->slug }}</td>
                    <td>{{ $page->is_published ? 'Ja' : 'Nein' }}</td>
                    <td>
                        <a href="{{ route('pages.show', $page->slug) }}">Anzeigen</a> |
                        <a href="{{ route('pages.edit', $page) }}">Bearbeiten</a> |
                        <form action="{{ route('pages.destroy', $page) }}" method="POST" style="display:inline" onsubmit="return confirm('Wirklich löschen?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background:none;border:none;color:red;cursor:pointer;">Löschen</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>Keine Seiten vorhanden.</p>
@endif