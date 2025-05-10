<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Layangukur extends Model
{
    use HasFactory;

    protected $fillable = [
        'kabkota_id',
        'kapkem_id',
        'kalkel_id',
        'padkam_id',
        'nomor',
        'tanggal',
        'luas',
        'npk',
        'alamat',
        'koordinat',
        'pemanfaat',
        'pemanfaatan',
        'ket',
        'status',
        'upload_su',
        'upload_bk',
        'no_pal',
        'tgl_pal',
        'masa_pal',
        'tgl_pal_akhir',
        'upload_pal',
        'is_pal',
        'no_kk',
        'tgl_kk',
        'masa_kk',
        'tgl_kk_akhir',
        'upload_kk',
        'is_kk',
        'shmsg_id',
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
