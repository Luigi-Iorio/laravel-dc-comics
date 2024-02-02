@extends('layout.main')

@section('main')
    <main>
        <div class="edit">
            <h2>Inserimento Fumetti</h2>
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="cont">
                    <label for="title">Titolo</label>
                    <input type="text" name="title" id="title" value="{{ $comic->title }}">
                </div>
                <div class="cont">
                    <label for="series">Serie</label>
                    <input type="text" name="series" id="series" value="{{ $comic->series }}">
                </div>
                <div class="cont">
                    <label for="thumb">Url Immagine</label>
                    <input type="text" name="thumb" id="thumb" value="{{ $comic->thumb }}">
                </div>
                <div class="cont">
                    <label for="price">Prezzo</label>
                    <input type="number" name="price" step=".01" id="price" value="{{ $comic->price }}">
                </div>
                <div class="cont">
                    <label for="sale_date">Data</label>
                    <input type="date" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}">
                </div>
                <div class="cont">
                    <label for="type">Tipo</label>
                    <input type="text" name="type" id="type" value="{{ $comic->type }}">
                </div>
                <div class="cont">
                    <label for="description">Descrizione</label>
                    <textarea name="description" id="description" cols="30" rows="10">{{ $comic->description }}</textarea>
                </div>

                <button>Invia</button>
            </form>
        </div>
    </main>
@endsection
