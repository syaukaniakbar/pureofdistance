<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Village;


class Registration extends Model
{
    protected $fillable = [
        // Data Registrasi
        'nama',
        'email',
        'handphone',
        'jenisKelamin',
        'golDarah',
        'kategori',
        'ukuranJersey',
        'namaBib',
        'kontakDaruratNama',
        'kontakDaruratHp',
        'province_id',
        'city_id',
        'district_id',
        'village_id',
    ];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function village()
    {
        return $this->belongsTo(Village::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}