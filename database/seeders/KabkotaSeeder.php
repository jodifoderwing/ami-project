<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabkotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kabkotas')->insert([
            [
                // 'id'            => 1,
                'type'          => 'KABUPATEN',
                'nama'          => 'BANTUL',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 2,
                'type'          => 'KABUPATEN',
                'nama'          => 'GUNUNGKIDUL',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 3,
                'type'          => 'KABUPATEN',
                'nama'          => 'KULONPROGO',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 4,
                'type'          => 'KABUPATEN',
                'nama'          => 'SLEMAN',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 5,
                'type'          => 'KOTA',
                'nama'          => 'YOGYAKARTA',
                'created_at'    => now(),
                'updated_at'    => now()
            ],
        ]);
    }
}
