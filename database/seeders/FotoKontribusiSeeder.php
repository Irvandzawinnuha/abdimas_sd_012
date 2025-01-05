<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FotoKontribusi;

class FotoKontribusiSeeder extends Seeder
{
    public function run()
    {
        FotoKontribusi::create([
            'created_by' => 'Admin',
            'foto' => 'default.jpg', // Path foto default
        ]);
    }
}
