<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriFotoVideo extends Model
{
    use HasFactory;

    protected $fillable = [
        'created_by',
        'created_at',
        'foto',
    ];
}