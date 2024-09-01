<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\TourPackage as Package;
use Livewire\WithFileUploads;

class TourPackage extends Component
{
    use WithFileUploads;

    public $name, $type, $location, $price, $features, $details, $image;
    public $editMode = false;
    public $selectedPackage;

    public function createPackage()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'price' => 'required|numeric',
            'features' => 'nullable|string',
            'details' => 'nullable|string',
            'image' => 'required|image', // Image validation
        ]);

        $imagePath = $this->image->store('tour-images', 'public'); // Store the image

        Package::create([
            'name' => $this->name,
            'type' => $this->type,
            'location' => $this->location,
            'price' => $this->price,
            'features' => $this->features,
            'details' => $this->details,
            'image' => $imagePath, // Save the image path
        ]);

        session()->flash('message', 'Tour package created successfully.');

        $this->resetInputFields();
    }

    public function editPackage($id)
    {
        $package = Package::findOrFail($id);

        $this->selectedPackage = $package;
        $this->name = $package->name;
        $this->type = $package->type;
        $this->location = $package->location;
        $this->price = $package->price;
        $this->features = $package->features;
        $this->details = $package->details;
        $this->image = null; // Reset the image input
        $this->editMode = true;
    }

    public function updatePackage()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'price' => 'required|numeric',
            'features' => 'nullable|string',
            'details' => 'nullable|string',
            'image' => 'nullable|image|max:1024', // Image validation
        ]);

        $package = $this->selectedPackage;

        if ($this->image) {
            $imagePath = $this->image->store('tour-images', 'public');
            $package->image = $imagePath;
        }

        $package->update([
            'name' => $this->name,
            'type' => $this->type,
            'location' => $this->location,
            'price' => $this->price,
            'features' => $this->features,
            'details' => $this->details,
        ]);

        session()->flash('message', 'Tour package updated successfully.');

        $this->resetInputFields();
        $this->editMode = false;
    }

    public function deletePackage($id)
    {
        $package = Package::findOrFail($id);
        $package->delete();

        session()->flash('message', 'Tour package deleted successfully.');
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->type = '';
        $this->location = '';
        $this->price = '';
        $this->features = '';
        $this->details = '';
        $this->image = null;
        $this->editMode = false;
    }

    public function render()
    {
        return view('livewire.admin.tour-package', [
            'packages' => Package::all(),
        ]);
    }


}
