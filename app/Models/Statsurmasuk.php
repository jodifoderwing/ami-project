<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statsurmasuk extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'ket'];
}
