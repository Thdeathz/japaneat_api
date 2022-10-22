<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRecordDetailRequest extends FormRequest
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
            'video_detail_id' => [
                'required'
            ],
            'offer_id' => [
                'required'
            ],
            'answer_id' => [
                'required'
            ],
        ];
    }
}
