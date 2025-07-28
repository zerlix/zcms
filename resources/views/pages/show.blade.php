<h1>{{ $page->title }}</h1>

<p><strong>Slug:</strong> {{ $page->slug }}</p>
<p><strong>Veröffentlicht?</strong> {{ $page->is_published ? 'Ja' : 'Nein' }}</p>
<p><strong>Inhalt:</strong></p>
<div>
    {!! nl2br(e($page->content)) !!}
</div>

<a href="{{ route('pages.index') }}">Zurück zur Übersicht</a>
<a href="{{ route('pages.edit', $page) }}">Bearbeiten</a>