<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'description',
        'price_per_night',
        'status',
        'image',
    ];

    public function hotelBookings()
    {
        return $this->hasMany(HotelBooking::class, 'hotel_detail_id');
    }
}
