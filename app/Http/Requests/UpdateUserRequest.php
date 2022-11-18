<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
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
        $method = $this->method();

        if ($method === 'PUT') {
            return [
                "name" => "required|string|min:3|max:255",
                "email" => [
                    'required',
                    'string',
                    'email',
                    'max:255',
                    Rule::unique('users')->ignore($this->user->id),
                ],
                "avatar" => "nullable|file|mimes:jpg,png,svg,webp",
                "password" => "nullable|string|min:8|max:255|confirmed",
                "confirmPassword" => "nullable|string|min:8|max:255",
            ];
        }

        return [
            "name" => "sometimes|required|string|min:3|max:255",
            "email" => [
                'sometimes',
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($this->user->id),
            ],
            "avatar" => "nullable|file|mimes:jpg,png,svg,webp",
            "password" => "sometimes|nullable|string|min:8|max:255|confirmed",
            "confirmPassword" => "sometimes|nullable|string|min:8|max:255",
        ];
    }

    protected function prepareForValidation()
    {
        if ($this->confirmPassword) {
            $this->merge([
                'password_confirmation' => $this->confirmPassword,
            ]);
        }
    }
}
