<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegistrationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nama' => 'required|string|max:100',
            'email' => 'required|email|unique:registrations,email',
            'handphone' => 'required|digits_between:10,16',

            'jenisKelamin' => 'required|in:Laki-laki,Perempuan',
            'golDarah' => 'required|in:A,B,AB,O',
            'kategori' => 'required|in:5K,10K,21K',
            'ukuranJersey' => 'required|in:XS,S,M,L,XL,XXL',
            'namaBib' => 'required|string|max:12',

            'kontakDaruratNama' => 'required|string|max:100',
            'kontakDaruratHp' => 'required|digits_between:10,16',

            'province_id' => 'required|exists:indonesia_provinces,id',
            'city_id' => 'required|exists:indonesia_cities,id',
            'district_id' => 'required|exists:indonesia_districts,id',
            'village_id' => 'required|exists:indonesia_villages,id',
        ];
    }
}
