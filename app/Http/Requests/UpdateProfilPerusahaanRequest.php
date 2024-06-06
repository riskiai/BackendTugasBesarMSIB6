<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;


class UpdateProfilPerusahaanRequest extends FormRequest
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
            'phone' => [
                'required',
                'numeric',
                Rule::unique('companies')->ignore(auth()->guard('company')->user()->id),
            ],
            'website' => 'string',
            'address' => 'string',
            'industry' => 'string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'employees' => 'numeric',
            'instagram' => 'string',
            'facebook' => 'string',
        ];
    }
}
