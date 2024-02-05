<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $comic = $this->validationCreate($request->all());

        $newComic = new Comic();
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

    /**
     * Validation Create
     */

    private function validationCreate($comic)
    {
        $validator = Validator::make(
            $comic,
            [
                'title' => 'required|max:60',
                'description' => 'max:500',
                'thumb' => 'url',
                'price' => 'numeric',
                'series' => 'max:60',
                'sale_date' => 'date',
                'type' => 'max:60',
            ]
        )->validate();

        return $validator;
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $edit = $this->validationUpdate($request->all());

        $comic->update($edit);

        return redirect()->route('home');
    }

    /**
     * Validation Update
     */

    private function validationUpdate($edit)
    {
        $validator = Validator::make($edit, [
            'title' => 'required|max:60',
            'description' => 'max:500',
            'thumb' => 'url',
            'price' => 'numeric',
            'series' => 'max:60',
            'sale_date' => 'date',
            'type' => 'max:60',
        ])->validate();

        return $validator;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
