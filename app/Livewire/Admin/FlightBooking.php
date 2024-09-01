<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\FlightBooking as Booking;

class FlightBooking extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function approve($id)
    {
        $booking = Booking::find($id);
        if ($booking) {
            $booking->status = 'approved';
            $booking->save();
            session()->flash('message', 'Flight booking approved successfully.');
        }
    }

    public function decline($id)
    {
        $booking = Booking::find($id);
        if ($booking) {
            $booking->status = 'declined';
            $booking->save();
            session()->flash('message', 'Flight booking declined.');
        }
    }

    public function render()
    {
        $flight_bookings = Booking::with(['user', 'flightDetail'])->paginate(10);

        return view('livewire.admin.flight-booking', [
            'flight_bookings' => $flight_bookings,
        ]);
    }
}
