<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
</head>

<body>
    <h1>Lista Fumetti</h1>
    <ul>
        @foreach ($comics as $comic)
            <li>{{ $comic['title'] }}</li>
            <li>{{ $comic['description'] }}</li>
            <li><img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}"></li>
            <li><a href="{{ route('comics.show', $comic->id) }}">Dettaglio</a></li>
            <li>
                <hr>
            </li>
        @endforeach
    </ul>
</body>

</html>
