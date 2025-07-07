<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFilterRequest extends FormRequest
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
                'brand' => ['nullable', 'numeric', 'exists:brands,id'],
                'category' => ['nullable', 'numeric', 'exists:categories,id'],
                'price_order' => ['nullable', 'in:asc,desc'], // <-- correspond au formulaire
            ];
        }

}
