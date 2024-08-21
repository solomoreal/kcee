<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookingHistory extends Component
{
    public $bookings;

    public function mount()
    {
        // Retrieve the bookings for the authenticated user
        $this->bookings = Booking::with(['tourPackage'])
            ->where('email', Auth::user()->email)
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public function cancelBooking($bookingId)
    {
        // Cancel the booking by updating its status
        $booking = Booking::findOrFail($bookingId);
        $booking->update(['status' => 'Cancelled']);

        // Refresh the booking list
        $this->mount();
    }

    public function render()
    {
        return view('livewire.booking-history');
    }
}
