<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Guru;

class GuruSeeder extends Seeder
{
    public function run()
    {
        Guru::create([
            'nama' => 'Ahmad Fauzi',
            'nip' => '123456789',
            'jabatan' => 'Guru Matematika',
            'foto' => 'default.jpg', // Pastikan ada file default di storage
        ]);
    }
}
