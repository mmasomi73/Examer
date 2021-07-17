<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public $rememberMe = false;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|string',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function login()
    {
        $this->validate();
        return auth()->attempt($this->validate()) ?
                redirect()->intended(route('dashboard')) :
                $this->addError("email", trans('auth.failed'));

    }


    public function render()
    {
        return view('livewire.auth.login');
    }
}
