<?php

namespace App\Http\Requests\Web\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegistrationRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'min:4|max:25|string',
            'last_name' => 'min:4|max:25|string',
            'email' => 'email|unique:users',
            'phone' => 'digits:11|unique:users',
            'password' => [Password::min(8), 'confirmed'],
        ];
    }


    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'first_name.min' => __('validation.min'),
            'first_name.max' => __('validation.max'),
            'first_name.string' => __('validation.string'),

            'last_name.min' => __('validation.min'),
            'last_name.max' => __('validation.max'),
            'last_name.string' => __('validation.string'),

            'email.email' => __('validation.email'),
            'email.unique' => __('validation.unique'),

            'phone.digits' => __('validation.digits'),
            'phone.unique' => __('validation.unique'),

            'password.min' => __('validation.min'),

            'password.confirmed' => __('validation.confirmed'),
        ];
    }
}
