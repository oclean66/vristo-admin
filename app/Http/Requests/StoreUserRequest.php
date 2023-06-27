<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class StoreUserRequest extends FormRequest
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
     * @return array<string, array<\Illuminate\Validation\Rules\Password|string>>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:45'],
            'email' => ['required', 'email', 'unique:users', 'max:45'],
            'password' => ['required', 'confirmed', Password::default(), 'max:255'],
        ];
    }
}
