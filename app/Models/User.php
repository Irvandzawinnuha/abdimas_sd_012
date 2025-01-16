<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'gender',
        'is_active',
        'verification_token',
    ];

    /**
     * Get the identifier that will be stored in the JWT subject claim.
     *
     * @return mixed
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
/**
     * Get the identifier that will be stored in the JWT subject claim.
     *
     * @return mixed
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed', // Pastikan mendukung hashing password
    ];

    // Accessor untuk mendapatkan nama lengkap
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
