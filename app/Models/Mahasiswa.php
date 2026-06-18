<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{

    protected $fillable = ['prodi_id', 'nim', 'nama', 'alamat'];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }

}
