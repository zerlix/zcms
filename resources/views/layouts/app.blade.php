<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Mein CMS')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <header>
        <h1>Mein CMS</h1>
        <nav>
            <a href="{{ route('pages.index') }}">Seiten</a>
            <a href="{{ url('/') }}">Startseite</a>
        </nav>
    </header>

    <main style="margin: 2em 0;">
        @yield('content')
    </main>

    <footer style="margin-top: 2em; border-top: 1px solid #ccc; padding-top: 1em;">
        &copy; {{ date('Y') }} ZCMS
    </footer>
</body>
</html>
