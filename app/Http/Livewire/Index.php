<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Index extends Component
{

    public function logout()
    {
        if (! auth()->guest()){
            auth()->logout();
        }
    }
    public function render()
    {
        return view('livewire.index');
    }
}
