@extends('layout.main')

@section('main')
    <main>
        <div class="show">
            <h2>Fumetto Selezionato</h2>
            <ul>
                <li>Titolo: {{ $comic['title'] }}</li>
                <li>Prezzo: $ {{ $comic['price'] }}</li>
                <li>Serie: {{ $comic['series'] }}</li>
                <li>Data: {{ $comic['sale_date'] }}</li>
                <li>Tipo: {{ $comic['type'] }}</li>
            </ul>
            <a href="{{ route('comics.edit', $comic->id) }}">Modifica dati fumetto</a>
        </div>
    </main>
@endsection
