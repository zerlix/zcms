<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Seiten-Verwaltung
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Button zentriert -->
                    <div class="text-center mb-4">
                        <a href="{{ route('pages.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded inline-block">Neue Seite erstellen</a>
                    </div>
                    
                    @if($pages->count() > 0)
                        <table class="w-full border-collapse border border-gray-300">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="border border-gray-300 px-4 py-2">Titel</th>
                                    <th class="border border-gray-300 px-4 py-2">Slug</th>
                                    <th class="border border-gray-300 px-4 py-2">Veröffentlicht</th>
                                    <th class="border border-gray-300 px-4 py-2">Aktionen</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pages as $page)
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2">{{ $page->title }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $page->slug }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $page->is_published ? 'Ja' : 'Nein' }}</td>
                                        <td class="border border-gray-300 px-4 py-2">
                                            <a href="{{ route('pages.show', $page->slug) }}" class="text-blue-600 hover:underline">Anzeigen</a>
                                            <a href="{{ route('pages.edit', $page) }}" class="text-green-600 hover:underline ml-2">Bearbeiten</a>
                                            <form action="{{ route('pages.destroy', $page) }}" method="POST" class="inline ml-2">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Sind Sie sicher?')">Löschen</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="text-center py-8">
                            <p class="text-gray-500 text-lg mb-4">Keine Seiten vorhanden.</p>
                            <p class="text-gray-400">Erstellen Sie Ihre erste Seite, um loszulegen!</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>