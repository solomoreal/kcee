<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\FlightDetail;
use Livewire\WithPagination;

class FlightDetails extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $flight_number, $departure, $destination, $departure_time, $arrival_time, $price, $seat_class;
    public $editing = false;
    public $flightId;

    protected $rules = [
        'flight_number' => 'required|string',
        'departure' => 'required|string',
        'destination' => 'required|string',
        'departure_time' => 'required|date',
        'arrival_time' => 'required|date',
        'price' => 'required|numeric',
        'seat_class' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();

        FlightDetail::create([
            'flight_number' => $this->flight_number,
            'departure' => $this->departure,
            'destination' => $this->destination,
            'departure_time' => $this->departure_time,
            'arrival_time' => $this->arrival_time,
            'price' => $this->price,
            'seat_class' => $this->seat_class,
        ]);

        $this->resetForm();

        session()->flash('message', 'Flight details added successfully!');
    }

    public function editFlight($id)
    {
        $flight = FlightDetail::findOrFail($id);

        $this->flightId = $flight->id;
        $this->flight_number = $flight->flight_number;
        $this->departure = $flight->departure;
        $this->destination = $flight->destination;
        $this->departure_time = $flight->departure_time;
        $this->arrival_time = $flight->arrival_time;
        $this->price = $flight->price;
        $this->seat_class = $flight->seat_class;

        $this->editing = true;
    }

    public function updateFlight()
    {
        $this->validate();

        $flight = FlightDetail::findOrFail($this->flightId);

        $flight->update([
            'flight_number' => $this->flight_number,
            'departure' => $this->departure,
            'destination' => $this->destination,
            'departure_time' => $this->departure_time,
            'arrival_time' => $this->arrival_time,
            'price' => $this->price,
            'seat_class' => $this->seat_class,
        ]);

        $this->resetForm();

        session()->flash('message', 'Flight details updated successfully!');
    }

    public function deleteFlight($id)
    {
        FlightDetail::findOrFail($id)->delete();

        session()->flash('message', 'Flight deleted successfully!');
    }

    public function resetForm()
    {
        $this->flight_number = '';
        $this->departure = '';
        $this->destination = '';
        $this->departure_time = '';
        $this->arrival_time = '';
        $this->price = '';
        $this->seat_class = '';
        $this->editing = false;
    }

    public function render()
    {
        $flights = FlightDetail::paginate(10);
        return view('livewire.admin.flight-details', compact('flights'));
    }
}
