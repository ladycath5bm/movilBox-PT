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
            'one' => 'required|numeric|integer|min:1|max:9',
            'two' => 'required|numeric|integer|min:1|max:9',
            'three' => 'required|numeric|integer|min:1|max:9',
            'four' => 'required|numeric|integer|min:1|max:9',
            'five' => 'required|numeric|integer|min:1|max:9',
            'six' => 'required|numeric|integer|min:1|max:9',
            'seven' => 'required|numeric|integer|min:1|max:9',
            'eight' => 'required|numeric|integer|min:1|max:9',
            'nine' => 'required|numeric|integer|min:1|max:9',
        ];
    }
}
