<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KapkemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kapkems')->insert([
            // KAB BANTUL
            [
                // 'id'            => 1,
                'type'          => 'KAPANEWON',
                'nama'          => 'BAMBANGLIPURO',
                'kabkota_id'    => 1,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 2,
                'type'          => 'KAPANEWON',
                'nama'          => 'BANGUNTAPAN',
                'kabkota_id'    => 1,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 3,
                'type'          => 'KAPANEWON',
                'nama'          => 'BANTUL',
                'kabkota_id'    => 1,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 4,
                'type'          => 'KAPANEWON',
                'nama'          => 'DLINGO',
                'kabkota_id'    => 1,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 5,
                'type'          => 'KAPANEWON',
                'nama'          => 'IMOGIRI',
                'kabkota_id'    => 1,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 6,
                'type'          => 'KAPANEWON',
                'nama'          => 'JETIS',
                'kabkota_id'    => 1,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 7,
                'type'          => 'KAPANEWON',
                'nama'          => 'KASIHAN',
                'kabkota_id'    => 1,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 8,
                'type'          => 'KAPANEWON',
                'nama'          => 'KRETEK',
                'kabkota_id'    => 1,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 9,
                'type'          => 'KAPANEWON',
                'nama'          => 'PAJANGAN',
                'kabkota_id'    => 1,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 10,
                'type'          => 'KAPANEWON',
                'nama'          => 'PANDAK',
                'kabkota_id'    => 1,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 11,
                'type'          => 'KAPANEWON',
                'nama'          => 'PIYUNGAN',
                'kabkota_id'    => 1,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 12,
                'type'          => 'KAPANEWON',
                'nama'          => 'PLERET',
                'kabkota_id'    => 1,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 13,
                'type'          => 'KAPANEWON',
                'nama'          => 'PUNDONG',
                'kabkota_id'    => 1,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 14,
                'type'          => 'KAPANEWON',
                'nama'          => 'SANDEN',
                'kabkota_id'    => 1,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 15,
                'type'          => 'KAPANEWON',
                'nama'          => 'SEDAYU',
                'kabkota_id'    => 1,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 16,
                'type'          => 'KAPANEWON',
                'nama'          => 'SEWON',
                'kabkota_id'    => 1,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 17,
                'type'          => 'KAPANEWON',
                'nama'          => 'SRANDAKAN',
                'kabkota_id'    => 1,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            // KAB GUNUNGKIDUL
            [
                // 'id'            => 18,
                'type'          => 'KAPANEWON',
                'nama'          => 'GEDANGSARI',
                'kabkota_id'    => 2,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 19,
                'type'          => 'KAPANEWON',
                'nama'          => 'GIRISUBO',
                'kabkota_id'    => 2,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 20,
                'type'          => 'KAPANEWON',
                'nama'          => 'KARANGMOJO',
                'kabkota_id'    => 2,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 21,
                'type'          => 'KAPANEWON',
                'nama'          => 'NGAWEN',
                'kabkota_id'    => 2,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 22,
                'type'          => 'KAPANEWON',
                'nama'          => 'NGLIPAR',
                'kabkota_id'    => 2,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 23,
                'type'          => 'KAPANEWON',
                'nama'          => 'PALIYAN',
                'kabkota_id'    => 2,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 24,
                'type'          => 'KAPANEWON',
                'nama'          => 'PANGGANG',
                'kabkota_id'    => 2,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 25,
                'type'          => 'KAPANEWON',
                'nama'          => 'PATUK',
                'kabkota_id'    => 2,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 26,
                'type'          => 'KAPANEWON',
                'nama'          => 'PLAYEN',
                'kabkota_id'    => 2,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 27,
                'type'          => 'KAPANEWON',
                'nama'          => 'PONJONG',
                'kabkota_id'    => 2,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 28,
                'type'          => 'KAPANEWON',
                'nama'          => 'PURWOSARI',
                'kabkota_id'    => 2,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 29,
                'type'          => 'KAPANEWON',
                'nama'          => 'RONGKOP',
                'kabkota_id'    => 2,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 30,
                'type'          => 'KAPANEWON',
                'nama'          => 'SAPTOSARI',
                'kabkota_id'    => 2,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 31,
                'type'          => 'KAPANEWON',
                'nama'          => 'SEMANU',
                'kabkota_id'    => 2,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 32,
                'type'          => 'KAPANEWON',
                'nama'          => 'SEMIN',
                'kabkota_id'    => 2,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 33,
                'type'          => 'KAPANEWON',
                'nama'          => 'TANJUNGSARI',
                'kabkota_id'    => 2,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 34,
                'type'          => 'KAPANEWON',
                'nama'          => 'TEPUS',
                'kabkota_id'    => 2,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 35,
                'type'          => 'KAPANEWON',
                'nama'          => 'WONOSARI',
                'kabkota_id'    => 2,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            // KAB KULONPROGO
            [
                // 'id'            => 36,
                'type'          => 'KAPANEWON',
                'nama'          => 'GALUR',
                'kabkota_id'    => 3,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 37,
                'type'          => 'KAPANEWON',
                'nama'          => 'GIRIMULYO',
                'kabkota_id'    => 3,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 38,
                'type'          => 'KAPANEWON',
                'nama'          => 'KALIBAWANG',
                'kabkota_id'    => 3,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 39,
                'type'          => 'KAPANEWON',
                'nama'          => 'KOKAP',
                'kabkota_id'    => 3,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 40,
                'type'          => 'KAPANEWON',
                'nama'          => 'LENDAH',
                'kabkota_id'    => 3,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 41,
                'type'          => 'KAPANEWON',
                'nama'          => 'NANGGULAN',
                'kabkota_id'    => 3,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 42,
                'type'          => 'KAPANEWON',
                'nama'          => 'PANJATAN',
                'kabkota_id'    => 3,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 43,
                'type'          => 'KAPANEWON',
                'nama'          => 'PENGASIH',
                'kabkota_id'    => 3,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 44,
                'type'          => 'KAPANEWON',
                'nama'          => 'SAMIGALUH',
                'kabkota_id'    => 3,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 45,
                'type'          => 'KAPANEWON',
                'nama'          => 'SENTOLO',
                'kabkota_id'    => 3,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 46,
                'type'          => 'KAPANEWON',
                'nama'          => 'TEMON',
                'kabkota_id'    => 3,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 47,
                'type'          => 'KAPANEWON',
                'nama'          => 'WATES',
                'kabkota_id'    => 3,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            // KAB SLEMAN
            [
                // 'id'            => 48,
                'type'          => 'KAPANEWON',
                'nama'          => 'BERBAH',
                'kabkota_id'    => 4,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 49,
                'type'          => 'KAPANEWON',
                'nama'          => 'CANGKRINGAN',
                'kabkota_id'    => 4,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 50,
                'type'          => 'KAPANEWON',
                'nama'          => 'DEPOK',
                'kabkota_id'    => 4,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 51,
                'type'          => 'KAPANEWON',
                'nama'          => 'GAMPING',
                'kabkota_id'    => 4,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 52,
                'type'          => 'KAPANEWON',
                'nama'          => 'GODEAN',
                'kabkota_id'    => 4,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 53,
                'type'          => 'KAPANEWON',
                'nama'          => 'KALASAN',
                'kabkota_id'    => 4,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 54,
                'type'          => 'KAPANEWON',
                'nama'          => 'MINGGIR',
                'kabkota_id'    => 4,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 55,
                'type'          => 'KAPANEWON',
                'nama'          => 'MLATI',
                'kabkota_id'    => 4,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 56,
                'type'          => 'KAPANEWON',
                'nama'          => 'MOYUDAN',
                'kabkota_id'    => 4,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 57,
                'type'          => 'KAPANEWON',
                'nama'          => 'NGAGLIK',
                'kabkota_id'    => 4,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 58,
                'type'          => 'KAPANEWON',
                'nama'          => 'NGEMPLAK',
                'kabkota_id'    => 4,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 59,
                'type'          => 'KAPANEWON',
                'nama'          => 'PAKEM',
                'kabkota_id'    => 4,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 60,
                'type'          => 'KAPANEWON',
                'nama'          => 'PRAMBANAN',
                'kabkota_id'    => 4,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 61,
                'type'          => 'KAPANEWON',
                'nama'          => 'SEYEGAN',
                'kabkota_id'    => 4,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 62,
                'type'          => 'KAPANEWON',
                'nama'          => 'SLEMAN',
                'kabkota_id'    => 4,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 63,
                'type'          => 'KAPANEWON',
                'nama'          => 'TEMPEL',
                'kabkota_id'    => 4,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 64,
                'type'          => 'KAPANEWON',
                'nama'          => 'TURI',
                'kabkota_id'    => 4,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            // KOTA YOGYAKARTA
            [
                // 'id'            => 65,
                'type'          => 'KEMANTREN',
                'nama'          => 'DANUREJAN',
                'kabkota_id'    => 5,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 66,
                'type'          => 'KEMANTREN',
                'nama'          => 'GEDONGTENGEN',
                'kabkota_id'    => 5,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 67,
                'type'          => 'KEMANTREN',
                'nama'          => 'GONDOKUSUMAN',
                'kabkota_id'    => 5,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 68,
                'type'          => 'KEMANTREN',
                'nama'          => 'GONDOMANAN',
                'kabkota_id'    => 5,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 69,
                'type'          => 'KEMANTREN',
                'nama'          => 'JETIS',
                'kabkota_id'    => 5,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 70,
                'type'          => 'KEMANTREN',
                'nama'          => 'KOTAGEDE',
                'kabkota_id'    => 5,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 71,
                'type'          => 'KEMANTREN',
                'nama'          => 'KRATON',
                'kabkota_id'    => 5,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 72,
                'type'          => 'KEMANTREN',
                'nama'          => 'MANTRIJERON',
                'kabkota_id'    => 5,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 73,
                'type'          => 'KEMANTREN',
                'nama'          => 'MERGANGSAN',
                'kabkota_id'    => 5,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 74,
                'type'          => 'KEMANTREN',
                'nama'          => 'NGAMPILAN',
                'kabkota_id'    => 5,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 75,
                'type'          => 'KEMANTREN',
                'nama'          => 'PAKUALAMAN',
                'kabkota_id'    => 5,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 76,
                'type'          => 'KEMANTREN',
                'nama'          => 'TEGALREJO',
                'kabkota_id'    => 5,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 77,
                'type'          => 'KEMANTREN',
                'nama'          => 'UMBULHARJO',
                'kabkota_id'    => 5,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 78,
                'type'          => 'KEMANTREN',
                'nama'          => 'WIROBRAJAN',
                'kabkota_id'    => 5,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
        ]);
    }
}
