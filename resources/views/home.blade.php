@extends('layout.main')

@section('main')
    <main>
        <div class="home">
            <h2>Clicca il bottone per visualizzare la lista completa dei fumetti</h2>
            <a href="{{ route('comics.index') }}">Fumetti</a>
        </div>
    </main>
@endsection
