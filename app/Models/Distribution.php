<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Distribution extends Model {

    protected $fillable = [
    'qyt',
    'user_id',
    'hotel_id',
    'date',
    ];

}
