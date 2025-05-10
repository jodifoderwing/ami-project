<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kinerja extends Model
{
    use HasFactory;

    protected $fillable = [
        'tahun',
        'kegiatan',
        'deskripsi',
        'satuan',
        'target',
        'nilai',
        'tabel',
        'indikator',
        'nosk',
        'tglsk',
        'koordinator',
        'anggota',

    ];

    protected $casts = [
        'anggota' => 'array',
    ];
}
