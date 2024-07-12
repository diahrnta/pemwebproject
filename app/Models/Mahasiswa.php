<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $fillable = ['nim', 'nama', 'tmp_lahir', 'tgl_lahir', 'ipk', 'prodi_id', 'rombel_id'];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'prodi_id', 'id');
    }

    public function rombel()
    {
        return $this->belongsTo(RombonganBelajar::class, 'rombel_id', 'id');
    }
}
