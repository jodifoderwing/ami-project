<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Berkas extends Model
{
    use HasFactory;

    protected $fillable = [
        'noberkas',
        'tglberkas',
        'kabkota_id',
        'kapkem_id',
        'kalkel_id',
        'padkam_id',
        'alashak',
        'luas',
        'nik',
        'nama',
        'tmplahir',
        'tgllahir',
        'alamat',
        'nohp',
        'permohonan',
        'biaya_daftar',
    ];

    protected $casts = [
        'permohonan' => 'array',
    ];

    public function kabkota(): BelongsTo
    {
        return $this->belongsTo(Kabkota::class);
    }

    public function kapkem(): BelongsTo
    {
        return $this->belongsTo(Kapkem::class);
    }

    public function kalkel(): BelongsTo
    {
        return $this->belongsTo(Kalkel::class);
    }

    public function padkam(): BelongsTo
    {
        return $this->belongsTo(Padkam::class);
    }
}
