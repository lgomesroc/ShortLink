<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'username',
        'array_password',
        'password_expiry',
    ];

    protected $casts = [
        'array_password' => 'array',
        'password_expiry' => 'array',
    ];
}
