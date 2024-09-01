<?php

namespace App\Http\Controllers;
use App\Models\TourPackage;
use App\Models\HotelDetail;

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

    public function flights()
    {
        return view('flights');
    }

    public function hotels()
    {
        $hotels = HotelDetail::where('status', 'available')->get();
        return view('hotels', compact('hotels'));
    }

    public function hoteldetails($id)
    {
        $hotel = HotelDetail::findOrFail($id);
        return view('hotel-details', compact('hotel'));
    }

}
