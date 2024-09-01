<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourPackage;

class ProfileController extends Controller
{
    public function index(){
        $packages =  TourPackage::with('ratings')
        ->withAvg('ratings', 'rating')
        ->orderByDesc('ratings_avg_rating')
        ->take(10)
        ->get();
        return view('dashboard', compact('packages'));
    }
}
