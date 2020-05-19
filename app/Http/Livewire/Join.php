<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Join extends Component
{
    public $username;
    public $pin;

    public function updated($field)
    {
        $this->validateOnly($field, [
            'username' => 'required|min:6',
            'pin' => 'required',
        ]);
    }

    public function join()
    {
        $validatedData = $this->validate([
            'username' => 'required',
            'pin' => 'required',
        ]);
    }

    public function render()
    {
        return view('livewire.join');
    }
}
