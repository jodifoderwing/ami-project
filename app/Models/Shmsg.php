<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Shmsg extends Model
{
    use HasFactory;

    protected $fillable = [
        'kabkota_id',
        'kapkem_id',
        'kalkel_id',
        'nohak',
        'tglhak',
        'nosu',
        'tglsu',
        'nib',
        'luassu',
        'petunjuk',
        'koordinat',
        'upload_shm',
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
}
