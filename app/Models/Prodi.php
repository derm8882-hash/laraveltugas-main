<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $fillable = ['jurusan_id', 'nama_prodi'];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class);
    }

    
}
