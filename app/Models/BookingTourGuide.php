<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingTourGuide extends Model
{
    use HasFactory;

    protected $fillable = [
        'tour_guide_id',
        'booking_id',
        'attended_by',
        'status',
    ];
}
