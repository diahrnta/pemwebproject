<?php

namespace Database\Seeders;

use App\Models\JenisKendaraan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisKendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jenis_kendaraan = [
            ['nama' => 'SUV'],
            ['nama' => 'Sedan'],
            ['nama' => 'MPV'],
            ['nama' => 'Hatchback'],
            ['nama' => 'Coupe'],
            ['nama' => 'Convertible'],
            ['nama' => 'Sport'],
            ['nama' => 'Jeep'],
            ['nama' => 'Pickup'],
            ['nama' => 'Truck'],
            ['nama' => 'Van']
        ];
        
        foreach ($jenis_kendaraan as $jenis) {
            JenisKendaraan::updateOrCreate(['nama' => $jenis['nama']], $jenis);
        }
    }
}
