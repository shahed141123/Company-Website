<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class RegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'username' => 'nullable|unique:admins|string',
            'email' => 'required|email|unique:admins,email',
            'phone' => 'nullable|string|max:20',
            'designation' => 'nullable|string|max:100',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg|max:5120',
            'address' => 'nullable|string|max:200',
            'country_id' => 'nullable|exists:countries,id',
            'city' => 'nullable|string|max:100',
            'zip_code' => 'nullable|string|max:50',
            'status' => 'nullable|in:active,inactive,suspended',
            'email_verified_at' => 'nullable|date',
            'password' => 'required|string|min:8',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'The name field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'That email address is already in use.',
            'phone.max' => 'The phone number may not be longer than :max characters.',
            'designation.max' => 'The designation may not be longer than :max characters.',
            'image.mimes' => 'Only JPEG, PNG, JPG images are allowed.',
            'image.max' => 'The image size cannot exceed 5MB.',
            'address.max' => 'The address may not be longer than :max characters.',
            'city.max' => 'The city may not be longer than :max characters.',
            'zip_code.max' => 'The zip code may not be longer than :max characters.',
            'status.in' => 'The status must be one of: active, inactive, suspended.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least :min characters long.',
        ];
    }

    /**
     * Get custom attributes for validator errors. ### -----not working
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name' => 'Name',
            'username' => 'Username',
            'email' => 'Email address',
            'phone' => 'Phone number',
            'designation' => 'Designation',
            'image' => 'Image',
            'address' => 'Address',
            'country_id' => 'Country Name',
            'city' => 'City',
            'zip_code' => 'Zip code',
            'status' => 'Status',
            'password' => 'Password',
        ];
    }

    /**
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     */
    protected function failedValidation(Validator $validator)
    {
        $this->recordErrorMessages($validator);
        parent::failedValidation($validator);
    }

    /**
     * Record the error messages displayed to the user.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     */
    protected function recordErrorMessages(Validator $validator)
    {
        $errorMessages = $validator->errors()->all();

        foreach ($errorMessages as $errorMessage) {
            toastr()->error($errorMessage);
        }
    }
}
