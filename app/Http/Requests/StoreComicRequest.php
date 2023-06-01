<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:6|max:100',
            'description' => 'required|min:20|max:200',
            'thumb' => 'required|min:6|max:255',
            'price' => 'required|min:2|max:10',
            'series' => 'required|min:6|max:100',
            'sale_date' => 'required|date',
            'type' => 'required|min:6|max:100'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Campo obbligatorio',
            'title.min' => 'Lunghezza minima :min caratteri',
            'title.max' => 'Lunghezza massima :max caratteri',
            'description.required' => 'Campo obbligatorio',
            'description.min' => 'Lunghezza minima :min caratteri',
            'description.max' => 'Lunghezza massima :max caratteri',
            'thumb.required' => 'Campo obbligatorio',
            'thumb.max' => 'Lunghezza massima :max caratteri',
            'price.required' => 'Campo obbligatorio',
            'price.min' => 'Assicurarsi che ci sia il $ prrima del prezzo',
            'price.max' => 'Sicuro costi così tanto?',
            'series.required' => 'Campo obbligatorio',
            'series.min' => 'Lunghezza minima :min caratteri',
            'series.max' => 'Lunghezza massima :max caratteri',
            'sale_date.required' => 'Campo obbligatorio',
            'type.required' => 'Campo obbligatorio',
            'type.min' => 'Lunghezza minima :min caratteri',
            'type.max' => 'Lunghezza massima :max caratteri',

        ];
    }
}
