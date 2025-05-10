<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kapkem extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'nama',
        'kabkota_id',
        'kantor',
        'alamat',
        'koordinat',
    ];

    public function kabkota(): BelongsTo
    {
        return $this->belongsTo(Kabkota::class);
    }

    public function kalkel(): HasMany
    {
        return $this->hasMany(Kalkel::class);
    }

    public function padkam(): HasMany
    {
        return $this->hasMany(Padkam::class);
    }

    public function persilsg(): HasMany
    {
        return $this->hasMany(Persilsg::class);
    }

    public function layangukur(): HasMany
    {
        return $this->hasMany(Layangukur::class);
    }

    public function shmsg(): HasMany
    {
        return $this->hasMany(Shmsg::class);
    }
}
