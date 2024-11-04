<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductShowRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id' => 'int|exists:products,id'
        ];
    }

    public function messages(): array
    {
        return [
            'custom' => [
                'id' => [
                    'unique' => 'The :attribute has already been taken.',
                ],
            ],
        ];
    }
}
