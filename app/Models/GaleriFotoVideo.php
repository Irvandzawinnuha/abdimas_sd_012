<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriFotoVideo extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori',
        'created_by',
        'foto'
    ];

    protected $casts = [
        'foto' => 'array'
    ];
}