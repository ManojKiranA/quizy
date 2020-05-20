<?php

namespace App\Http\Livewire;

use App\Quiz;
use Livewire\Component;

class HostDashboard extends Component
{
    public $quiz;
    public $participants = [];

    protected $listeners = ['echo:quizy,QuizEvent' => 'participantUpdated'];

    public function mount(Quiz $quiz)
    {
        $this->quiz = $quiz;
        $this->participants = $this->quiz->participants;
    }
    
    public function participantUpdated()
    {
        $this->participants = $this->quiz->participants;
    }

    public function render()
    {
        return view('livewire.host-dashboard');
    }
}
