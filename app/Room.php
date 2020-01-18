<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'hotel_id',
        'bed_count',
        'price',
        'mize_tahrir',
        'abajur',
        'chayisaz',
        'ab_reyegan',
        'rakht_aviz',
        'room_service',
        'sobhane',
        'yakhchal',
        'mobleman',
        'komod_lebas',
        'telefon',
        'tv',
        'sandoq_amanat',
        'system_elam_hariq',
        'system_tahvie',
        'wifi',
        'hamam',
        'lavazem_behdashti',
        'dampayi',
        'wc_faranfi',
    ];


    public function hotel()
    {
        return $this->belongsTo('App\Hotel');
    }
}
