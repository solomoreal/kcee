<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'package_id',
        'rating',
        'user_id',
    ];

    public function tourPackage()
    {
        return $this->belongsTo(TourPackage::class, 'package_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
