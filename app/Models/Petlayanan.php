<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petlayanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pegawai_id',
        'email',
        'nama',
        'step',
    ];

    protected $casts = [
        'step' => 'array',
    ];
}
