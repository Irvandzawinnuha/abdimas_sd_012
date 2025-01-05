<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru'; // Nama tabel
    protected $fillable = ['nama', 'nip', 'jabatan', 'foto']; // Kolom-kolom yang bisa diisi
}
