<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'email',
        'password',
        'staff_id',
        'name',
        'user_name',
        'first_name',
        'last_name',
        'phone_number',
        'photo',
    ];

    public function permissions()
    {
        return $this->hasMany(Permission::class, 'admin_id');
    }
}
