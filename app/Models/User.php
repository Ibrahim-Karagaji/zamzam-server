<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    use HasApiTokens;

    protected $table = "users";

    protected $fillable = [
        'name',
        'last_name',
        'email',
        'password',
        'personal_photo',
        'identity_photo',
        'phone_number',
        'position',
        'phone_number',
        'aplicant',
        'status'
    ];

    protected $hidden = ["role", "password"];
}
