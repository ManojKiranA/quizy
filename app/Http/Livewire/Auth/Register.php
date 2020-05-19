<?php

namespace App\Http\Livewire\Auth;

use App\User;
use Livewire\Component;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'password_confirmation' => 'required',
        ]);
    }

    public function register()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required',
        ]);

        User::create($validatedData);

        auth()->attempt($validatedData);

        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
