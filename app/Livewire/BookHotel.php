<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\HotelDetail;
use App\Models\HotelBooking;
use Illuminate\Support\Facades\Auth;

class BookHotel extends Component
{
    public $hotel;
    public $comment;

    public function mount(HotelDetail $hotel)
    {
        $this->hotel = $hotel;
    }

    public function book()
    {
        $this->validate([
            'comment' => 'nullable|string|max:500',
        ]);

        HotelBooking::create([
            'user_id' => Auth::id(),
            'hotel_detail_id' => $this->hotel->id,
            'comment' => $this->comment,
            'status' => 'pending',
            'attended_by' => null,
        ]);
        $hotel = $this->hotel;
        $hotel->status = 'booked';
        $hotel->save();
        
        session()->flash('message', 'Hotel booked successfully!');

        return redirect()->route('hotels');
    }

    public function render()
    {
        return view('livewire.book-hotel');
    }
}
