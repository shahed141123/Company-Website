<?php

namespace App\Http\Requests\Coupon;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class CouponRequest extends FormRequest
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
            'code' => 'required|unique:coupons|max:50',
            'value' => 'required|numeric|min:0',
            'type' => 'required|in:fixed,percentage',
            'max_uses' => 'required|integer|min:1',
            'valid_from' => 'nullable|date',
            'valid_until' => 'nullable|date|after_or_equal:valid_from',
            'status' => 'required|in:active,expired,used',
            'description' => 'nullable|max:255',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'code.required' => 'The code field is required.',
            'code.unique' => 'The code has already been taken.',
            'code.max' => 'The code may not be greater than :max characters.',
            'value.required' => 'The value field is required.',
            'value.numeric' => 'The value must be a number.',
            'value.min' => 'The value must be at least :min.',
            'type.required' => 'The type field is required.',
            'type.in' => 'Invalid type selected.',
            'max_uses.required' => 'The max uses field is required.',
            'max_uses.integer' => 'The max uses must be an integer.',
            'max_uses.min' => 'The max uses must be at least :min.',
            'valid_from.date' => 'The valid from field must be a valid date.',
            'valid_until.date' => 'The valid until field must be a valid date.',
            'valid_until.after_or_equal' => 'The valid until field must be after or equal to valid from field.',
            'status.required' => 'The status field is required.',
            'status.in' => 'Invalid status selected.',
            'description.max' => 'The description may not be greater than :max characters.',
        ];
    }

    /**
     * Get custom attribute names for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'code' => 'Coupon Code',
            'value' => 'Coupon Value',
            'type' => 'Coupon Type',
            'max_uses' => 'Max Uses',
            'valid_from' => 'Valid From Date',
            'valid_until' => 'Valid Until Date',
            'status' => 'Coupon Status',
            'description' => 'Coupon Description',
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
