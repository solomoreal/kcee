<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'reg_number',
        'name',
        'email',
        'country',
        'phone_number',
        'address',
        'logo',
        'status',
        'developer',
    ];
}
