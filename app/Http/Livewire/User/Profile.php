<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Profile extends Component
{
    public $name;

    public function update()
    {
        auth()->user()->update([
            'name'=>$this->name
        ]);
    }

    public function render()
    {
        return view('livewire.user.profile');
    }
}
