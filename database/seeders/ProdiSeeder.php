<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prodi = [
            ['id' => 1, 'nama' => 'Teknik Informatika', 'kode' => 'TI'],
            ['id' => 2, 'nama' => 'Sistem Informasi', 'kode' => 'SI'],
            ['id' => 3, 'nama' => 'Bisnis Digital', 'kode' => 'BD']
        ];

        foreach ($prodi as $p) {
            Prodi::updateOrCreate(['id' => $p['id']], $p);
        }
    }
}
