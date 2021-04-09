<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $passwordConfirmation = false;

    public function register()
    {
        $validated_data = $this->validate([
            'name'=>"required|min:2",
            'email'=>"required|email|unique:users",
            'password'=>"required|min:6|same:passwordConfirmation"
        ]);
        $user = User::create([
            'name'=>$validated_data['name'],
            'email'=>$validated_data['email'],
            'password'=>bcrypt($validated_data['password'])
        ]);

        auth()->login($user);
        return redirect(route('home'));

    }
    public function render()
    {
        return view('livewire.auth.register');
    }
}
