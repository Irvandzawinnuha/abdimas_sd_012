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
        'foto_kontribusi', // Path foto kontribusi
        'CreatedBy',
        'created_at'
    ];
}
