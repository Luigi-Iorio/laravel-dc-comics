<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
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
}
