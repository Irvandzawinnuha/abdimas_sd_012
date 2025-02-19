<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    
    protected $table = 'berita_pengumuman';
    
    protected $fillable = [
        'judul',
        'deskripsi',
        'konten',
        'created_by',
        'tanggal',
        'tempat',
        'foto'
    ];

    protected $casts = [
        'foto' => 'array'
    ];
}
