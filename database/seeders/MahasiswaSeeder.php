<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mahasiswa = [
            ['nim' => '1234567890', 'nama' => 'Budi', 'tmp_lahir' => 'Bandung', 'tgl_lahir' => '2000-01-01', 'ipk' => 3.8, 'prodi_id' => 1, 'rombel_id' => 1],
            ['nim' => '2345678901', 'nama' => 'Ani', 'tmp_lahir' => 'Jakarta', 'tgl_lahir' => '2001-01-01', 'ipk' => 3.6, 'prodi_id' => 2, 'rombel_id' => 2],
            ['nim' => '3456789012', 'nama' => 'Cici', 'tmp_lahir' => 'Surabaya', 'tgl_lahir' => '2002-01-01', 'ipk' => 3.7, 'prodi_id' => 3, 'rombel_id' => 3]
        ];

        foreach ($mahasiswa as $m) {
            Mahasiswa::updateOrCreate(['nim' => $m['nim']], $m);
        }
    }
}
