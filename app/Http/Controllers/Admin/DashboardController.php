<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\Booking;
use App\Models\TourPackage;

class DashboardController extends Controller
{
    public function index(){
        $data['admins'] = Admin::count();
        $data['users'] = User::count();
        $data['bookings'] = Booking::count();
        $data['packages'] = TourPackage::count();

        return view('admin.dashboard')->with($data);
    }

    public function permissions(){
        return view('admin.permissions');
    }

    public function manageUsers()
    {
        return view('admin.manage-users');
    }

    public function addAdmin(){
        return view('admin.add');
    }
}
