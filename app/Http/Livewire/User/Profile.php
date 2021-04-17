<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use withFileUploads;

    public $name;
    public $username;
    public $about;
    public $birthday;
    public $avatar;
    public $cover;

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
            'avatar'=>"nullable|image|max:2048",
            'cover'=>"nullable|image|max:2048",
            'birthday'=>"sometimes|date|before:today"
        ]);

        $filename = auth()->user()->avatar;
        if (! empty($this->avatar))
            $filename = $this->avatar->store('/', 'avatars');

        $cover = auth()->user()->cover;
        if (! empty($this->cover))
            $cover = $this->cover->store('/', 'covers');


        auth()->user()->update([
            'name'=>$this->name,
            'username'=>$this->username,
            'birthday'=>$this->birthday,
            'avatar'=>$filename,
            'cover'=>$cover,
            'about'=>$this->about
        ]);


    }

    public function render()
    {
        return view('livewire.user.profile');
    }
}
