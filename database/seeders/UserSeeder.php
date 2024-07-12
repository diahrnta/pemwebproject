<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 2 default users with each roles, but if exists update
        $users = [
            [
                'name' => 'Dosen',
                'email' => 'dosen@gmail.com',
                'role' => 'dosen',
                'password' => bcrypt('dosen'),
            ],
            [
                'name' => 'Mahasiswa',
                'email' => 'mahasiswa@gmail.com',
                'role' => 'mahasiswa',
                'password' => bcrypt('mahasiswa'),
            ],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['email' => $user['email']],
                $user
            );
        }
    }
}