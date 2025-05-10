<?php

namespace Database\Seeders;

use App\Models\Padkam;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'nama' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(UserSeeder::class);
        $this->call(KabkotaSeeder::class);
        $this->call(KapkemSeeder::class);
        $this->call(KalkelSeeder::class);
        $this->call(PadkamSeeder::class);
        $this->call(AgamaSeeder::class);
        $this->call(JabatanSeeder::class);
        $this->call(PemkratonSeeder::class);
    }
}
