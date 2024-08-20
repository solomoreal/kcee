<?php

namespace App\Http\Controllers;
use App\Models\TourPackage;

class IndexController extends Controller
{
    public function index()
    {
        $packages = TourPackage::latest()->take(6)->get();
        return view('welcome', compact('packages'));
    }

    public function tourPackageDetails($id)
    {
        $package = TourPackage::findOrFail($id);
        return view('package-details', compact('package'));
    }

    public function bookingHistory()
    {
        return view('booking-history');
    }

    public function changePassword()
    {
        return view('change-password');
    }

}
