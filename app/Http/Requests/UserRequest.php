<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'fullname' => 'required|string|max:255',
            'phone_number' => 'required|string|min:8|max:11',
            'email' => 'required|email',
            'donation_amount' => 'required|numeric|min:1',
            'date' => 'required|date',
            'message' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'Please enter your full name.',
            'phone_number.required' => 'Please provide a phone number.',
            'email.required' => 'We need your email address.',
            'donation_amount.required' => 'Please provide a donation amount.',
            'date.required' => 'Please specify the donation date.',
            'message.max' => 'The message can only be up to 255 characters.',
        ];
    }
}
