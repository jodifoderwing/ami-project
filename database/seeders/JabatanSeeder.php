<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jabatans')->insert([
            [
                'nama' => 'Direktur',
            ],
            [
                'nama' => 'Manajer HRD',
            ],
            [
                'nama' => 'Manajer Produksi',
            ],
            [
                'nama' => 'Manajer Penjualan',
            ],
            [
                'nama' => 'Manajer Pemasaran',
            ],
            [
                'nama' => 'Staf Administrasi',
            ],
            [
                'nama' => 'Staf Teknis',
            ],
            [
                'nama' => 'Staf Sekuriti',
            ],
            [
                'nama' => 'Tenaga Lapangan',
            ],
            [
                'nama' => 'Tenaga Bantu',
            ],
        ]);
    }
}
