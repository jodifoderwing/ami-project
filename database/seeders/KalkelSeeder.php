<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KalkelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kalkels')->insert([
            //1. KAB BANTUL KAPANEWON BAMBANGLIPURO [1]
            [
                // 'id'            => 1,
                'type'          => 'KALURAHAN',
                'nama'          => 'MULYODADI',
                'kabkota_id'    => 1,
                'kapkem_id'     => 1,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 2,
                'type'          => 'KALURAHAN',
                'nama'          => 'SIDOMULYO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 1,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 3,
                'type'          => 'KALURAHAN',
                'nama'          => 'SUMBERMULYO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 1,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //2. KAB BANTUL KAPANEWON BANGUNTAPAN [2]
            [
                // 'id'            => 4,
                'type'          => 'KALURAHAN',
                'nama'          => 'BANGUNTAPAN',
                'kabkota_id'    => 1,
                'kapkem_id'     => 2,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 5,
                'type'          => 'KALURAHAN',
                'nama'          => 'BATURETNO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 2,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 6,
                'type'          => 'KALURAHAN',
                'nama'          => 'JAGALAN',
                'kabkota_id'    => 1,
                'kapkem_id'     => 2,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 7,
                'type'          => 'KALURAHAN',
                'nama'          => 'JAMBIDAN',
                'kabkota_id'    => 1,
                'kapkem_id'     => 2,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 8,
                'type'          => 'KALURAHAN',
                'nama'          => 'POTORONO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 2,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 9,
                'type'          => 'KALURAHAN',
                'nama'          => 'SINGOSAREN',
                'kabkota_id'    => 1,
                'kapkem_id'     => 2,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 10,
                'type'          => 'KALURAHAN',
                'nama'          => 'TAMANAN',
                'kabkota_id'    => 1,
                'kapkem_id'     => 2,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 11,
                'type'          => 'KALURAHAN',
                'nama'          => 'WIROKERTEN',
                'kabkota_id'    => 1,
                'kapkem_id'     => 2,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //3. KAB BANTUL KAPANEWON BANGUNTAPAN [3]
            [
                // 'id'            => 12,
                'type'          => 'KALURAHAN',
                'nama'          => 'BANTUL',
                'kabkota_id'    => 1,
                'kapkem_id'     => 3,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 13,
                'type'          => 'KALURAHAN',
                'nama'          => 'PALBAPANG',
                'kabkota_id'    => 1,
                'kapkem_id'     => 3,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 14,
                'type'          => 'KALURAHAN',
                'nama'          => 'RINGINHARJO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 3,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 15,
                'type'          => 'KALURAHAN',
                'nama'          => 'SABDODADI',
                'kabkota_id'    => 1,
                'kapkem_id'     => 3,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 16,
                'type'          => 'KALURAHAN',
                'nama'          => 'TRIRENGGO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 3,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //4. KAB BANTUL KAPANEWON DLINGO [4]
            [
                // 'id'            => 17,
                'type'          => 'KALURAHAN',
                'nama'          => 'DLINGO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 4,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 18,
                'type'          => 'KALURAHAN',
                'nama'          => 'JATIMULYO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 4,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 19,
                'type'          => 'KALURAHAN',
                'nama'          => 'MANGUNAN',
                'kabkota_id'    => 1,
                'kapkem_id'     => 4,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 20,
                'type'          => 'KALURAHAN',
                'nama'          => 'MUNTUK',
                'kabkota_id'    => 1,
                'kapkem_id'     => 4,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 21,
                'type'          => 'KALURAHAN',
                'nama'          => 'TEMUWUH',
                'kabkota_id'    => 1,
                'kapkem_id'     => 4,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 22,
                'type'          => 'KALURAHAN',
                'nama'          => 'TERONG',
                'kabkota_id'    => 1,
                'kapkem_id'     => 4,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //5. KAB BANTUL KAPANEWON IMOGIRI [5]
            [
                // 'id'            => 23,
                'type'          => 'KALURAHAN',
                'nama'          => 'GIRIREJO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 5,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 24,
                'type'          => 'KALURAHAN',
                'nama'          => 'IMOGIRI',
                'kabkota_id'    => 1,
                'kapkem_id'     => 5,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 25,
                'type'          => 'KALURAHAN',
                'nama'          => 'KARANGTALUN',
                'kabkota_id'    => 1,
                'kapkem_id'     => 5,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 26,
                'type'          => 'KALURAHAN',
                'nama'          => 'KARANGTENGAH',
                'kabkota_id'    => 1,
                'kapkem_id'     => 5,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 27,
                'type'          => 'KALURAHAN',
                'nama'          => 'KEBONAGUNG',
                'kabkota_id'    => 1,
                'kapkem_id'     => 5,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 28,
                'type'          => 'KALURAHAN',
                'nama'          => 'SELOPAMIORO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 5,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 29,
                'type'          => 'KALURAHAN',
                'nama'          => 'SRIHARJO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 5,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 30,
                'type'          => 'KALURAHAN',
                'nama'          => 'WUKIRSARI',
                'kabkota_id'    => 1,
                'kapkem_id'     => 5,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //6. KAB BANTUL KAPANEWON JETIS [6]
            [
                // 'id'            => 31,
                'type'          => 'KALURAHAN',
                'nama'          => 'CANDEN',
                'kabkota_id'    => 1,
                'kapkem_id'     => 6,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 32,
                'type'          => 'KALURAHAN',
                'nama'          => 'PATALAN',
                'kabkota_id'    => 1,
                'kapkem_id'     => 6,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 33,
                'type'          => 'KALURAHAN',
                'nama'          => 'SUMBERAGUNG',
                'kabkota_id'    => 1,
                'kapkem_id'     => 6,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 34,
                'type'          => 'KALURAHAN',
                'nama'          => 'TRIMULYO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 6,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //7. KAB BANTUL KAPANEWON KASIHAN [7]
            [
                // 'id'            => 35,
                'type'          => 'KALURAHAN',
                'nama'          => 'BANGUNJIWO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 7,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 36,
                'type'          => 'KALURAHAN',
                'nama'          => 'NGESTIHARJO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 7,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 37,
                'type'          => 'KALURAHAN',
                'nama'          => 'TAMANTIRTO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 7,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 38,
                'type'          => 'KALURAHAN',
                'nama'          => 'TIRTONIRMOLO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 7,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //8. KAB BANTUL KAPANEWON KRETEK [8]
            [
                // 'id'            => 39,
                'type'          => 'KALURAHAN',
                'nama'          => 'DONOTIRTO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 8,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 40,
                'type'          => 'KALURAHAN',
                'nama'          => 'PARANGTRITIS',
                'kabkota_id'    => 1,
                'kapkem_id'     => 8,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 41,
                'type'          => 'KALURAHAN',
                'nama'          => 'TIRTOHARGO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 8,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 42,
                'type'          => 'KALURAHAN',
                'nama'          => 'TIRTOMULYO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 8,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 43,
                'type'          => 'KALURAHAN',
                'nama'          => 'TIRTOSARI',
                'kabkota_id'    => 1,
                'kapkem_id'     => 8,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //9. KAB BANTUL KAPANEWON PAJANGAN [9]
            [
                // 'id'            => 44,
                'type'          => 'KALURAHAN',
                'nama'          => 'GUWOSARI',
                'kabkota_id'    => 1,
                'kapkem_id'     => 9,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 45,
                'type'          => 'KALURAHAN',
                'nama'          => 'SENDANGSARI',
                'kabkota_id'    => 1,
                'kapkem_id'     => 9,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 46,
                'type'          => 'KALURAHAN',
                'nama'          => 'TRIWIDADI',
                'kabkota_id'    => 1,
                'kapkem_id'     => 9,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //10. KAB BANTUL KAPANEWON PANDAK [10]
            [
                // 'id'            => 47,
                'type'          => 'KALURAHAN',
                'nama'          => 'CATURHARJO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 10,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 48,
                'type'          => 'KALURAHAN',
                'nama'          => 'GILANGHARJO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 10,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 49,
                'type'          => 'KALURAHAN',
                'nama'          => 'TRIHARJO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 10,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 50,
                'type'          => 'KALURAHAN',
                'nama'          => 'WIJIREJO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 10,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //11. KAB BANTUL KAPANEWON PIYUNGAN [11]
            [
                // 'id'            => 51,
                'type'          => 'KALURAHAN',
                'nama'          => 'SITIMULYO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 11,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 52,
                'type'          => 'KALURAHAN',
                'nama'          => 'SRIMARTANI',
                'kabkota_id'    => 1,
                'kapkem_id'     => 11,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 53,
                'type'          => 'KALURAHAN',
                'nama'          => 'SRIMULYO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 11,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //12. KAB BANTUL KAPANEWON PLERET [12]
            [
                // 'id'            => 54,
                'type'          => 'KALURAHAN',
                'nama'          => 'BAWURAN',
                'kabkota_id'    => 1,
                'kapkem_id'     => 12,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 55,
                'type'          => 'KALURAHAN',
                'nama'          => 'PLERED',
                'kabkota_id'    => 1,
                'kapkem_id'     => 12,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 56,
                'type'          => 'KALURAHAN',
                'nama'          => 'SEGOROYOSO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 12,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 57,
                'type'          => 'KALURAHAN',
                'nama'          => 'WONOKROMO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 12,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 58,
                'type'          => 'KALURAHAN',
                'nama'          => 'WONOLELO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 12,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //13. KAB BANTUL KAPANEWON PUNDONG [13]
            [
                // 'id'            => 59,
                'type'          => 'KALURAHAN',
                'nama'          => 'PANJANGREJO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 13,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 60,
                'type'          => 'KALURAHAN',
                'nama'          => 'SELOHARJO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 13,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 61,
                'type'          => 'KALURAHAN',
                'nama'          => 'SRIHARDONO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 13,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //14. KAB BANTUL KAPANEWON SANDEN [14]
            [
                // 'id'            => 62,
                'type'          => 'KALURAHAN',
                'nama'          => 'GADINGHARJO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 14,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 63,
                'type'          => 'KALURAHAN',
                'nama'          => 'GADINGSARI',
                'kabkota_id'    => 1,
                'kapkem_id'     => 14,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 64,
                'type'          => 'KALURAHAN',
                'nama'          => 'MURTIGADING',
                'kabkota_id'    => 1,
                'kapkem_id'     => 14,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 65,
                'type'          => 'KALURAHAN',
                'nama'          => 'SRIGADING',
                'kabkota_id'    => 1,
                'kapkem_id'     => 14,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //15. KAB BANTUL KAPANEWON SEDAYU [15]
            [
                // 'id'            => 66,
                'type'          => 'KALURAHAN',
                'nama'          => 'ARGODADI',
                'kabkota_id'    => 1,
                'kapkem_id'     => 15,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 67,
                'type'          => 'KALURAHAN',
                'nama'          => 'ARGOMULYO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 15,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 68,
                'type'          => 'KALURAHAN',
                'nama'          => 'ARGOREJO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 15,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 69,
                'type'          => 'KALURAHAN',
                'nama'          => 'ARGOSARI',
                'kabkota_id'    => 1,
                'kapkem_id'     => 15,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //16. KAB BANTUL KAPANEWON SEWON [16]
            [
                // 'id'            => 70,
                'type'          => 'KALURAHAN',
                'nama'          => 'BANGUNHARJO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 16,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 71,
                'type'          => 'KALURAHAN',
                'nama'          => 'PANGGUNGHARJO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 16,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 72,
                'type'          => 'KALURAHAN',
                'nama'          => 'PENDOWOHARJO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 16,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 73,
                'type'          => 'KALURAHAN',
                'nama'          => 'TIMBULHARJO',
                'kabkota_id'    => 1,
                'kapkem_id'     => 16,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //17. KAB BANTUL KAPANEWON SEWON [17]
            [
                // 'id'            => 74,
                'type'          => 'KALURAHAN',
                'nama'          => 'PONCOSARI',
                'kabkota_id'    => 1,
                'kapkem_id'     => 17,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 75,
                'type'          => 'KALURAHAN',
                'nama'          => 'TRIMURTI',
                'kabkota_id'    => 1,
                'kapkem_id'     => 17,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            // ---------------------------------------------------------------------
            //1. KAB GUNUNGKIDUL KAPANEWON GEDANGSARI [18]
            [
                // 'id'            => 76,
                'type'          => 'KALURAHAN',
                'nama'          => 'HARGOMULYO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 18,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 77,
                'type'          => 'KALURAHAN',
                'nama'          => 'MERTELU',
                'kabkota_id'    => 2,
                'kapkem_id'     => 18,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 78,
                'type'          => 'KALURAHAN',
                'nama'          => 'NGALANG',
                'kabkota_id'    => 2,
                'kapkem_id'     => 18,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 79,
                'type'          => 'KALURAHAN',
                'nama'          => 'SAMPANG',
                'kabkota_id'    => 2,
                'kapkem_id'     => 18,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 80,
                'type'          => 'KALURAHAN',
                'nama'          => 'SERUT',
                'kabkota_id'    => 2,
                'kapkem_id'     => 18,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 81,
                'type'          => 'KALURAHAN',
                'nama'          => 'TEGALREJO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 18,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 82,
                'type'          => 'KALURAHAN',
                'nama'          => 'WATUGAJAH',
                'kabkota_id'    => 2,
                'kapkem_id'     => 18,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //2. KAB GUNUNGKIDUL KAPANEWON GIRISUBO [19]
            [
                // 'id'            => 83,
                'type'          => 'KALURAHAN',
                'nama'          => 'BALONG',
                'kabkota_id'    => 2,
                'kapkem_id'     => 19,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 84,
                'type'          => 'KALURAHAN',
                'nama'          => 'JEPITU',
                'kabkota_id'    => 2,
                'kapkem_id'     => 19,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 85,
                'type'          => 'KALURAHAN',
                'nama'          => 'JERUKWUDEL',
                'kabkota_id'    => 2,
                'kapkem_id'     => 19,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 86,
                'type'          => 'KALURAHAN',
                'nama'          => 'KARANGAWEN',
                'kabkota_id'    => 2,
                'kapkem_id'     => 19,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 87,
                'type'          => 'KALURAHAN',
                'nama'          => 'NGLINDUR',
                'kabkota_id'    => 2,
                'kapkem_id'     => 19,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 88,
                'type'          => 'KALURAHAN',
                'nama'          => 'PUCUNG',
                'kabkota_id'    => 2,
                'kapkem_id'     => 19,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 89,
                'type'          => 'KALURAHAN',
                'nama'          => 'SONGBANYU',
                'kabkota_id'    => 2,
                'kapkem_id'     => 19,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 90,
                'type'          => 'KALURAHAN',
                'nama'          => 'TILENG',
                'kabkota_id'    => 2,
                'kapkem_id'     => 19,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //3. KAB GUNUNGKIDUL KAPANEWON KARANGMOJO [20]
            [
                // 'id'            => 91,
                'type'          => 'KALURAHAN',
                'nama'          => 'BEJIHARJO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 20,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 92,
                'type'          => 'KALURAHAN',
                'nama'          => 'BENDUNGAN',
                'kabkota_id'    => 2,
                'kapkem_id'     => 20,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 93,
                'type'          => 'KALURAHAN',
                'nama'          => 'GEDANGREJO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 20,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 94,
                'type'          => 'KALURAHAN',
                'nama'          => 'JATIAYU',
                'kabkota_id'    => 2,
                'kapkem_id'     => 20,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 95,
                'type'          => 'KALURAHAN',
                'nama'          => 'KARANGMOJO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 20,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 96,
                'type'          => 'KALURAHAN',
                'nama'          => 'KELOR',
                'kabkota_id'    => 2,
                'kapkem_id'     => 20,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 97,
                'type'          => 'KALURAHAN',
                'nama'          => 'NGAWIS',
                'kabkota_id'    => 2,
                'kapkem_id'     => 20,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 98,
                'type'          => 'KALURAHAN',
                'nama'          => 'NGIPAK',
                'kabkota_id'    => 2,
                'kapkem_id'     => 20,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 99,
                'type'          => 'KALURAHAN',
                'nama'          => 'WILADEG',
                'kabkota_id'    => 2,
                'kapkem_id'     => 20,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //4. KAB GUNUNGKIDUL KAPANEWON NGAWEN [21]
            [
                // 'id'            => 100,
                'type'          => 'KALURAHAN',
                'nama'          => 'BEJI',
                'kabkota_id'    => 2,
                'kapkem_id'     => 21,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 101,
                'type'          => 'KALURAHAN',
                'nama'          => 'JURANGJERO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 21,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 102,
                'type'          => 'KALURAHAN',
                'nama'          => 'KAMPUNG',
                'kabkota_id'    => 2,
                'kapkem_id'     => 21,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 103,
                'type'          => 'KALURAHAN',
                'nama'          => 'SAMBIREJO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 21,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 104,
                'type'          => 'KALURAHAN',
                'nama'          => 'TANCEP',
                'kabkota_id'    => 2,
                'kapkem_id'     => 21,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 105,
                'type'          => 'KALURAHAN',
                'nama'          => 'WATUSIGAR',
                'kabkota_id'    => 2,
                'kapkem_id'     => 21,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //5. KAB GUNUNGKIDUL KAPANEWON NGLIPAR [22]
            [
                // 'id'            => 106,
                'type'          => 'KALURAHAN',
                'nama'          => 'KATONGAN',
                'kabkota_id'    => 2,
                'kapkem_id'     => 22,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 107,
                'type'          => 'KALURAHAN',
                'nama'          => 'KEDUNGKERIS',
                'kabkota_id'    => 2,
                'kapkem_id'     => 22,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 108,
                'type'          => 'KALURAHAN',
                'nama'          => 'KEDUNGPOH',
                'kabkota_id'    => 2,
                'kapkem_id'     => 22,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 109,
                'type'          => 'KALURAHAN',
                'nama'          => 'NATAH',
                'kabkota_id'    => 2,
                'kapkem_id'     => 22,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 110,
                'type'          => 'KALURAHAN',
                'nama'          => 'NGLIPAR',
                'kabkota_id'    => 2,
                'kapkem_id'     => 22,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 111,
                'type'          => 'KALURAHAN',
                'nama'          => 'PENGKOL',
                'kabkota_id'    => 2,
                'kapkem_id'     => 22,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 112,
                'type'          => 'KALURAHAN',
                'nama'          => 'PILANGREJO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 22,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //6. KAB GUNUNGKIDUL KAPANEWON PALIYAN [23]
            [
                // 'id'            => 113,
                'type'          => 'KALURAHAN',
                'nama'          => 'GIRING',
                'kabkota_id'    => 2,
                'kapkem_id'     => 23,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 114,
                'type'          => 'KALURAHAN',
                'nama'          => 'GROGOL',
                'kabkota_id'    => 2,
                'kapkem_id'     => 23,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 115,
                'type'          => 'KALURAHAN',
                'nama'          => 'KARANGASEM',
                'kabkota_id'    => 2,
                'kapkem_id'     => 23,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 116,
                'type'          => 'KALURAHAN',
                'nama'          => 'KARANGDUWET',
                'kabkota_id'    => 2,
                'kapkem_id'     => 23,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 117,
                'type'          => 'KALURAHAN',
                'nama'          => 'MULUSAN',
                'kabkota_id'    => 2,
                'kapkem_id'     => 23,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 118,
                'type'          => 'KALURAHAN',
                'nama'          => 'PAMPANG',
                'kabkota_id'    => 2,
                'kapkem_id'     => 23,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 119,
                'type'          => 'KALURAHAN',
                'nama'          => 'SODO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 23,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //7. KAB GUNUNGKIDUL KAPANEWON PANGGANG [24]
            [
                // 'id'            => 120,
                'type'          => 'KALURAHAN',
                'nama'          => 'GIRIHARJO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 24,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 121,
                'type'          => 'KALURAHAN',
                'nama'          => 'GIRIKARTO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 24,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 122,
                'type'          => 'KALURAHAN',
                'nama'          => 'GIRIMULYO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 24,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 123,
                'type'          => 'KALURAHAN',
                'nama'          => 'GIRISEKAR',
                'kabkota_id'    => 2,
                'kapkem_id'     => 24,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 124,
                'type'          => 'KALURAHAN',
                'nama'          => 'GIRISUKO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 24,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 125,
                'type'          => 'KALURAHAN',
                'nama'          => 'GIRIWUNGU',
                'kabkota_id'    => 2,
                'kapkem_id'     => 24,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //8. KAB GUNUNGKIDUL KAPANEWON PATUK [25]
            [
                // 'id'            => 126,
                'type'          => 'KALURAHAN',
                'nama'          => 'BEJI',
                'kabkota_id'    => 2,
                'kapkem_id'     => 25,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 127,
                'type'          => 'KALURAHAN',
                'nama'          => 'BUNDER',
                'kabkota_id'    => 2,
                'kapkem_id'     => 25,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 128,
                'type'          => 'KALURAHAN',
                'nama'          => 'NGLANGGERAN',
                'kabkota_id'    => 2,
                'kapkem_id'     => 25,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 129,
                'type'          => 'KALURAHAN',
                'nama'          => 'NGLEGI',
                'kabkota_id'    => 2,
                'kapkem_id'     => 25,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 130,
                'type'          => 'KALURAHAN',
                'nama'          => 'NGORO-ORO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 25,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 131,
                'type'          => 'KALURAHAN',
                'nama'          => 'PATUK',
                'kabkota_id'    => 2,
                'kapkem_id'     => 25,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 132,
                'type'          => 'KALURAHAN',
                'nama'          => 'PENGKOK',
                'kabkota_id'    => 2,
                'kapkem_id'     => 25,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 133,
                'type'          => 'KALURAHAN',
                'nama'          => 'PUTAT',
                'kabkota_id'    => 2,
                'kapkem_id'     => 25,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 134,
                'type'          => 'KALURAHAN',
                'nama'          => 'SALAM',
                'kabkota_id'    => 2,
                'kapkem_id'     => 25,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 135,
                'type'          => 'KALURAHAN',
                'nama'          => 'SEMOYO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 25,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 136,
                'type'          => 'KALURAHAN',
                'nama'          => 'TERBAH',
                'kabkota_id'    => 2,
                'kapkem_id'     => 25,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //9. KAB GUNUNGKIDUL KAPANEWON PLAYEN [26]
            [
                // 'id'            => 137,
                'type'          => 'KALURAHAN',
                'nama'          => 'BANARAN',
                'kabkota_id'    => 2,
                'kapkem_id'     => 26,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 138,
                'type'          => 'KALURAHAN',
                'nama'          => 'BANDUNG',
                'kabkota_id'    => 2,
                'kapkem_id'     => 26,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 139,
                'type'          => 'KALURAHAN',
                'nama'          => 'BANYUSOCO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 26,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 140,
                'type'          => 'KALURAHAN',
                'nama'          => 'BLEBERAN',
                'kabkota_id'    => 2,
                'kapkem_id'     => 26,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 141,
                'type'          => 'KALURAHAN',
                'nama'          => 'DENGOK',
                'kabkota_id'    => 2,
                'kapkem_id'     => 26,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 142,
                'type'          => 'KALURAHAN',
                'nama'          => 'GADING',
                'kabkota_id'    => 2,
                'kapkem_id'     => 26,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 143,
                'type'          => 'KALURAHAN',
                'nama'          => 'GETAS',
                'kabkota_id'    => 2,
                'kapkem_id'     => 26,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 144,
                'type'          => 'KALURAHAN',
                'nama'          => 'LOGANDENG',
                'kabkota_id'    => 2,
                'kapkem_id'     => 26,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 145,
                'type'          => 'KALURAHAN',
                'nama'          => 'NGAWU',
                'kabkota_id'    => 2,
                'kapkem_id'     => 26,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 146,
                'type'          => 'KALURAHAN',
                'nama'          => 'NGLERI',
                'kabkota_id'    => 2,
                'kapkem_id'     => 26,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 147,
                'type'          => 'KALURAHAN',
                'nama'          => 'NGUNUT',
                'kabkota_id'    => 2,
                'kapkem_id'     => 26,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 148,
                'type'          => 'KALURAHAN',
                'nama'          => 'PLAYEN',
                'kabkota_id'    => 2,
                'kapkem_id'     => 26,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 149,
                'type'          => 'KALURAHAN',
                'nama'          => 'PLEMBUTAN',
                'kabkota_id'    => 2,
                'kapkem_id'     => 26,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //10. KAB GUNUNGKIDUL KAPANEWON PONJONG [27]
            [
                // 'id'            => 150,
                'type'          => 'KALURAHAN',
                'nama'          => 'BEDOYO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 27,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 151,
                'type'          => 'KALURAHAN',
                'nama'          => 'GENJAHAN',
                'kabkota_id'    => 2,
                'kapkem_id'     => 27,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 152,
                'type'          => 'KALURAHAN',
                'nama'          => 'GOMBANG',
                'kabkota_id'    => 2,
                'kapkem_id'     => 27,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 153,
                'type'          => 'KALURAHAN',
                'nama'          => 'KARANGASEM',
                'kabkota_id'    => 2,
                'kapkem_id'     => 27,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 154,
                'type'          => 'KALURAHAN',
                'nama'          => 'KENTENG',
                'kabkota_id'    => 2,
                'kapkem_id'     => 27,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 155,
                'type'          => 'KALURAHAN',
                'nama'          => 'PONJONG',
                'kabkota_id'    => 2,
                'kapkem_id'     => 27,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 156,
                'type'          => 'KALURAHAN',
                'nama'          => 'SAWAHAN',
                'kabkota_id'    => 2,
                'kapkem_id'     => 27,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 157,
                'type'          => 'KALURAHAN',
                'nama'          => 'SIDOREJO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 27,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 158,
                'type'          => 'KALURAHAN',
                'nama'          => 'SUMBERGIRI',
                'kabkota_id'    => 2,
                'kapkem_id'     => 27,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 159,
                'type'          => 'KALURAHAN',
                'nama'          => 'TAMBAKROMO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 27,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 160,
                'type'          => 'KALURAHAN',
                'nama'          => 'UMBULREJO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 27,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //11. KAB GUNUNGKIDUL KAPANEWON PURWOSARI [28]
            [
                // 'id'            => 161,
                'type'          => 'KALURAHAN',
                'nama'          => 'GIRIASIH',
                'kabkota_id'    => 2,
                'kapkem_id'     => 28,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 162,
                'type'          => 'KALURAHAN',
                'nama'          => 'GIRICAHYO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 28,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 163,
                'type'          => 'KALURAHAN',
                'nama'          => 'GIRIJATI',
                'kabkota_id'    => 2,
                'kapkem_id'     => 28,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 164,
                'type'          => 'KALURAHAN',
                'nama'          => 'GIRIPURWO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 28,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 165,
                'type'          => 'KALURAHAN',
                'nama'          => 'GIRITIRTO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 28,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //12. KAB GUNUNGKIDUL KAPANEWON RONGKOP [29]
            [
                // 'id'            => 166,
                'type'          => 'KALURAHAN',
                'nama'          => 'BOHOL',
                'kabkota_id'    => 2,
                'kapkem_id'     => 29,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 167,
                'type'          => 'KALURAHAN',
                'nama'          => 'BOTODAYAKAN',
                'kabkota_id'    => 2,
                'kapkem_id'     => 29,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 168,
                'type'          => 'KALURAHAN',
                'nama'          => 'KARANGWUNI',
                'kabkota_id'    => 2,
                'kapkem_id'     => 29,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 169,
                'type'          => 'KALURAHAN',
                'nama'          => 'MELIKAN',
                'kabkota_id'    => 2,
                'kapkem_id'     => 29,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 170,
                'type'          => 'KALURAHAN',
                'nama'          => 'PETIR',
                'kabkota_id'    => 2,
                'kapkem_id'     => 29,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 171,
                'type'          => 'KALURAHAN',
                'nama'          => 'PRINGOMBO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 29,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 172,
                'type'          => 'KALURAHAN',
                'nama'          => 'PUCANGANOM',
                'kabkota_id'    => 2,
                'kapkem_id'     => 29,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 173,
                'type'          => 'KALURAHAN',
                'nama'          => 'SEMUGIH',
                'kabkota_id'    => 2,
                'kapkem_id'     => 29,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //13. KAB GUNUNGKIDUL KAPANEWON SAPTOSARI [30]
            [
                // 'id'            => 174,
                'type'          => 'KALURAHAN',
                'nama'          => 'JETIS',
                'kabkota_id'    => 2,
                'kapkem_id'     => 30,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 175,
                'type'          => 'KALURAHAN',
                'nama'          => 'KANIGORO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 30,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 176,
                'type'          => 'KALURAHAN',
                'nama'          => 'KEPEK',
                'kabkota_id'    => 2,
                'kapkem_id'     => 30,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 177,
                'type'          => 'KALURAHAN',
                'nama'          => 'KRAMBILSAWIT',
                'kabkota_id'    => 2,
                'kapkem_id'     => 30,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 178,
                'type'          => 'KALURAHAN',
                'nama'          => 'MONGGOL',
                'kabkota_id'    => 2,
                'kapkem_id'     => 30,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 179,
                'type'          => 'KALURAHAN',
                'nama'          => 'NGLORA',
                'kabkota_id'    => 2,
                'kapkem_id'     => 30,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 180,
                'type'          => 'KALURAHAN',
                'nama'          => 'PLANJAN',
                'kabkota_id'    => 2,
                'kapkem_id'     => 30,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //14. KAB GUNUNGKIDUL KAPANEWON SEMANU [31]
            [
                // 'id'            => 181,
                'type'          => 'KALURAHAN',
                'nama'          => 'CANDIREJO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 31,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 182,
                'type'          => 'KALURAHAN',
                'nama'          => 'DADAPAYU',
                'kabkota_id'    => 2,
                'kapkem_id'     => 31,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 183,
                'type'          => 'KALURAHAN',
                'nama'          => 'NGEPOSARI',
                'kabkota_id'    => 2,
                'kapkem_id'     => 31,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 184,
                'type'          => 'KALURAHAN',
                'nama'          => 'PACAREJO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 31,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 185,
                'type'          => 'KALURAHAN',
                'nama'          => 'SEMANU',
                'kabkota_id'    => 2,
                'kapkem_id'     => 31,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //15. KAB GUNUNGKIDUL KAPANEWON SEMIN [32]
            [
                // 'id'            => 186,
                'type'          => 'KALURAHAN',
                'nama'          => 'BENDUNG',
                'kabkota_id'    => 2,
                'kapkem_id'     => 32,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 187,
                'type'          => 'KALURAHAN',
                'nama'          => 'BULUREJO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 32,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 188,
                'type'          => 'KALURAHAN',
                'nama'          => 'CANDIREJO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 32,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 189,
                'type'          => 'KALURAHAN',
                'nama'          => 'KALITEKUK',
                'kabkota_id'    => 2,
                'kapkem_id'     => 32,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 190,
                'type'          => 'KALURAHAN',
                'nama'          => 'KARANGSARI',
                'kabkota_id'    => 2,
                'kapkem_id'     => 32,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 191,
                'type'          => 'KALURAHAN',
                'nama'          => 'KEMEJING',
                'kabkota_id'    => 2,
                'kapkem_id'     => 32,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 192,
                'type'          => 'KALURAHAN',
                'nama'          => 'PUNDUNGSARI',
                'kabkota_id'    => 2,
                'kapkem_id'     => 32,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 193,
                'type'          => 'KALURAHAN',
                'nama'          => 'REJOSARI',
                'kabkota_id'    => 2,
                'kapkem_id'     => 32,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 194,
                'type'          => 'KALURAHAN',
                'nama'          => 'SEMIN',
                'kabkota_id'    => 2,
                'kapkem_id'     => 32,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 195,
                'type'          => 'KALURAHAN',
                'nama'          => 'SUMBEREJO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 32,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //16. KAB GUNUNGKIDUL KAPANEWON TANJUNGSARI [33]
            [
                // 'id'            => 196,
                'type'          => 'KALURAHAN',
                'nama'          => 'BANJAREJO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 33,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 197,
                'type'          => 'KALURAHAN',
                'nama'          => 'HARGOSARI',
                'kabkota_id'    => 2,
                'kapkem_id'     => 33,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 198,
                'type'          => 'KALURAHAN',
                'nama'          => 'KEMADANG',
                'kabkota_id'    => 2,
                'kapkem_id'     => 33,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 199,
                'type'          => 'KALURAHAN',
                'nama'          => 'KEMIRI',
                'kabkota_id'    => 2,
                'kapkem_id'     => 33,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 200,
                'type'          => 'KALURAHAN',
                'nama'          => 'NGESTIREJO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 33,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //17. KAB GUNUNGKIDUL KAPANEWON TEPUS [34]
            [
                // 'id'            => 201,
                'type'          => 'KALURAHAN',
                'nama'          => 'GIRIPANGGUNG',
                'kabkota_id'    => 2,
                'kapkem_id'     => 34,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 202,
                'type'          => 'KALURAHAN',
                'nama'          => 'PURWODADI',
                'kabkota_id'    => 2,
                'kapkem_id'     => 34,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 203,
                'type'          => 'KALURAHAN',
                'nama'          => 'SIDOHARJO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 34,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 204,
                'type'          => 'KALURAHAN',
                'nama'          => 'SUMBERWUNGU',
                'kabkota_id'    => 2,
                'kapkem_id'     => 34,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 205,
                'type'          => 'KALURAHAN',
                'nama'          => 'TEPUS',
                'kabkota_id'    => 2,
                'kapkem_id'     => 34,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //18. KAB GUNUNGKIDUL KAPANEWON WONOSARI [35]
            [
                // 'id'            => 206,
                'type'          => 'KALURAHAN',
                'nama'          => 'BALEHARJO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 35,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 207,
                'type'          => 'KALURAHAN',
                'nama'          => 'DUWET',
                'kabkota_id'    => 2,
                'kapkem_id'     => 35,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 208,
                'type'          => 'KALURAHAN',
                'nama'          => 'GARI',
                'kabkota_id'    => 2,
                'kapkem_id'     => 35,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 209,
                'type'          => 'KALURAHAN',
                'nama'          => 'KARANGTENGAH',
                'kabkota_id'    => 2,
                'kapkem_id'     => 35,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 210,
                'type'          => 'KALURAHAN',
                'nama'          => 'KARANGREJEK',
                'kabkota_id'    => 2,
                'kapkem_id'     => 35,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 211,
                'type'          => 'KALURAHAN',
                'nama'          => 'KEPEK',
                'kabkota_id'    => 2,
                'kapkem_id'     => 35,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 212,
                'type'          => 'KALURAHAN',
                'nama'          => 'MULO',
                'kabkota_id'    => 2,
                'kapkem_id'     => 35,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 213,
                'type'          => 'KALURAHAN',
                'nama'          => 'PIYAMAN',
                'kabkota_id'    => 2,
                'kapkem_id'     => 35,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 214,
                'type'          => 'KALURAHAN',
                'nama'          => 'PULUTAN',
                'kabkota_id'    => 2,
                'kapkem_id'     => 35,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 215,
                'type'          => 'KALURAHAN',
                'nama'          => 'SELANG',
                'kabkota_id'    => 2,
                'kapkem_id'     => 35,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 216,
                'type'          => 'KALURAHAN',
                'nama'          => 'SIRAMAN',
                'kabkota_id'    => 2,
                'kapkem_id'     => 35,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 217,
                'type'          => 'KALURAHAN',
                'nama'          => 'WARENG',
                'kabkota_id'    => 2,
                'kapkem_id'     => 35,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 218,
                'type'          => 'KALURAHAN',
                'nama'          => 'WONOSARI',
                'kabkota_id'    => 2,
                'kapkem_id'     => 35,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 219,
                'type'          => 'KALURAHAN',
                'nama'          => 'WUNUNG',
                'kabkota_id'    => 2,
                'kapkem_id'     => 35,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            // ---------------------------------------------------------------------
            //1. KAB KULONPROGO KAPANEWON GALUR [36]
            [
                // 'id'            => 220,
                'type'          => 'KALURAHAN',
                'nama'          => 'BANARAN',
                'kabkota_id'    => 3,
                'kapkem_id'     => 36,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 221,
                'type'          => 'KALURAHAN',
                'nama'          => 'BROSOT',
                'kabkota_id'    => 3,
                'kapkem_id'     => 36,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 222,
                'type'          => 'KALURAHAN',
                'nama'          => 'KARANGSEWU',
                'kabkota_id'    => 3,
                'kapkem_id'     => 36,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 223,
                'type'          => 'KALURAHAN',
                'nama'          => 'KRANGGAN',
                'kabkota_id'    => 3,
                'kapkem_id'     => 36,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 224,
                'type'          => 'KALURAHAN',
                'nama'          => 'NOMPOREJO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 36,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 225,
                'type'          => 'KALURAHAN',
                'nama'          => 'PANDOWAN',
                'kabkota_id'    => 3,
                'kapkem_id'     => 36,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 226,
                'type'          => 'KALURAHAN',
                'nama'          => 'TIRTORAHAYU',
                'kabkota_id'    => 3,
                'kapkem_id'     => 36,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //2. KAB KULONPROGO KAPANEWON GIRIMULYO [37]
            [
                // 'id'            => 227,
                'type'          => 'KALURAHAN',
                'nama'          => 'GIRIPURWO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 37,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 228,
                'type'          => 'KALURAHAN',
                'nama'          => 'JATIMULYO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 37,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 229,
                'type'          => 'KALURAHAN',
                'nama'          => 'PENDOWOREJO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 37,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 230,
                'type'          => 'KALURAHAN',
                'nama'          => 'PURWOSARI',
                'kabkota_id'    => 3,
                'kapkem_id'     => 37,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //3. KAB KULONPROGO KAPANEWON KALIBAWANG [38]
            [
                // 'id'            => 231,
                'type'          => 'KALURAHAN',
                'nama'          => 'BANJARARUM',
                'kabkota_id'    => 3,
                'kapkem_id'     => 38,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 232,
                'type'          => 'KALURAHAN',
                'nama'          => 'BANJARHARJO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 38,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 233,
                'type'          => 'KALURAHAN',
                'nama'          => 'BANJAROYO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 38,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 234,
                'type'          => 'KALURAHAN',
                'nama'          => 'BANJARSARI',
                'kabkota_id'    => 3,
                'kapkem_id'     => 38,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //4. KAB KULONPROGO KAPANEWON KOKAP [39]
            [
                // 'id'            => 235,
                'type'          => 'KALURAHAN',
                'nama'          => 'HARGOMULYO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 39,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 236,
                'type'          => 'KALURAHAN',
                'nama'          => 'HARGOREJO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 39,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 237,
                'type'          => 'KALURAHAN',
                'nama'          => 'HARGOTIRTO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 39,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 238,
                'type'          => 'KALURAHAN',
                'nama'          => 'HARGOWILIS',
                'kabkota_id'    => 3,
                'kapkem_id'     => 39,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 239,
                'type'          => 'KALURAHAN',
                'nama'          => 'KALIREJO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 39,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //5. KAB KULONPROGO KAPANEWON LENDAH [40]
            [
                // 'id'            => 240,
                'type'          => 'KALURAHAN',
                'nama'          => 'BUMIREJO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 40,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 241,
                'type'          => 'KALURAHAN',
                'nama'          => 'GULUREJO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 40,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 242,
                'type'          => 'KALURAHAN',
                'nama'          => 'JATIREJO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 40,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 243,
                'type'          => 'KALURAHAN',
                'nama'          => 'NGENTAKREJO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 40,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 244,
                'type'          => 'KALURAHAN',
                'nama'          => 'SIDOREJO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 40,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 245,
                'type'          => 'KALURAHAN',
                'nama'          => 'WAHYUHARJO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 40,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //6. KAB KULONPROGO KAPANEWON NANGGULAN [41]
            [
                // 'id'            => 246,
                'type'          => 'KALURAHAN',
                'nama'          => 'BANYUROTO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 41,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 247,
                'type'          => 'KALURAHAN',
                'nama'          => 'DONOMULYO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 41,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 248,
                'type'          => 'KALURAHAN',
                'nama'          => 'JATISARONO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 41,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 249,
                'type'          => 'KALURAHAN',
                'nama'          => 'KEMBANG',
                'kabkota_id'    => 3,
                'kapkem_id'     => 41,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 250,
                'type'          => 'KALURAHAN',
                'nama'          => 'TANJUNGHARJO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 41,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 251,
                'type'          => 'KALURAHAN',
                'nama'          => 'WIJIMULYO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 41,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //7. KAB KULONPROGO KAPANEWON PANJATAN [42]
            [
                // 'id'            => 252,
                'type'          => 'KALURAHAN',
                'nama'          => 'BOJONG',
                'kabkota_id'    => 3,
                'kapkem_id'     => 42,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 253,
                'type'          => 'KALURAHAN',
                'nama'          => 'BUGEL',
                'kabkota_id'    => 3,
                'kapkem_id'     => 42,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 254,
                'type'          => 'KALURAHAN',
                'nama'          => 'CERME',
                'kabkota_id'    => 3,
                'kapkem_id'     => 42,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 255,
                'type'          => 'KALURAHAN',
                'nama'          => 'DEPOK',
                'kabkota_id'    => 3,
                'kapkem_id'     => 42,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 256,
                'type'          => 'KALURAHAN',
                'nama'          => 'GARONGAN',
                'kabkota_id'    => 3,
                'kapkem_id'     => 42,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 257,
                'type'          => 'KALURAHAN',
                'nama'          => 'GOTAKAN',
                'kabkota_id'    => 3,
                'kapkem_id'     => 42,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 258,
                'type'          => 'KALURAHAN',
                'nama'          => 'KANOMAN',
                'kabkota_id'    => 3,
                'kapkem_id'     => 42,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 259,
                'type'          => 'KALURAHAN',
                'nama'          => 'KREMBANGAN',
                'kabkota_id'    => 3,
                'kapkem_id'     => 42,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 260,
                'type'          => 'KALURAHAN',
                'nama'          => 'PANJATAN',
                'kabkota_id'    => 3,
                'kapkem_id'     => 42,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 261,
                'type'          => 'KALURAHAN',
                'nama'          => 'PLERET',
                'kabkota_id'    => 3,
                'kapkem_id'     => 42,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 262,
                'type'          => 'KALURAHAN',
                'nama'          => 'TAYUBAN',
                'kabkota_id'    => 3,
                'kapkem_id'     => 42,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //8. KAB KULONPROGO KAPANEWON PENGASIH [43]
            [
                // 'id'            => 263,
                'type'          => 'KALURAHAN',
                'nama'          => 'KARANGSARI',
                'kabkota_id'    => 3,
                'kapkem_id'     => 43,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 264,
                'type'          => 'KALURAHAN',
                'nama'          => 'KEDUNGSARI',
                'kabkota_id'    => 3,
                'kapkem_id'     => 43,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 265,
                'type'          => 'KALURAHAN',
                'nama'          => 'MARGOSARI',
                'kabkota_id'    => 3,
                'kapkem_id'     => 43,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 266,
                'type'          => 'KALURAHAN',
                'nama'          => 'PENGASIH',
                'kabkota_id'    => 3,
                'kapkem_id'     => 43,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 267,
                'type'          => 'KALURAHAN',
                'nama'          => 'SENDANGSARI',
                'kabkota_id'    => 3,
                'kapkem_id'     => 43,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 268,
                'type'          => 'KALURAHAN',
                'nama'          => 'SIDOMULYO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 43,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 269,
                'type'          => 'KALURAHAN',
                'nama'          => 'TAWANGSARI',
                'kabkota_id'    => 3,
                'kapkem_id'     => 43,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //9. KAB KULONPROGO KAPANEWON SAMIGALUH [44]
            [
                // 'id'            => 270,
                'type'          => 'KALURAHAN',
                'nama'          => 'BANJARSARI',
                'kabkota_id'    => 3,
                'kapkem_id'     => 44,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 271,
                'type'          => 'KALURAHAN',
                'nama'          => 'GERBOSARI',
                'kabkota_id'    => 3,
                'kapkem_id'     => 44,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 272,
                'type'          => 'KALURAHAN',
                'nama'          => 'KEBONHARJO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 44,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 273,
                'type'          => 'KALURAHAN',
                'nama'          => 'NGARGOSARI',
                'kabkota_id'    => 3,
                'kapkem_id'     => 44,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 274,
                'type'          => 'KALURAHAN',
                'nama'          => 'PAGERHARJO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 44,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 275,
                'type'          => 'KALURAHAN',
                'nama'          => 'PURWOHARJO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 44,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 276,
                'type'          => 'KALURAHAN',
                'nama'          => 'SIDOHARJO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 44,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //10. KAB KULONPROGO KAPANEWON SENTOLO [45]
            [
                // 'id'            => 277,
                'type'          => 'KALURAHAN',
                'nama'          => 'BANGUNCIPTO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 45,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 278,
                'type'          => 'KALURAHAN',
                'nama'          => 'DEMANGREJO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 45,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 279,
                'type'          => 'KALURAHAN',
                'nama'          => 'KALIAGUNG',
                'kabkota_id'    => 3,
                'kapkem_id'     => 45,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 280,
                'type'          => 'KALURAHAN',
                'nama'          => 'SALAMREJO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 45,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 281,
                'type'          => 'KALURAHAN',
                'nama'          => 'SENTOLO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 45,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 282,
                'type'          => 'KALURAHAN',
                'nama'          => 'SRIKAYANGAN',
                'kabkota_id'    => 3,
                'kapkem_id'     => 45,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 283,
                'type'          => 'KALURAHAN',
                'nama'          => 'SUKORENO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 45,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 284,
                'type'          => 'KALURAHAN',
                'nama'          => 'TUKSONO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 45,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //11. KAB KULONPROGO KAPANEWON TEMON [46]
            [
                // 'id'            => 285,
                'type'          => 'KALURAHAN',
                'nama'          => 'DEMEN',
                'kabkota_id'    => 3,
                'kapkem_id'     => 46,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 286,
                'type'          => 'KALURAHAN',
                'nama'          => 'GLAGAH',
                'kabkota_id'    => 3,
                'kapkem_id'     => 46,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 287,
                'type'          => 'KALURAHAN',
                'nama'          => 'JANGKARAN',
                'kabkota_id'    => 3,
                'kapkem_id'     => 46,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 288,
                'type'          => 'KALURAHAN',
                'nama'          => 'JANTEN',
                'kabkota_id'    => 3,
                'kapkem_id'     => 46,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 289,
                'type'          => 'KALURAHAN',
                'nama'          => 'KALIDENGEN',
                'kabkota_id'    => 3,
                'kapkem_id'     => 46,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 290,
                'type'          => 'KALURAHAN',
                'nama'          => 'KALIGINTUNG',
                'kabkota_id'    => 3,
                'kapkem_id'     => 46,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 291,
                'type'          => 'KALURAHAN',
                'nama'          => 'KARANGWULUH',
                'kabkota_id'    => 3,
                'kapkem_id'     => 46,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 292,
                'type'          => 'KALURAHAN',
                'nama'          => 'KEBONREJO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 46,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 293,
                'type'          => 'KALURAHAN',
                'nama'          => 'KEDUNDANG',
                'kabkota_id'    => 3,
                'kapkem_id'     => 46,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 294,
                'type'          => 'KALURAHAN',
                'nama'          => 'KULUR',
                'kabkota_id'    => 3,
                'kapkem_id'     => 46,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 295,
                'type'          => 'KALURAHAN',
                'nama'          => 'PALIHAN',
                'kabkota_id'    => 3,
                'kapkem_id'     => 46,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 296,
                'type'          => 'KALURAHAN',
                'nama'          => 'PLUMBON',
                'kabkota_id'    => 3,
                'kapkem_id'     => 46,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 297,
                'type'          => 'KALURAHAN',
                'nama'          => 'SINDUTAN',
                'kabkota_id'    => 3,
                'kapkem_id'     => 46,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 298,
                'type'          => 'KALURAHAN',
                'nama'          => 'TEMONKULON',
                'kabkota_id'    => 3,
                'kapkem_id'     => 46,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 299,
                'type'          => 'KALURAHAN',
                'nama'          => 'TEMONWETAN',
                'kabkota_id'    => 3,
                'kapkem_id'     => 46,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //12. KAB KULONPROGO KAPANEWON WATES [47]
            [
                // 'id'            => 300,
                'type'          => 'KALURAHAN',
                'nama'          => 'BENDUNGAN',
                'kabkota_id'    => 3,
                'kapkem_id'     => 47,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 301,
                'type'          => 'KALURAHAN',
                'nama'          => 'GIRIPENI',
                'kabkota_id'    => 3,
                'kapkem_id'     => 47,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 302,
                'type'          => 'KALURAHAN',
                'nama'          => 'KALIWARU',
                'kabkota_id'    => 3,
                'kapkem_id'     => 47,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 303,
                'type'          => 'KALURAHAN',
                'nama'          => 'KARANGWUNI',
                'kabkota_id'    => 3,
                'kapkem_id'     => 47,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 304,
                'type'          => 'KALURAHAN',
                'nama'          => 'NGESTIHARJO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 47,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 305,
                'type'          => 'KALURAHAN',
                'nama'          => 'SOGAN',
                'kabkota_id'    => 3,
                'kapkem_id'     => 47,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 306,
                'type'          => 'KALURAHAN',
                'nama'          => 'TRIHARJO',
                'kabkota_id'    => 3,
                'kapkem_id'     => 47,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 307,
                'type'          => 'KELURAHAN',
                'nama'          => 'WATES',
                'kabkota_id'    => 3,
                'kapkem_id'     => 47,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            // ---------------------------------------------------------------------
            //1. KAB SLEMAN KAPANEWON BERBAH [48]
            [
                // 'id'            => 308,
                'type'          => 'KALURAHAN',
                'nama'          => 'JOGOTIRTO',
                'kabkota_id'    => 4,
                'kapkem_id'      => 48,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 309,
                'type'          => 'KALURAHAN',
                'nama'          => 'KALITIRTO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 48,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 310,
                'type'          => 'KALURAHAN',
                'nama'          => 'SENDANGTIRTO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 48,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 311,
                'type'          => 'KALURAHAN',
                'nama'          => 'TEGALTIRTO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 48,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //2. KAB SLEMAN KAPANEWON CANGKRINGAN [49]
            [
                // 'id'            => 312,
                'type'          => 'KALURAHAN',
                'nama'          => 'ARGOMULYO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 49,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 313,
                'type'          => 'KALURAHAN',
                'nama'          => 'GLAGAHARJO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 49,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 314,
                'type'          => 'KALURAHAN',
                'nama'          => 'KEPUHARJO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 49,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 315,
                'type'          => 'KALURAHAN',
                'nama'          => 'UMBULHARJO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 49,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 316,
                'type'          => 'KALURAHAN',
                'nama'          => 'WUKIRSARI',
                'kabkota_id'    => 4,
                'kapkem_id'     => 49,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //3. KAB SLEMAN KAPANEWON DEPOK [50]
            [
                // 'id'            => 317,
                'type'          => 'KALURAHAN',
                'nama'          => 'CATURTUNGGAL',
                'kabkota_id'    => 4,
                'kapkem_id'     => 50,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 318,
                'type'          => 'KALURAHAN',
                'nama'          => 'CONDONGCATUR',
                'kabkota_id'    => 4,
                'kapkem_id'     => 50,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 319,
                'type'          => 'KALURAHAN',
                'nama'          => 'MAGUWOHARJO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 50,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //4. KAB SLEMAN KAPANEWON GAMPING [51]
            [
                // 'id'            => 320,
                'type'          => 'KALURAHAN',
                'nama'          => 'AMBARKETAWANG',
                'kabkota_id'    => 4,
                'kapkem_id'     => 51,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 321,
                'type'          => 'KALURAHAN',
                'nama'          => 'BALECATUR',
                'kabkota_id'    => 4,
                'kapkem_id'     => 51,
                'created_at'    => now(),
                'updated_at'    => now()
            ],

            [
                // 'id'            => 322,
                'type'          => 'KALURAHAN',
                'nama'          => 'BANYURADEN',
                'kabkota_id'    => 4,
                'kapkem_id'     => 51,
                'created_at'    => now(),
                'updated_at'    => now()
            ],

            [
                // 'id'            => 323,
                'type'          => 'KALURAHAN',
                'nama'          => 'NOGOTIRTO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 51,
                'created_at'    => now(),
                'updated_at'    => now()
            ],

            [
                // 'id'            => 324,
                'type'          => 'KALURAHAN',
                'nama'          => 'TRIHANGGO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 51,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //5. KAB SLEMAN KAPANEWON GODEAN [52]
            [
                // 'id'            => 325,
                'type'          => 'KALURAHAN',
                'nama'          => 'SIDOAGUNG',
                'kabkota_id'    => 4,
                'kapkem_id'     => 52,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 326,
                'type'          => 'KALURAHAN',
                'nama'          => 'SIDOARUM',
                'kabkota_id'    => 4,
                'kapkem_id'     => 52,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 327,
                'type'          => 'KALURAHAN',
                'nama'          => 'SIDOKARTO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 52,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 328,
                'type'          => 'KALURAHAN',
                'nama'          => 'SIDOLUHUR',
                'kabkota_id'    => 4,
                'kapkem_id'     => 52,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 329,
                'type'          => 'KALURAHAN',
                'nama'          => 'SIDOMOYO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 52,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 330,
                'type'          => 'KALURAHAN',
                'nama'          => 'SIDOMULYO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 52,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 331,
                'type'          => 'KALURAHAN',
                'nama'          => 'SIDOREJO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 52,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //6. KAB SLEMAN KAPANEWON KALASAN [53]
            [
                // 'id'            => 332,
                'type'          => 'KALURAHAN',
                'nama'          => 'PURWOMARTANI',
                'kabkota_id'    => 4,
                'kapkem_id'     => 53,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 333,
                'type'          => 'KALURAHAN',
                'nama'          => 'SELOMARTANI',
                'kabkota_id'    => 4,
                'kapkem_id'     => 53,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 334,
                'type'          => 'KALURAHAN',
                'nama'          => 'TAMANMARTANI',
                'kabkota_id'    => 4,
                'kapkem_id'     => 53,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 335,
                'type'          => 'KALURAHAN',
                'nama'          => 'TIRTOMARTANI',
                'kabkota_id'    => 4,
                'kapkem_id'     => 53,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //7. KAB SLEMAN KAPANEWON MINGGIR [54]
            [
                // 'id'            => 336,
                'type'          => 'KALURAHAN',
                'nama'          => 'SENDANGAGUNG',
                'kabkota_id'    => 4,
                'kapkem_id'     => 54,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 337,
                'type'          => 'KALURAHAN',
                'nama'          => 'SENDANGARUM',
                'kabkota_id'    => 4,
                'kapkem_id'     => 54,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 338,
                'type'          => 'KALURAHAN',
                'nama'          => 'SENDANGMULYO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 54,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 339,
                'type'          => 'KALURAHAN',
                'nama'          => 'SENDANGREJO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 54,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 340,
                'type'          => 'KALURAHAN',
                'nama'          => 'SENDANGSARI',
                'kabkota_id'    => 4,
                'kapkem_id'     => 54,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //8. KAB SLEMAN KAPANEWON MLATI [55]
            [
                // 'id'            => 341,
                'type'          => 'KALURAHAN',
                'nama'          => 'SENDANGADI',
                'kabkota_id'    => 4,
                'kapkem_id'     => 55,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 342,
                'type'          => 'KALURAHAN',
                'nama'          => 'SINDUADI',
                'kabkota_id'    => 4,
                'kapkem_id'     => 55,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 343,
                'type'          => 'KALURAHAN',
                'nama'          => 'SUMBERADI',
                'kabkota_id'    => 4,
                'kapkem_id'     => 55,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 344,
                'type'          => 'KALURAHAN',
                'nama'          => 'TIRTOADI',
                'kabkota_id'    => 4,
                'kapkem_id'     => 55,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 345,
                'type'          => 'KALURAHAN',
                'nama'          => 'TLOGOADI',
                'kabkota_id'    => 4,
                'kapkem_id'     => 55,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //9. KAB SLEMAN KAPANEWON MOYUDAN [56]
            [
                // 'id'            => 346,
                'type'          => 'KALURAHAN',
                'nama'          => 'SUMBERSARI',
                'kabkota_id'    => 4,
                'kapkem_id'     => 56,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 347,
                'type'          => 'KALURAHAN',
                'nama'          => 'SUMBERAGUNG',
                'kabkota_id'    => 4,
                'kapkem_id'     => 56,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 348,
                'type'          => 'KALURAHAN',
                'nama'          => 'SUMBERARUM',
                'kabkota_id'    => 4,
                'kapkem_id'     => 56,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 349,
                'type'          => 'KALURAHAN',
                'nama'          => 'SUMBERRAHAYU',
                'kabkota_id'    => 4,
                'kapkem_id'     => 56,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //10. KAB SLEMAN KAPANEWON NGAGLIK [57]
            [
                // 'id'            => 350,
                'type'          => 'KALURAHAN',
                'nama'          => 'DONOHARJO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 57,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 351,
                'type'          => 'KALURAHAN',
                'nama'          => 'MINOMARTANI',
                'kabkota_id'    => 4,
                'kapkem_id'     => 57,
                'created_at'    => now(),
                'updated_at'    => now()
            ],

            [
                // 'id'            => 352,
                'type'          => 'KALURAHAN',
                'nama'          => 'SARDONOHARJO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 57,
                'created_at'    => now(),
                'updated_at'    => now()
            ],

            [
                // 'id'            => 353,
                'type'          => 'KALURAHAN',
                'nama'          => 'SARIHARJO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 57,
                'created_at'    => now(),
                'updated_at'    => now()
            ],

            [
                // 'id'            => 354,
                'type'          => 'KALURAHAN',
                'nama'          => 'SINDUHARJO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 57,
                'created_at'    => now(),
                'updated_at'    => now()
            ],

            [
                // 'id'            => 355,
                'type'          => 'KALURAHAN',
                'nama'          => 'SUKOHARJO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 57,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //11. KAB SLEMAN KAPANEWON NGEMPLAK [58]
            [
                // 'id'            => 356,
                'type'          => 'KALURAHAN',
                'nama'          => 'BIMOMARTANI',
                'kabkota_id'    => 4,
                'kapkem_id'     => 58,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 357,
                'type'          => 'KALURAHAN',
                'nama'          => 'SINDUMARTANI',
                'kabkota_id'    => 4,
                'kapkem_id'     => 58,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 358,
                'type'          => 'KALURAHAN',
                'nama'          => 'UMBULMARTANI',
                'kabkota_id'    => 4,
                'kapkem_id'     => 58,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 359,
                'type'          => 'KALURAHAN',
                'nama'          => 'WEDOMARTANI',
                'kabkota_id'    => 4,
                'kapkem_id'     => 58,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 360,
                'type'          => 'KALURAHAN',
                'nama'          => 'WIDODOMARTANI',
                'kabkota_id'    => 4,
                'kapkem_id'     => 58,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //12. KAB SLEMAN KAPANEWON PAKEM [59]
            [
                // 'id'            => 361,
                'type'          => 'KALURAHAN',
                'nama'          => 'CANDIBINANGUN',
                'kabkota_id'    => 4,
                'kapkem_id'     => 59,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 362,
                'type'          => 'KALURAHAN',
                'nama'          => 'HARGOBINANGUN',
                'kabkota_id'    => 4,
                'kapkem_id'     => 59,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 363,
                'type'          => 'KALURAHAN',
                'nama'          => 'HARJOBINANGUN',
                'kabkota_id'    => 4,
                'kapkem_id'     => 59,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 364,
                'type'          => 'KALURAHAN',
                'nama'          => 'PAKEMBINANGUN',
                'kabkota_id'    => 4,
                'kapkem_id'     => 59,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 365,
                'type'          => 'KALURAHAN',
                'nama'          => 'PURWOBINANGUN',
                'kabkota_id'    => 4,
                'kapkem_id'     => 59,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //13. KAB SLEMAN KAPANEWON PRAMBANAN [60]
            [
                // 'id'            => 366,
                'type'          => 'KALURAHAN',
                'nama'          => 'BOKOHARJO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 60,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 367,
                'type'          => 'KALURAHAN',
                'nama'          => 'GAYAMHARJO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 60,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 368,
                'type'          => 'KALURAHAN',
                'nama'          => 'MADUREJO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 60,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 369,
                'type'          => 'KALURAHAN',
                'nama'          => 'SAMBIREJO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 60,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 370,
                'type'          => 'KALURAHAN',
                'nama'          => 'SUMBERHARJO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 60,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 371,
                'type'          => 'KALURAHAN',
                'nama'          => 'WUKIRHARJO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 60,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //14. KAB SLEMAN KAPANEWON SEYEGAN [61]
            [
                // 'id'            => 372,
                'type'          => 'KALURAHAN',
                'nama'          => 'MARGOAGUNG',
                'kabkota_id'    => 4,
                'kapkem_id'     => 61,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 373,
                'type'          => 'KALURAHAN',
                'nama'          => 'MARGODADI',
                'kabkota_id'    => 4,
                'kapkem_id'     => 61,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 374,
                'type'          => 'KALURAHAN',
                'nama'          => 'MARGOKATON',
                'kabkota_id'    => 4,
                'kapkem_id'     => 61,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 375,
                'type'          => 'KALURAHAN',
                'nama'          => 'MARGOLUWIH',
                'kabkota_id'    => 4,
                'kapkem_id'     => 61,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 376,
                'type'          => 'KALURAHAN',
                'nama'          => 'MARGOMULYO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 61,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //15. KAB SLEMAN KAPANEWON SLEMAN [62]
            [
                // 'id'            => 377,
                'type'          => 'KALURAHAN',
                'nama'          => 'CATURHARJO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 62,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 378,
                'type'          => 'KALURAHAN',
                'nama'          => 'PANDOWOHARJO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 62,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 379,
                'type'          => 'KALURAHAN',
                'nama'          => 'TRIDADI',
                'kabkota_id'    => 4,
                'kapkem_id'     => 62,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 380,
                'type'          => 'KALURAHAN',
                'nama'          => 'TRIHARJO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 62,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 381,
                'type'          => 'KALURAHAN',
                'nama'          => 'TRIMULYO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 62,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //16. KAB SLEMAN KAPANEWON TEMPEL [63]
            [
                // 'id'            => 382,
                'type'          => 'KALURAHAN',
                'nama'          => 'BANYUREJO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 63,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 383,
                'type'          => 'KALURAHAN',
                'nama'          => 'LUMBUNGREJO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 63,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 384,
                'type'          => 'KALURAHAN',
                'nama'          => 'MARGOREJO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 63,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 385,
                'type'          => 'KALURAHAN',
                'nama'          => 'MERDIKOREJO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 63,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 386,
                'type'          => 'KALURAHAN',
                'nama'          => 'MOROREJO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 63,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 387,
                'type'          => 'KALURAHAN',
                'nama'          => 'PONDOKREJO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 63,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 388,
                'type'          => 'KALURAHAN',
                'nama'          => 'SUMBERREJO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 63,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 389,
                'type'          => 'KALURAHAN',
                'nama'          => 'TAMBAKREJO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 63,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //17. KAB SLEMAN KAPANEWON TURI [64]
            [
                // 'id'            => 390,
                'type'          => 'KALURAHAN',
                'nama'          => 'BANGUNKERTO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 64,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 391,
                'type'          => 'KALURAHAN',
                'nama'          => 'DONOKERTO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 64,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 392,
                'type'          => 'KALURAHAN',
                'nama'          => 'GIRIKERTO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 64,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 393,
                'type'          => 'KALURAHAN',
                'nama'          => 'WONOKERTO',
                'kabkota_id'    => 4,
                'kapkem_id'     => 64,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            // ---------------------------------------------------------------------
            //1. KOTA YOGYAKARTA KEMANTREN DANUREJAN [65]
            [
                // 'id'            => 394,
                'type'          => 'KELURAHAN',
                'nama'          => 'BAUSASRAN',
                'kabkota_id'    => 5,
                'kapkem_id'     => 65,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 395,
                'type'          => 'KELURAHAN',
                'nama'          => 'SURYATMAJAN',
                'kabkota_id'    => 5,
                'kapkem_id'     => 65,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 396,
                'type'          => 'KELURAHAN',
                'nama'          => 'TEGALPANGGUNG',
                'kabkota_id'    => 5,
                'kapkem_id'     => 65,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //2. KOTA YOGYAKARTA KEMANTREN GEDONGTENGEN [66]
            [
                // 'id'            => 397,
                'type'          => 'KELURAHAN',
                'nama'          => 'PRINGGOKUSUMAN',
                'kabkota_id'    => 5,
                'kapkem_id'     => 66,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 398,
                'type'          => 'KELURAHAN',
                'nama'          => 'SOSROMENDURAN',
                'kabkota_id'    => 5,
                'kapkem_id'     => 66,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //3. KOTA YOGYAKARTA KEMANTREN GONDOKUSUMAN [67]
            [
                // 'id'            => 399,
                'type'          => 'KELURAHAN',
                'nama'          => 'BACIRO',
                'kabkota_id'    => 5,
                'kapkem_id'     => 67,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 400,
                'type'          => 'KELURAHAN',
                'nama'          => 'DEMANGAN',
                'kabkota_id'    => 5,
                'kapkem_id'     => 67,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 401,
                'type'          => 'KELURAHAN',
                'nama'          => 'KLITREN',
                'kabkota_id'    => 5,
                'kapkem_id'     => 67,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 402,
                'type'          => 'KELURAHAN',
                'nama'          => 'KOTABARU',
                'kabkota_id'    => 5,
                'kapkem_id'     => 67,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 403,
                'type'          => 'KELURAHAN',
                'nama'          => 'TERBAN',
                'kabkota_id'    => 5,
                'kapkem_id'     => 67,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //4. KOTA YOGYAKARTA KEMANTREN GONDOMANAN [68]
            [
                // 'id'            => 404,
                'type'          => 'KELURAHAN',
                'nama'          => 'NGUPASAN',
                'kabkota_id'    => 5,
                'kapkem_id'     => 68,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 405,
                'type'          => 'KELURAHAN',
                'nama'          => 'PRAWIRODIRJAN',
                'kabkota_id'    => 5,
                'kapkem_id'     => 68,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //5. KOTA YOGYAKARTA KEMANTREN JETIS [69]
            [
                // 'id'            => 406,
                'type'          => 'KELURAHAN',
                'nama'          => 'BUMIJO',
                'kabkota_id'    => 5,
                'kapkem_id'     => 69,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 407,
                'type'          => 'KELURAHAN',
                'nama'          => 'COKRODININGRATAN',
                'kabkota_id'    => 5,
                'kapkem_id'     => 69,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 408,
                'type'          => 'KELURAHAN',
                'nama'          => 'GOWONGAN',
                'kabkota_id'    => 5,
                'kapkem_id'     => 69,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //6. KOTA YOGYAKARTA KEMANTREN KOTAGEDE [70]
            [
                // 'id'            => 409,
                'type'          => 'KELURAHAN',
                'nama'          => 'PRENGGAN',
                'kabkota_id'    => 5,
                'kapkem_id'     => 70,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 410,
                'type'          => 'KELURAHAN',
                'nama'          => 'PURBAYAN',
                'kabkota_id'    => 5,
                'kapkem_id'     => 70,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 411,
                'type'          => 'KELURAHAN',
                'nama'          => 'REJOWINANGUN',
                'kabkota_id'    => 5,
                'kapkem_id'     => 70,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //7. KOTA YOGYAKARTA KEMANTREN KRATON [71]
            [
                // 'id'            => 412,
                'type'          => 'KELURAHAN',
                'nama'          => 'KADIPATEN',
                'kabkota_id'    => 5,
                'kapkem_id'     => 71,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 413,
                'type'          => 'KELURAHAN',
                'nama'          => 'PANEMBAHAN',
                'kabkota_id'    => 5,
                'kapkem_id'     => 71,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 414,
                'type'          => 'KELURAHAN',
                'nama'          => 'PATEHAN',
                'kabkota_id'    => 5,
                'kapkem_id'     => 71,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //8. KOTA YOGYAKARTA KEMANTREN MANTRIJERON [72]
            [
                // 'id'            => 415,
                'type'          => 'KELURAHAN',
                'nama'          => 'GEDONGKIWO',
                'kabkota_id'    => 5,
                'kapkem_id'     => 72,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 416,
                'type'          => 'KELURAHAN',
                'nama'          => 'MANTRIJERON',
                'kabkota_id'    => 5,
                'kapkem_id'     => 72,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 417,
                'type'          => 'KELURAHAN',
                'nama'          => 'SURYODININGRATAN',
                'kabkota_id'    => 5,
                'kapkem_id'     => 72,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //9. KOTA YOGYAKARTA KEMANTREN MERGANGSAN [73]
            [
                // 'id'            => 418,
                'type'          => 'KELURAHAN',
                'nama'          => 'BRONTOKUSUMAN',
                'kabkota_id'    => 5,
                'kapkem_id'     => 73,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 419,
                'type'          => 'KELURAHAN',
                'nama'          => 'KEPARAKAN',
                'kabkota_id'    => 5,
                'kapkem_id'     => 73,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 420,
                'type'          => 'KELURAHAN',
                'nama'          => 'WIROGUNAN',
                'kabkota_id'    => 5,
                'kapkem_id'     => 73,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //10. KOTA YOGYAKARTA KEMANTREN NGAMPILAN [74]
            [
                // 'id'            => 421,
                'type'          => 'KELURAHAN',
                'nama'          => 'NGAMPILAN',
                'kabkota_id'    => 5,
                'kapkem_id'     => 74,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 422,
                'type'          => 'KELURAHAN',
                'nama'          => 'NOTOPRAJAN',
                'kabkota_id'    => 5,
                'kapkem_id'     => 74,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //11. KOTA YOGYAKARTA KEMANTREN PAKUALAMAN [75]
            [
                // 'id'            => 423,
                'type'          => 'KELURAHAN',
                'nama'          => 'GUNUNGKETUR',
                'kabkota_id'    => 5,
                'kapkem_id'     => 75,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 424,
                'type'          => 'KELURAHAN',
                'nama'          => 'PURWOKINANTI',
                'kabkota_id'    => 5,
                'kapkem_id'     => 75,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //12. KOTA YOGYAKARTA KEMANTREN TEGALREJO [76]
            [
                // 'id'            => 425,
                'type'          => 'KELURAHAN',
                'nama'          => 'BENER',
                'kabkota_id'    => 5,
                'kapkem_id'     => 76,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 426,
                'type'          => 'KELURAHAN',
                'nama'          => 'KARANGWARU',
                'kabkota_id'    => 5,
                'kapkem_id'     => 76,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 427,
                'type'          => 'KELURAHAN',
                'nama'          => 'KRICAK',
                'kabkota_id'    => 5,
                'kapkem_id'     => 76,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 428,
                'type'          => 'KELURAHAN',
                'nama'          => 'TEGALREJO',
                'kabkota_id'    => 5,
                'kapkem_id'     => 76,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //13. KOTA YOGYAKARTA KEMANTREN UMBULHARJO [77]
            [
                // 'id'            => 429,
                'type'          => 'KELURAHAN',
                'nama'          => 'GIWANGAN',
                'kabkota_id'    => 5,
                'kapkem_id'     => 77,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 430,
                'type'          => 'KELURAHAN',
                'nama'          => 'MUJAMUJU',
                'kabkota_id'    => 5,
                'kapkem_id'     => 77,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 431,
                'type'          => 'KELURAHAN',
                'nama'          => 'PANDEYAN',
                'kabkota_id'    => 5,
                'kapkem_id'     => 77,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 432,
                'type'          => 'KELURAHAN',
                'nama'          => 'SEMAKI',
                'kabkota_id'    => 5,
                'kapkem_id'     => 77,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 433,
                'type'          => 'KELURAHAN',
                'nama'          => 'SOROSUTAN',
                'kabkota_id'    => 5,
                'kapkem_id'     => 77,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 434,
                'type'          => 'KELURAHAN',
                'nama'          => 'TAHUNAN',
                'kabkota_id'    => 5,
                'kapkem_id'     => 77,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 435,
                'type'          => 'KELURAHAN',
                'nama'          => 'WARUNGBOTO',
                'kabkota_id'    => 5,
                'kapkem_id'     => 77,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            //14. KOTA YOGYAKARTA KEMANTREN WIROBRAJAN [78]
            [
                // 'id'            => 436,
                'type'          => 'KELURAHAN',
                'nama'          => 'PAKUNCEN',
                'kabkota_id'    => 5,
                'kapkem_id'     => 78,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 437,
                'type'          => 'KELURAHAN',
                'nama'          => 'PATANGPULUHAN',
                'kabkota_id'    => 5,
                'kapkem_id'     => 78,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
            [
                // 'id'            => 438,
                'type'          => 'KELURAHAN',
                'nama'          => 'WIROBRAJAN',
                'kabkota_id'    => 5,
                'kapkem_id'     => 78,
                'created_at'    => now(),
                'updated_at'    => now()
            ],
        ]);
    }
}
