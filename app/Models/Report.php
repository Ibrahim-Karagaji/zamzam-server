<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Report extends Model {
    use HasApiTokens;
    protected $table = "reports";

    protected $fillable = [
        'report',
        'date',
    ];
    protected $hidden = ['user_id'];

}