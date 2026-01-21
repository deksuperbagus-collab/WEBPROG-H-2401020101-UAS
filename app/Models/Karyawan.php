<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';
    protected $fillable = ['nama','jabatan'];

    public function absensi()
    {
        return $this->hasMany(Absensi::class);
    }
}