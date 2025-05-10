<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Surmasuk extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_surmas',
        'tgl_surmas',
        'no_surat',
        'tgl_surat',
        'nama_pengirim',
        'perihal',
        'ket',
        'dok_arsip',
    ];

    public function disposisi(): HasMany
    {
        return $this->hasMany(Disposisi::class);
    }
}
