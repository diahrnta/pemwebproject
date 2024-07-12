<?php

namespace Database\Seeders;

use App\Models\RombonganBelajar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RombonganBelajarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rombel = [
            ['kode' => 'TI', 'thn_masuk' => 2020, 'dosen_pa' => 1234567890],
            ['kode' => 'SI', 'thn_masuk' => 2021, 'dosen_pa' => 2345678901],
            ['kode' => 'BD', 'thn_masuk' => 2022, 'dosen_pa' => 3456789012]
        ];

        foreach ($rombel as $r) {
            RombonganBelajar::updateOrCreate(['kode' => $r['kode']], $r);
        }
    }
}
