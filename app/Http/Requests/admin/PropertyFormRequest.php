<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class PropertyFormRequest extends FormRequest
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
            'title'=>['required','min:10'],
            'description'=>['required','min:10'],
            'surface'=>['required','integer','min:10'],
            'rooms'=>['required','min:1'],
            'bedrooms'=>['required','min:0'],
            'floor'=>['required','min:0'],
            'price'=>['required','integer','min:0'],
            'city'=>['required','min:4'],
            'adress'=>['required','min:8'],
            'code_postal'=>['required','min:4'],
            'sold'=>['required','boolean'],



        ];

    }
}
