<?php

namespace App\Livewire\Admin;

use App\Models\Admin;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    public $email;
    public $password;
    public $staff_id;
    public $name;
    public $user_name;
    public $first_name;
    public $last_name;
    public $phone_number;
    public $photo;

    protected $rules = [
        'email' => 'required|email|unique:admins,email',
        'password' => 'required|min:6',
        'staff_id' => 'required|unique:admins,staff_id',
        'name' => 'required',
        'user_name' => 'required|unique:admins,user_name',
        'first_name' => 'required',
        'last_name' => 'required',
        'phone_number' => 'required|unique:admins,phone_number',
        'photo' => 'nullable|image|max:1024',
    ];

    public function register()
    {
        $this->validate();

        $admin = Admin::create([
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'staff_id' => $this->staff_id,
            'name' => $this->name,
            'user_name' => $this->user_name,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'phone_number' => $this->phone_number,
            'photo' => $this->photo ? $this->photo->store('photos', 'public') : null,
        ]);


        session()->flash('message', 'Admin registered successfully!');
        return redirect()->route('admin.permissions');
    }

    public function render()
    {
        return view('livewire.admin.register');
    }
}
