<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@ami.id',
                'role' => 'ADMIN',
                'password' => Hash::make('admin123')
            ],
            [
                'name' => 'Operator',
                'email' => 'operator@ami.id',
                'role' => 'OPERATOR',
                'password' => Hash::make('operator123')
            ],
        ]);
    }
}
