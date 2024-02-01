<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
</head>

<body>
    <h1>Fumetto Selezionato</h1>
    <ul>
        <li>{{ $comic['title'] }}</li>
        <li>{{ $comic['price'] }}</li>
        <li>{{ $comic['series'] }}</li>
        <li>{{ $comic['sale_date'] }}</li>
        <li>{{ $comic['type'] }}</li>
    </ul>
</body>

</html>
