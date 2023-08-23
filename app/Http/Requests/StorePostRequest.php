<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|max:50',
            'cover_image' => 'image|max:250'
        ];
    }

    public function messages(){
        return [
            'title.required' => 'il titolo è obbligatorio',
            'title.max' => 'il titolo deve essere lungo al massimo :max caratteri',
            'cover_image.image' => 'il file deve avere una delle seguenti estensioni: jpg, png, jpeg, webp.',
            'cover_image.max' => 'il nome del file deve essere lungo al massimo :max caratteri'
        ];
    }
}
