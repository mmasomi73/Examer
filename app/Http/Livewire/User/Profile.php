<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Profile extends Component
{
    public $name;
    public $username;
    public $about;
    public $birthday;
    public $avatar;

    public function mount()
    {
        $this->name = auth()->user()->name;
        $this->about = auth()->user()->about;
        $this->username = auth()->user()->username;
        $this->birthday = optional(auth()->user()->birthday)->format("Y/m/d");
    }

    public function update()
    {
        $this->validate([
            'name'=>"required|max:40",
            'username'=>"required|max:30",
            'about'=>"required|max:140",
            'birthday'=>"sometimes"
        ]);


        auth()->user()->update([
            'name'=>$this->name,
            'username'=>$this->username,
            'birthday'=>$this->birthday,
            'about'=>$this->about
        ]);
        dd(auth()->user()->about);
    }

    public function render()
    {
        return view('livewire.user.profile');
    }
}
