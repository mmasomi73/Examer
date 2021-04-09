<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{
    public $email = "aida.ir";
    public $password;
    public $rememberMe = false;

    public function render()
    {
        return view('livewire.auth.login');
    }
}
