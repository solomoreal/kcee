<?php

namespace App\Livewire;

use App\Models\FlightBooking as Booking;
use App\Models\FlightDetail;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class FlightBooking extends Component
{
    public $flightDetailId;
    public $comment;

    public function bookFlight($flightDetailId)
    {
        Booking::create([
            'user_id' => Auth::id(),
            'flight_detail_id' => $flightDetailId,
            'status' => 'pending',
            'comment' => $this->comment,
        ]);

        session()->flash('message', 'Flight booked successfully!');
    }

    public function cancelFlight($flightDetailId)
    {
        Booking::where('user_id', Auth::id())->where('flight_detail_id', $flightDetailId)->delete();

        session()->flash('message', 'Flight cancelled successfully!');
    }

    public function render()
    {
        return view('livewire.flight-booking' , [
            'availableFlights' => FlightDetail::where('status', 'active')->get(),
        ]);
    }
}
