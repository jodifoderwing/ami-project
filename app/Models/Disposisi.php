<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Disposisi extends Model
{
    use HasFactory;

    protected $fillable = [
        'surmasuk_id',
        'pegawai_id',
        'tgl_dispo',
        'arahan',
        'tgl_terima',
        'tgl_selesai',
        'upload_foto',
        'upload_dokumen',
        'catatan',
        'status',
    ];

    protected $casts = [
        'upload_foto' => 'array',
        'upload_dokumen' => 'array',
    ];

    public function surmasuk(): BelongsTo
    {
        return $this->belongsTo(Surmasuk::class);
    }

    public function pegawai(): BelongsTo
    {
        return $this->belongsTo(Pegawai::class);
    }
}
