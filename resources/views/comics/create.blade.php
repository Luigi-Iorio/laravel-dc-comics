<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
</head>

<body>
    <h1>Inserimento Fumetti</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="series">Serie</label>
            <input type="text" name="series" id="series">
        </div>
        <div>
            <label for="thumb">Url Immagine</label>
            <input type="text" name="thumb" id="thumb">
        </div>
        <div>
            <label for="price">Prezzo</label>
            <input type="number" name="price" step=".01" id="price">
        </div>
        <div>
            <label for="sale_date">Data</label>
            <input type="date" name="sale_date" id="sale_date">
        </div>
        <div>
            <label for="type">Tipo</label>
            <input type="text" name="type" id="type">
        </div>
        <div>
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>

        <button>Invia</button>
    </form>

</body>

</html>
