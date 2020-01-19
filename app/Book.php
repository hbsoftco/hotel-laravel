<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'hotel_id',
        'room_id',
        'price'
    ];
}
