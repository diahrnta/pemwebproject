<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dosen = [
            ['nidn' => 1234567890, 'nama' => 'Pak Rojul', 'tmp_lahir' => 'Bandung', 'tgl_lahir' => '1980-01-01', 'jk' => 'L', 'prodi_id' => 1],
            ['nidn' => 2345678901, 'nama' => 'Pak Munir', 'tmp_lahir' => 'Jakarta', 'tgl_lahir' => '1985-01-01', 'jk' => 'L', 'prodi_id' => 2],
            ['nidn' => 3456789012, 'nama' => 'Pak Nasrul', 'tmp_lahir' => 'Surabaya', 'tgl_lahir' => '1990-01-01', 'jk' => 'L', 'prodi_id' => 3]
        ];

        foreach ($dosen as $d) {
            Dosen::updateOrCreate(['nidn' => $d['nidn']], $d);
        }
    }
}
