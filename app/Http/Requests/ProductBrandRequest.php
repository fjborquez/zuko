<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductBrandRequest extends FormRequest
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
            'name' => ['required', 'unique:product_brands,name', 'max:30'],
            'description' => ['required', 'unique:product_brands,description', 'max:30'],
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'There already a product with brand name or description',
            'description.unique' => 'There already a product with brand name or description',
        ];
    }
}
