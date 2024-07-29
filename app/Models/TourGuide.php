<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourGuide extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'location',
        'price',
        'features',
        'details',
        'image',
    ];

    public function bookings()
    {
        return $this->belongsToMany(Booking::class, 'booking_tour_guides', 'tour_guide_id', 'booking_id')
                    ->withPivot('attended_by', 'status')
                    ->withTimestamps();
    }
}
