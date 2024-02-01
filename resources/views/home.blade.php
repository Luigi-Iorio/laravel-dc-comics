@extends('layout.main')

@section('main')
    <main>
        <div class="home">
            <h2>Clicca il bottone per visualizzare la lista completa dei fumetti</h2>
            <a href="{{ route('comics.index') }}">Fumetti</a>
            <h2>Clicca il bottone per aggiungere un nuovo fumetto</h2>
            <a href="{{ route('comics.create') }}">Aggiungi</a>
        </div>
    </main>
@endsection
