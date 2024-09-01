<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\HotelBooking as Booking;

class HotelBooking extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function approve($id)
    {
        $booking = Booking::find($id);
        if ($booking) {
            $booking->status = 'approved';
            $booking->save();
            session()->flash('message', 'Hotel booking approved successfully.');
        }
    }

    public function decline($id)
    {
        $booking = Booking::find($id);
        if ($booking) {
            $booking->status = 'declined';
            $booking->save();
            session()->flash('message', 'Hotel booking declined.');
        }
    }

    public function render()
    {
        $hotel_bookings = Booking::with(['user', 'flightDetail'])->paginate(10);

        return view('livewire.admin.hotel-booking', [
            'hotel_bookings' => $hotel_bookings,
        ]);
    }

}
