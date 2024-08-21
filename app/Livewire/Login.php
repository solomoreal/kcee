<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;

class Login extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login()
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        return $this->redirectIntended(default: route('dashboard', absolute: false));
    }

    public function render()
    {
        return view('livewire.login');
    }
}
