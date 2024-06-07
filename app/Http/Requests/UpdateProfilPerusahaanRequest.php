<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProfilPerusahaanRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'phone' => [
                'required',
                'numeric',
                 Rule::unique('companies')->ignore(auth()->guard('company')->user()->id),
            ],
            'website' => 'nullable|string',
            'address' => 'nullable|string',
            'industry' => 'nullable|string',
            'foto_profil' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'employees' => 'nullable|numeric',
            'instagram' => 'nullable|string',
            'facebook' => 'nullable|string',
        ];
    }
    
}
