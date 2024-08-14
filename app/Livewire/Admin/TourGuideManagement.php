<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\TourGuide;

class TourGuideManagement extends Component
{
    public $tourGuides;
    public
        $name,
        $type = 'Cultural',
        $location = 'Nigeria',
        $price = 0.00,
        $features,
        $details,
        $image;
    public $selected_id;

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'features' => 'nullable|string',
            'details' => 'nullable|string',
        ]);

        TourGuide::updateOrCreate(
            ['id' => $this->selected_id],
            [
                'name' => $this->name,
                'type' => $this->type,
                'location' => $this->location,
                'price' => $this->price,
                'features' => $this->features,
                'details' => $this->details,
            ]
        );

        $this->resetFields();
    }

    public function edit($id)
    {
        $tourGuide = TourGuide::findOrFail($id);
        $this->selected_id = $tourGuide->id;
        $this->name = $tourGuide->name;
        $this->type = $tourGuide->type;
        $this->location = $tourGuide->location;
        $this->price = $tourGuide->price;
        $this->features = $tourGuide->features;
        $this->details = $tourGuide->details;
    }

    public function delete($id)
    {
        TourGuide::findOrFail($id)->delete();
    }

    private function resetFields()
    {
        $this->name = '';
        $this->type = 'Cultural';
        $this->location = 'Nigeria';
        $this->price = 0.00;
        $this->features = '';
        $this->details = '';
        $this->selected_id = null;
    }

    public function render()
    {
        $this->tourGuides = TourGuide::all();
        return view('livewire.admin.tour-guide-management');
    }
}
