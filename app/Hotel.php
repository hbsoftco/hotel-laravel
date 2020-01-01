<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'name',
        'address',
        'description',
        'star',
        'room_count',
        'img',
        'number_of_floors',
        'number_of_beds',
        'labi_capacity',
        'production_date',
        'parking',
        'restaurant',
        'free_wifi',
        'pool',
    ];
}
