<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|max:255',
            'password' => 'required|max:255',

        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Name ni to\'ldiring!',
            'email.required' => 'Email topilmadi!',
            'password.required' => 'Parol topilmadi!',
        ];
    }
}
