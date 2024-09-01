<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightBooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status',
        'flight_detail_id',
        'comment',
        'attended_by'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function flightDetail()
    {
        return $this->belongsTo(FlightDetail::class, 'flight_detail_id');
    }
}
