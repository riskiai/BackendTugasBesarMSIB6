<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplyLowonganRequest extends FormRequest
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
            'pertanyaan1' => ['required', 'string'],
            'pertanyaan2' => ['required', 'string'],
            'pertanyaan3' => ['required', 'string'],
            'cv' => ['required', 'mimes:pdf', 'max:2048'],
        ];
    }
}
