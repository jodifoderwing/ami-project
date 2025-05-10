<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('agamas')->insert([
            [
                'nama' => 'Islam',
            ],
            [
                'nama' => 'Kristen',
            ],
            [
                'nama' => 'Katolik',
            ],
            [
                'nama' => 'Budha',
            ],
            [
                'nama' => 'Hindu',
            ],
            [
                'nama' => 'Khonghucu',
            ],
        ]);
    }
}
