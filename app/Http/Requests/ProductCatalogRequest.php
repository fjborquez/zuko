<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductCatalogRequest extends FormRequest
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
            'category_id' => [
                'required',
                Rule::unique('product_catalog', 'category_id')
                    ->where('brand_id', $this->input('brand_id'))
                    ->where('type_id', $this->input('type_id'))
                    ->where('presentation_id', $this->input('presentation_id')),
            ],
            'brand_id' => [],
            'type_id' => ['required'],
            'presentation_id' => [],
        ];
    }

    public function messages()
    {
        return [
            'category_id.unique' => 'There is a product catalog with the same category_id, brand_id, type_id and presentation_id',
        ];
    }
}
