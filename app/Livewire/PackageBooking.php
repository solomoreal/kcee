<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Booking;
use App\Models\TourGuide;
use App\Models\Rating;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class PackageBooking extends Component
{
    public $package;
    public $start_at;
    public $end_at;
    public $comment;
    public $selectedGuides = [];
    public $rating;

    public function mount($package)
    {
        $this->package = $package;
    }

    public function book()
    {
        $this->validate([
            'start_at' => 'required|date|after_or_equal:today',
            'end_at' => 'required|date|after:start_at',
            'selectedGuides' => 'required|array',
            'comment' => 'nullable|string',
        ]);

        $booking = Booking::create([
            'email' => Auth::user()->email,
            'package_id' => $this->package->id,
            'start_at' => Carbon::parse($this->start_at),
            'end_at' => Carbon::parse($this->end_at),
            'comment' => $this->comment,
            'status' => 'pending',
            'attended_by' => null,
        ]);

        $booking->tourGuides()->attach($this->selectedGuides);

        session()->flash('message', 'Your booking request has been submitted successfully.');
    }

    public function rate()
    {
        $this->validate([
            'rating' => 'required|integer|between:1,5',
        ]);

        Rating::create([
            'package_id' => $this->package->id,
            'user_id' => Auth::user()->id,
            'rating' => $this->rating,
        ]);

        session()->flash('message', 'Thank you for your rating!');
    }

    public function render()
    {
        $tourGuides = TourGuide::all();

        return view('livewire.package-booking', [
            'tourGuides' => $tourGuides,
        ]);
    }
}
