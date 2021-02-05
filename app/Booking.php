<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'booking_no', 'client_id','hotel_id','checkin_date','checkout_date','adult','children','price','status',
    ];
}
