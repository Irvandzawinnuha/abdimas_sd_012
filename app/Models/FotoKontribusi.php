<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoKontribusi extends Model
{
    use HasFactory;

    protected $table = 'foto_kontribusi'; // Nama tabel di database
    protected $fillable = ['created_by', 'foto', 'created_at']; // Kolom-kolom yang bisa diisi
}
