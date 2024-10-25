<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentStoreRequest extends FormRequest
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
            'text' => 'required',
            'post_id' => 'required|exists:posts,id',
        ];
    }

    public function messages()
    {
        return
            [
                'text.required'=>'Text ni to\'ldiring!',
                'post_id.required' => 'Post ni to\'ldiring!',
                'post_id.exists' => 'Post topilmadi!',
            ];

    }
}
