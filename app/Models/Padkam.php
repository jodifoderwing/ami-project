<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Padkam extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'nama',
        'kalkel_id',
        'kapkem_id',
        'kabkota_id',
        'kantor',
        'alamat',
        'koordinat',
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

    public function persilsg(): HasMany
    {
        return $this->hasMany(Persilsg::class);
    }

    public function layangukur(): HasMany
    {
        return $this->hasMany(Layangukur::class);
    }
}
