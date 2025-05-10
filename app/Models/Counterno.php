<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counterno extends Model
{
    use HasFactory;

    protected $fillable = ['kode', 'tahun', 'nomor'];

    public static function noCounter($kode, $tahun)
    {
        // Mencari record berdasarkan kode dan tahun
        $counter = Counterno::where('kode', $kode)->where('tahun', $tahun)->first();

        if ($counter) {
            // Jika ditemukan, tambahkan nomor +1 dan update
            $counter->nomor += 1;
            $counter->save();
        } else {
            // Jika tidak ditemukan, buat record baru dengan nomor 1
            $counter = Counterno::create([
                'kode' => $kode,
                'tahun' => $tahun,
                'nomor' => 1,
            ]);
        }

        return $counter->nomor;
    }
}
