<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HistogramRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'p_one' => 'required|numeric|integer|min:1|max:5',
            'p_two' => 'required|numeric|integer|min:1|max:5',
            'p_three' => 'required|numeric|integer|min:1|max:5',
            'p_four' => 'required|numeric|integer|min:1|max:5',
            'p_five' => 'required|numeric|integer|min:1|max:5',
            'p_six' => 'required|numeric|integer|min:1|max:5',
            'p_seven' => 'required|numeric|integer|min:1|max:5',
            'p_eight' => 'required|numeric|integer|min:1|max:5',
            'p_nine' => 'required|numeric|integer|min:1|max:5',
            'p_ten' => 'required|numeric|integer|min:1|max:5',
        ];
    }
}
