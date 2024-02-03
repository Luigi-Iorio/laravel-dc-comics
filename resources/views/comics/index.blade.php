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
                        {{-- bottone --}}
                        <button>Cancella</button>
                        {{-- bottone --}}
                        {{-- modale --}}
                        <div class="modale opacity-0">
                            <h3>Vuoi cancellare definitivamente il fumetto: <span>{{ $comic['title'] }}</span>?</h3>
                            <div class="chiudi">Chiudi</div>
                            {{-- elimina --}}
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Cancella Definitivamente">
                            </form>
                            {{-- elimina --}}
                        </div>
                        {{-- modale --}}
                    </li>
                    {{-- /card --}}
                @endforeach
            </ul>
            {{-- /lista fumetti --}}
        </div>
    </main>
@endsection
