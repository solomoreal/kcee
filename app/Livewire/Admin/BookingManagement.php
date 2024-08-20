<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Booking;

class BookingManagement extends Component
{
    use WithPagination;

    public $perPage = 10;

    public function approve($bookingId)
    {
        $booking = Booking::find($bookingId);
        if ($booking) {
            $booking->status = 'approved';
            $booking->attended_by = auth()->guard('admin')->user()->id;
            $booking->save();

            session()->flash('message', 'Booking approved successfully.');
        }
    }

    public function decline($bookingId)
    {
        $booking = Booking::find($bookingId);
        if ($booking) {
            $booking->status = 'declined';
            $booking->attended_by = auth()->guard('admin')->user()->id;
            $booking->save();

            session()->flash('message', 'Booking declined successfully.');
        }
    }

    public function render()
    {
        $bookings = Booking::with(['tourGuides'])
        ->paginate($this->perPage);

        return view('livewire.admin.booking-management', [
            'bookings' => $bookings,
        ]);
    }

}
