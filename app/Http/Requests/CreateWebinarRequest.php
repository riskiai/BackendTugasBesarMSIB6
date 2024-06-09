<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class CreateWebinarRequest extends FormRequest
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
            'company_id' => [
                'integer',
                Rule::requiredIf(Auth::user()->roles[0]->name == 'admin'),
                Rule::exists('companies', 'id'),
            ],
            'judul_webinar' => 'required|string',
            'tagline' => 'required|string',
            'narasumber' => 'required|string',
            'jabatan_narasumber' => 'required|string',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'waktu_mulai' => 'required|date_format:H:i',
            'waktu_selesai' => 'required|date_format:H:i',
            'platform' => 'string',
            'lokasi' => 'required|string',
            'poster' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
