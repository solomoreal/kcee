<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourPackage extends Model
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
        return $this->hasMany(Booking::class, 'package_id');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class, 'package_id');
    }
}
