<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pegawai extends Model
{
    use HasFactory;

    protected $casts = [
        'ktp' => 'array',
    ];

    protected $fillable = [
        'nama',
        'nik',
        'tmp_lahir',
        'tgl_lahir',
        'alamat',
        'genre',
        'no_hp',
        'foto',
        'ktp',
        'email',
        'nama_pd',
        'agama_id',
        'pemkraton_id',
        'jabatan_id',
    ];

    public function agama(): BelongsTo
    {
        return $this->belongsTo(Agama::class);
    }

    public function pemkraton(): BelongsTo
    {
        return $this->belongsTo(Pemkraton::class);
    }

    public function jabatan(): BelongsTo
    {
        return $this->belongsTo(Jabatan::class);
    }

    public function disposisi(): HasMany
    {
        return $this->hasMany(Disposisi::class);
    }
}
