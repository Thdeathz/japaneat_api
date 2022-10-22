<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVideoDetailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'url' => [
                'required'
            ],
            'thumbnail' => [
                'required'
            ],
            'teacher_id' => [
                'required'
            ],
            'category_id' => [
                'required'
            ],
            'level' => [
                'required'
            ],
            'title' => [
                'string',
                'required'
            ],
            'description' => [
                'string',
                'required'
            ],
        ];
    }
}
