<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Hotel extends Model {
    use HasApiTokens;
    
    protected $tabel = "hotels";

    protected $fillable = [
        'name',
        'email',
        'location',
        'phone number',
        'number_of_pilgrims',
        'contract_durtion',
        'order status',
        'note',
    ];

}

