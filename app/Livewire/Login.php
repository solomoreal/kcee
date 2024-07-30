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
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
    
    public function render()
    {
        return view('livewire.login');
    }
}
