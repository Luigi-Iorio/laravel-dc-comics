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
                    <input type="text" name="title" id="title" value="{{ old('title', $comic->title) }}">
                    @error('title')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="cont">
                    <label for="series">Serie</label>
                    <input type="text" name="series" id="series" value="{{ old('series', $comic->series) }}">
                    @error('series')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="cont">
                    <label for="thumb">Url Immagine</label>
                    <input type="text" name="thumb" id="thumb" value="{{ old('thumb', $comic->thumb) }}">
                    @error('thumb')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="cont">
                    <label for="price">Prezzo</label>
                    <input type="number" name="price" step=".01" id="price"
                        value="{{ old('price', $comic->price) }}">
                    @error('price')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="cont">
                    <label for="sale_date">Data</label>
                    <input type="date" name="sale_date" id="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
                    @error('sale_date')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="cont">
                    <label for="type">Tipo</label>
                    <input type="text" name="type" id="type" value="{{ old('type', $comic->type) }}">
                    @error('type')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
                <div class="cont">
                    <label for="description">Descrizione</label>
                    <textarea name="description" id="description" cols="30" rows="10">{{ old('description', $comic->description) }}</textarea>
                    @error('description')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <button>Invia</button>
            </form>
        </div>
    </main>
@endsection
