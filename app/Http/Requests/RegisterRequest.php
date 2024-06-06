<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // Kalau ada inputan pic_name (person in charge/penanggung jawab), berarti sedang mendaftar sebagai perusahaan
        if ($this->request->has('pic_name')) {
            return [
                'name' => 'required|string',
                'pic_name' => 'required|string',
                'email' => 'required|email|unique:companies,email',
                'password' => 'required|min:8|confirmed',
                'phone' => 'required|numeric|unique:companies,phone',
            ];
        } else {
            return [
                'name' => 'required|string',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:8|confirmed',
            ];
        }
    }
}
