<?php

namespace App\Http\Livewire;

use App\Quiz;
use App\Participant;
use Livewire\Component;
use App\Events\QuizEvent;

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

        if($quiz = Quiz::where('pin', $this->pin)->first())
        {
            $participant = $quiz->participants()->create([
                'username' => $this->username
            ]);

            event(new QuizEvent());

            return redirect()->route('participant.game', $participant);
        }

        session()->flash('message', 'Invalid pin!');
    }

    public function render()
    {
        return view('livewire.join');
    }
}
