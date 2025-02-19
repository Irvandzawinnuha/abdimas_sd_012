<?php

namespace Database\Seeders;

use App\Models\Extracurricular;
use Illuminate\Database\Seeder;

class ExtracurricularSeeder extends Seeder
{
    public function run()
    {
        $ekstrakurikuler = [
            'Pramuka' => 6,
            'Paskibraka' => 3,
            'Sepak Bola' => 3,
            'Rohis' => 3,
            'Marching Band' => 3
        ];

        foreach ($ekstrakurikuler as $nama => $jumlahFoto) {
            for ($i = 1; $i <= $jumlahFoto; $i++) {
                Extracurricular::create([
                    'nama_kegiatan' => $nama,
                    'CreatedBy' => 'Admin',
                    'foto_kontribusi' => ["ekstrakurikuler/" . strtolower(str_replace(' ', '-', $nama)) . "/{$i}.png"]
                ]);
            }
        }
    }
} 