<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MahasiswaStore extends FormRequest
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
            "nim" => "required|min:8|numeric",
            "nama" =>  ['required'],
            "kelas" =>  ['required', 'regex:/^\d{2}\.\d{2}\.\d{2}$/']
        ];
    }

    public function messages(): array
    {
        return [
            'nim.required' => 'NIM harus diisi',
            'nim.min' => 'NIM minimal 8 karakter',
            'nim.numeric' => 'NIM harus berupa angka',
            'nama.required' => 'Nama harus diisi',
            'kelas.required' => 'Kelas harus diisi',
            'kelas.regex' => 'Format kelas salah'
        ];
    }
}
