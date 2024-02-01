# Laravel Comics

### Descrizione

Laravel Comics è un progetto sviluppato con Laravel, creato per gestire un archivio di fumetti. Il progetto include operazioni CRUD per gestire i dati, consentendo agli utenti di visualizzare i fumetti con i relativi dettagli ma anche di creare un nuovo fumetto tramite form da inserire in archivo.

_(Il progetto include anche un seeder per popolare la tabella)_

### Funzionalità

**- Visualizzare elenco fumetti**: `index()` permette di visualizzare l'elenco completo dei fumetti presenti nel database.

```php
public function index()
{
    $comics = Comic::all();

    return view('comics.comics_lists', compact('comics'));
}
```

\- **Visualizzare dettagli di un fumetto**: `show()` permette di prendere un'entità e vederla nel dettaglio.

```php
public function show(Comic $comic)
{
     return view('comics.show', compact('comic'));
}
```

\- **Creare un nuovo fumetto**: con il metodo `create()` viene restituita una view con un form all'interno.

```php
public function create()
{
    return view('comics.create');
}
```

\- **Salvare nuovo fumetto nel db**: `store()` permette di recuperare e salvare i dati inseriti nel form.

```php
public function store(Request $request)
{
    $comic = $request->all();

    $newComic = new Comic();
    // Per popolare i campi del nuovo fumetto
    $newComic->title = $comic['title'];
    $newComic->description = $comic['description'];
    $newComic->thumb = $comic['thumb'];
    $newComic->price = $comic['price'];
    $newComic->series = $comic['series'];
    $newComic->sale_date = $comic['sale_date'];
    $newComic->type = $comic['type'];

    $newComic->save();

    return redirect()->route('comics.show', $newComic->id);
}
```
