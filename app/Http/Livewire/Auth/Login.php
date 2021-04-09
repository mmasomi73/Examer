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
        'email' => 'required|string|exists:users',
        'password' => 'required|string',
    ];

    public function login()
    {
        $this->validate();
        $user = User::where('email',$this->email)->first();
        if (!empty($user)){
            if (Hash::check($this->password, $user->password)) {
                auth()->login($user);
               return redirect(route('dashboard'));
            }
        }
        $this->addError('email', 'email or password incorrect!');
    }


    public function render()
    {
        return view('livewire.auth.login');
    }
}
