# Laravel + SCSS Template

### Passaggi per creazione template:

#### npm i (istallazione tutti i pacchetti di npm)

#### npm i --save-dev sass (istallazione sass)

#### Rinominazione cartella css in scss

#### Rinominazione file app.css in app.scss

#### Modifica percorso css in vite.config.js ('resources/scss/app.scss')

```js
export default defineConfig({
    plugins: [
        laravel({
            input: [
            // Modifichiamo il percorso del css usando sass
            'resources/scss/app.scss',
            'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
```

#### Aggiunta alias

```js
    //Aggiungiamo un alias per la cartella /resources/
    resolve: {
        alias: {
            '~resources': '/resources/'
        }
    },
});
```

#### Importazione scss tramite JS nel file vite.config.js

```js
import "~resources/scss/app.scss";
```

#### Includere nell'head HTML gli assets Vite

```html
<head>
    <!-- Includiamo gli assets con la direttiva @vite -->
    @vite('resources/js/app.js')
</head>
```

#### Processi Vite per immagini nel file app.js e inserimento in html

```js
import.meta.glob(["../img/**"]);
```

````html
<img
    src="{{ Vite::asset('resources/img/laravel-logo.svg') }}"
    alt="logo-laravel"
/>```
````

---

### Dopo aver clonato il template:

1. composer install

2. creare file .env

3. genera APP KEY

4. npm i

5. php artisan serve

6. npm run dev
