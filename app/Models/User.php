<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    use  HasApiTokens;
    protected $table = "users";

    protected $fillable = [
        'name',
        'family_name',
        'email',
        'password',
        'user_photo',
        'identity_photo',
        'phone_number',
        'position',
    ];

    protected $hidden = ["role", "password"];
}
