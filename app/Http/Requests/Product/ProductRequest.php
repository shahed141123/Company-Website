<?php

namespace App\Http\Requests\Product;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class ProductRequest extends FormRequest
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
        $productId = $this->route('product');
        return [
            'name' => 'required|string',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'specification' => 'nullable|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'sku' => [
                'required',
                'string',
                Rule::unique('products')->ignore($productId),
            ],
            'manufacturer_code' => [
                'nullable',
                'string',
                Rule::unique('products')->ignore($productId),
            ],
            'product_code' => [
                'nullable',
                'string',
                Rule::unique('products')->ignore($productId),
            ],
            'tags.*' => 'nullable|string',
            'size.*' => 'nullable|string',
            'color.*' => 'nullable|string',
            'warranty' => 'nullable|string',
            'is_discount' => 'required|numeric',
            'brand_id' => 'nullable|exists:brands,id',
            'category_id' => 'required|exists:categories,id',
            'sub_category_id' => 'nullable|exists:sub_categories,id',
            'child_category_id' => 'nullable|exists:child_categories,id',
            'vendor_id' => 'nullable|exists:vendors,id',
            'supplier_id' => 'nullable|exists:suppliers,id',
            'warehouse_id' => 'nullable|exists:ware_houses,id',
            'pickup_point_id' => 'nullable|exists:pick_up_points,id',
            'payment_method_id' => 'nullable|exists:payment_methods,id',
            'is_featured' => 'sometimes',
            'offer_category' => 'nullable|string',
            'is_status' => 'required|in:draft,pending,active,inactive',
            'type' => 'required|in:new,refurbished,used',
            'is_today_deal' => 'sometimes',
            'deal' => 'nullable|numeric',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:5120',
            'image.*' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:5120',
            'pdf' => 'sometimes|file|mimes:pdf|max:2048',
            'supplier_price' => 'nullable|numeric',
            'supplier_delivery_date' => 'nullable|date',
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
