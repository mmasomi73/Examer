<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Profile extends Component
{
    public $name;
    public $username;
    public $about;
    public $avatar;

    public function mount()
    {
        $this->name = auth()->user()->name;
        $this->about = auth()->user()->about;
        $this->username = auth()->user()->username;
    }

    public function update()
    {
        $this->validate([
            'name'=>"required|max:40",
            'username'=>"required|max:30",
            'about'=>"required|max:140"
        ]);

        auth()->user()->update([
            'name'=>$this->name,
            'username'=>$this->username,
            'about'=>$this->about
        ]);
    }

    public function render()
    {
        return view('livewire.user.profile');
    }
}
