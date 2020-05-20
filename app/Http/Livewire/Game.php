<?php

namespace App\Http\Livewire;

use App\Quiz;
use App\Participant;
use Livewire\Component;

class Game extends Component
{
    public $participant;
    public $quiz;

    protected $listeners = ['echo:quizy,QuizEvent' => 'participantUpdated'];

    public function mount(Participant $participant)
    {
        $this->participant = $participant;
        $this->quiz = $this->participant->quiz;
    }
    
    public function participantUpdated()
    {
        $this->quiz = $this->participant->quiz;
    }

    public function render()
    {
        return view('livewire.game');
    }
}
