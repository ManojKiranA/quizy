<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    public function updated($field)
    {
        $this->validateOnly($field, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
    }

    public function login()
    {
        $validatedData = $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth()->attempt($validatedData, true))
        {
            return redirect()->route('home');
        }

        session()->flash('message', 'Invalid email or password!');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
