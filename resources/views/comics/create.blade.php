@extends('layout.main')

@section('main')
    <main>
        <div class="create">
            <h2>Inserimento Fumetti</h2>
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="cont">
                    <label for="title">Titolo</label>
                    <input type="text" name="title" id="title">
                </div>
                <div class="cont">
                    <label for="series">Serie</label>
                    <input type="text" name="series" id="series">
                </div>
                <div class="cont">
                    <label for="thumb">Url Immagine</label>
                    <input type="text" name="thumb" id="thumb">
                </div>
                <div class="cont">
                    <label for="price">Prezzo</label>
                    <input type="number" name="price" step=".01" id="price">
                </div>
                <div class="cont">
                    <label for="sale_date">Data</label>
                    <input type="date" name="sale_date" id="sale_date">
                </div>
                <div class="cont">
                    <label for="type">Tipo</label>
                    <input type="text" name="type" id="type">
                </div>
                <div class="cont">
                    <label for="description">Descrizione</label>
                    <textarea name="description" id="description" cols="30" rows="10"></textarea>
                </div>

                <button>Invia</button>
            </form>
        </div>
    </main>
@endsection
