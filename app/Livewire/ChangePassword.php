<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ChangePassword extends Component
{
    public $password;
    public $newpassword;
    public $confirmpassword;

    public function updated($field)
    {
        $this->validateOnly($field, [
            'password' => 'required',
            'newpassword' => 'required|min:8',
            'confirmpassword' => 'required|same:newpassword',
        ]);
    }

    public function changePassword()
    {
        $this->validate([
            'password' => 'required',
            'newpassword' => 'required|min:8',
            'confirmpassword' => 'required|same:newpassword',
        ]);

        $user = Auth::user();

        if (!Hash::check($this->password, $user->password)) {
            session()->flash('error', 'Current password is incorrect.');
            return;
        }

        $user->update(['password' => Hash::make($this->newpassword)]);

        session()->flash('success', 'Password successfully changed.');
    }

    public function render()
    {
        return view('livewire.change-password');
    }
}
