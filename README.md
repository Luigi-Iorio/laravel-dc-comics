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

\- **Cancellare fumetto nel db**: con `destroy()` viene eliminato dal db il fumetto selezionato.

_*(al click sul bottone `cancella` viene visualizzata una modale con la richiesta della cancellazione)*_

_ComicController.php_

```php
public function destroy(Comic $comic)
{
    $comic->delete();

    return redirect()->route('comics.index');
}
```

_index.blade.php_

```php
<form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button>Cancella</button>
</form>
```

_modale.js_

```js
// bottoni
const buttons = document.querySelectorAll("button");

buttons.forEach((button, index) => {
    const modali = document.querySelectorAll(".modale");
    const chiudi = document.querySelectorAll(".chiudi");

    // evento al click per mostrare la modale
    button.addEventListener("click", () => {
        modali[index].classList.remove("opacity-0");
        modali[index].classList.add("z-index-2");
    });

    // evento al click per nascondere la modale
    chiudi[index].addEventListener("click", () => {
        modali[index].classList.add("opacity-0");
        modali[index].classList.remove("z-index-2");
    });
});
```

\- **Validazione Form**: è stata utilizzata la request personalizzata `ComicRequest` per validare i dati ricevuti in input in fase di creazione e modifica, gli errori invece sono risposte personalizzate in italiano.

_ComicRequest.php_

```php
public function rules(): array
{
    return [
        'title' => 'required|max:60',
        'description' => 'max:500',
        'thumb' => 'url',
        'price' => 'numeric',
        'series' => 'max:60',
        'sale_date' => 'date',
        'type' => 'max:60'
    ];
}

public function messages()
{
    return [
        'title.required' => 'Il campo titolo è obbligatorio',
        'title.max' => 'Il campo titolo non deve superare i 60 caratteri',
        'description.max' => 'Il campo descrizione non deve superare i 500 caratteri',
        'thumb.url' => 'Il campo url immagine deve contenere un URL corretto',
        'price.numeric' => 'Il campo prezzo deve essere numerico',
        'series.max' => 'Il campo serie non deve superare i 60 caratteri',
        'sale_date.date' => 'Il campo data deve essere una data valida',
        'type.max' => 'Il campo tipo non deve superare i 60 caratteri'
    ];
}
```
