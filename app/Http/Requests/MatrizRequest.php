<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MatrizRequest extends FormRequest
{
    public function authorize(): bool 
    {
        return true;
    }

    public function rules(): array
    {
        return [
            '1' => 'required|numeric|integer|min:1|max:9',
            '2' => 'required|numeric|integer|min:1|max:9',
            '3' => 'required|numeric|integer|min:1|max:9',
            '4' => 'required|numeric|integer|min:1|max:9',
            '5' => 'required|numeric|integer|min:1|max:9',
            '6' => 'required|numeric|integer|min:1|max:9',
            '7' => 'required|numeric|integer|min:1|max:9',
            '8' => 'required|numeric|integer|min:1|max:9',
            '9' => 'required|numeric|integer|min:1|max:9',
        ];
    }
}
