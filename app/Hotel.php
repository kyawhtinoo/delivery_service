<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'name', 'photo','address','single_room_price','double_room_price','triple_room_price','city_id',
    ];
}
