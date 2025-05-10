<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PemkratonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pemkratons')->insert([
            [
                'nama' => 'Unit Human Resource',
            ],
            [
                'nama' => 'Unit Pemasaran',
            ],
            [
                'nama' => 'Unit Produksi',
            ],
            [
                'nama' => 'Unit Penjualan',
            ],
        ]);
    }
}
