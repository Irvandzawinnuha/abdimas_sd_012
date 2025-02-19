<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extracurricular extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'kegiatan_ekstrakurikuler';

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'nama_kegiatan',
        'CreatedBy',
        'foto_kontribusi'
    ];

    protected $casts = [
        'foto_kontribusi' => 'array'
    ];
}
