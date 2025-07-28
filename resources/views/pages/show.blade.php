<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $page->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p><strong>Slug:</strong> {{ $page->slug }}</p>
                    <p><strong>Veröffentlicht:</strong> {{ $page->is_published ? 'Ja' : 'Nein' }}</p>
                    
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold mb-2">Inhalt:</h3>
                        <div class="prose">
                            {!! nl2br(e($page->content)) !!}
                        </div>
                    </div>

                    <div class="mt-6 flex space-x-4">
                        <a href="{{ route('pages.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Zurück zur Übersicht</a>
                        <a href="{{ route('pages.edit', $page) }}" class="bg-blue-500 text-white px-4 py-2 rounded">Bearbeiten</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>