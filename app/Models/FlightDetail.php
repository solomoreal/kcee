<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'flight_number',
        'departure',
        'destination',
        'departure_time',
        'arrival_time',
        'price',
        'seat_class',
        'status',
    ];

    public function flightBookings()
    {
        return $this->hasMany(FlightBooking::class, 'flight_detail_id');
    }
}
