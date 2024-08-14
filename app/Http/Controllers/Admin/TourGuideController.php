<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TourGuideController extends Controller
{
    public function manage(){
        return view('admin.tour-guide-management');
    }

    public function package(){
        return view('admin.tour-package');
    }

    public function bookings(){
        return view('admin.booking');
    }
}
