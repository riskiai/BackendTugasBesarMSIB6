<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMagangRequest extends FormRequest
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
            'judul' => 'required|string',
            'lokasi' => 'required|string',
            'tipe' => 'required|in:online,onsite,hybrid',
            'gaji' => 'required|integer',
            'deskripsi' => 'required|string',
            'kualifikasi' => 'required|string',
            'deadline' => 'required|date',
            'tanggal_mulai' => 'required|date',
            'tanggal_berakhir' => 'required|date',
        ];
    }
}
