<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => ' string|required|min:3|max:50',
            'email' => 'email|required',
            'message' => 'string|required|min:10|max:500',
            'subject' => 'string|required|min:3|max:50',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The name field is .',
            'name.min' => 'The name must be at least 3 characters.',
            'name.max' => 'The name may not be greater than 50 characters.',
            'email.required' => 'The email field is required.',
            'email.email' => 'The email must be a valid email address.',
            'message.required' => 'The message field is required.',
            'message.min' => 'The message must be at least 10 characters.',
            'message.max' => 'The message may not be greater than 500 characters.',
            'subject.required' => 'The subject field is required.',
            'subject.min' => 'The subject must be at least 3 characters.',
            'subject.max' => 'The subject may not be greater than 50 characters.',
        ];
    }
}
/**
 * Get the custom messages for validator errors.
 *
 * @return array<string, string>
 */
