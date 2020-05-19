<?php

namespace App\Http\Livewire\Quiz;

use App\Quiz;
use Livewire\Component;

class Form extends Component
{
    public $quiz;
    public $name;
    public $description;
    public $editing;

    public function mount($quiz = null)
    {
        $this->editing = empty($quiz) ? false : true;
        $this->quiz = $quiz;
        $this->name = $quiz ? $quiz->name : '';
        $this->description = $quiz ?  $quiz->description : '';
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'required|min:3|max:255',
            'description' => 'required|max:255',
        ]);
    }

    public function create()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        if($this->editing) 
        {
            Quiz::where('id', $this->quiz->id)->update(['name' => $this->name, 'description' => $this->description]);
        }
        else
        {
            $quiz = auth()->user()->quizzies()->create($validatedData);
        }


        return redirect()->route('quiz.index');
    }

    public function render()
    {
        return view('livewire.quiz.form');
    }
}
