@extends('layout.main')

@section('main')
    <main>
        <div class="comics-list">
            {{-- titolo --}}
            <h2>Lista Fumetti</h2>
            {{-- /titolo --}}
            {{-- lista fumetti --}}
            <ul>
                @foreach ($comics as $comic)
                    {{-- card --}}
                    <li class="card">
                        {{-- img --}}
                        <div class="cover">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        </div>
                        {{-- /img --}}
                        {{-- info --}}
                        <div class="info">
                            <h3>{{ $comic['title'] }}</h3>
                            <p>{{ $comic['description'] }}</p>
                            <a href="{{ route('comics.show', $comic->id) }}">Dettaglio</a>
                        </div>
                        {{-- /info --}}
                        {{-- delete --}}
                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button>Cancella</button>
                        </form>
                        {{-- /delete --}}
                    </li>
                    {{-- /card --}}
                @endforeach
            </ul>
            {{-- /lista fumetti --}}
        </div>
    </main>
@endsection
