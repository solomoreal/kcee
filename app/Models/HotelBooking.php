<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelBooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'hotel_detail_id',
        'status', // Booked, Cancelled, etc.
        'comment',
        'attended_by',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function hotelDetail()
    {
        return $this->belongsTo(HotelDetail::class, 'hotel_detail_id');
    }
}
