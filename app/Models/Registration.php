<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
      protected $fillable = [
        'nama',
        'email',
        'no_hp',
        'jenis_kelamin'
    ];
}
