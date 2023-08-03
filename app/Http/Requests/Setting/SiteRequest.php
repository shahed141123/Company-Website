<?php

namespace App\Http\Requests\Setting;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class SiteRequest extends FormRequest
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
            'site_name' => 'required|string|max:100',
            'company_name' => 'nullable|string|max:100',
            'site_slogan' => 'nullable|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
            'favicon' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
            'phone_one' => 'nullable|string|max:20',
            'phone_two' => 'nullable|string|max:20',
            'whatsapp_number' => 'nullable|string|max:20',
            'address' => 'nullable|string',
            'currency' => 'nullable|string|max:10',
            'country_id' => 'nullable|integer|exists:countries,id',
            'default_language' => 'nullable|string|max:100',
            'contact_email' => 'nullable|string|email|max:200',
            'support_email' => 'nullable|string|email|max:200',
            'info_email' => 'nullable|string|email|max:200',
            'sales_email' => 'nullable|string|email|max:200',
            'facebook_url' => 'nullable|string|max:255',
            'twitter_url' => 'nullable|string|max:255',
            'instagram_url' => 'nullable|string|max:255',
            'linkedin_url' => 'nullable|string|max:255',
            'youtube_url' => 'nullable|string|max:255',
            'github_url' => 'nullable|string|max:255',
            'portfolio_url' => 'nullable|string|max:255',
            'fiver_url' => 'nullable|string|max:255',
            'upwork_url' => 'nullable|string|max:255',
            'service_days' => 'nullable|string|max:100',
            'service_time' => 'nullable|string|max:100',
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
            //
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
            //
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
