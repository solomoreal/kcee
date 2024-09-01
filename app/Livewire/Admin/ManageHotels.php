<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\HotelDetail;

class ManageHotels extends Component
{
    use WithFileUploads;

    public $hotels, $name, $location, $description, $price_per_night, $status, $hotelId, $image;
    public $updateMode = false;

    public function resetInputFields()
    {
        $this->name = '';
        $this->location = '';
        $this->description = '';
        $this->price_per_night = '';
        $this->status = '';
        $this->image = null;
    }

    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'location' => 'required',
            'description' => 'required',
            'price_per_night' => 'required|numeric',
            'status' => 'required',
            'image' => 'required|image',
        ]);

        $imagePath = $this->image->store('hotel-images', 'public');

        HotelDetail::create([
            'name' => $this->name,
            'location' => $this->location,
            'description' => $this->description,
            'price_per_night' => $this->price_per_night,
            'status' => $this->status,
            'image' => $imagePath,
        ]);

        session()->flash('message', 'Hotel Created Successfully.');
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $hotel = HotelDetail::findOrFail($id);
        $this->hotelId = $id;
        $this->name = $hotel->name;
        $this->location = $hotel->location;
        $this->description = $hotel->description;
        $this->price_per_night = $hotel->price_per_night;
        $this->status = $hotel->status;
        $this->image = $hotel->image;

        $this->updateMode = true;
    }

    public function update()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'location' => 'required',
            'description' => 'required',
            'price_per_night' => 'required|numeric',
            'status' => 'required',
            'image' => 'nullable',
        ]);

        $hotel = HotelDetail::find($this->hotelId);

        if ($this->image && is_object($this->image)) {
            $imagePath = $this->image->store('hotel-images', 'public');
            $hotel->update(['image' => $imagePath]);
        }

        $hotel->update(array_merge($validatedData, ['image' => $hotel->image]));

        $this->updateMode = false;
        session()->flash('message', 'Hotel Updated Successfully.');
        $this->resetInputFields();
    }

    public function delete($id)
    {
        $hotel = HotelDetail::find($id);
        if ($hotel->image) {
            \Storage::disk('public')->delete($hotel->image);
        }
        $hotel->delete();
        session()->flash('message', 'Hotel Deleted Successfully.');
    }

    public function render()
    {
        $this->hotels = HotelDetail::all();
        return view('livewire.admin.manage-hotels');
    }
}
