<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatsurmasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('statsurmasuks')->insert([
            [
                // 'id'            => 1,
                'nama'          => 'Masuk',
                'ket'          => 'Surat Masuk',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 2,
                'nama'          => 'Disposisi',
                'ket'          => 'Disposisi oleh GKR. Mangkubumi',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 3,
                'nama'          => 'Terima',
                'ket'          => 'Diterima oleh Staf',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 4,
                'nama'          => 'Selesai',
                'ket'          => 'Pelaksanaan tindak lanjut selesai',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 5,
                'nama'          => 'Arsip',
                'ket'          => 'Surat diarsipkan',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
        ]);
    }
}
