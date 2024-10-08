<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'package_id',
        'start_at',
        'end_at',
        'comment',
        'status',
        'attended_by',
    ];

    protected $casts = [
        'start_at' => 'datetime',
        'end_at' => 'datetime',
    ];

    public function tourGuides()
    {
        return $this->belongsToMany(TourGuide::class, 'booking_tour_guides', 'booking_id', 'tour_guide_id')
                    ->withPivot('attended_by', 'status')
                    ->withTimestamps();
    }

    public function tourPackage()
    {
        return $this->belongsTo(TourPackage::class, 'package_id');
    }
}
