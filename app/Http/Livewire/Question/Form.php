<?php

namespace App\Http\Livewire\Question;

use App\Answer;
use App\Question;
use Livewire\Component;

class Form extends Component
{
    public $quiz;
    public $question;
    public $correct;
    public $form = [
        'one' => [
            'answer' => '',
            'is_correct' => false,
        ],
        'two' => [
            'answer' => '',
            'is_correct' => false,
        ],
        'three' => [
            'answer' => '',
            'is_correct' => false,
        ],
        'four' => [
            'answer' => '',
            'is_correct' => false,
        ],
    ];
    public $editing;

    public function mount($quiz)
    {
        $this->quiz = $quiz;
    }

    public function updatedCorrect($value)
    {
        foreach($this->form as $key => $value)
        {
            $this->form[$key]["is_correct"] = false;
        }
        $this->form[$this->correct]['is_correct'] = true;
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'question' => 'required|min:3',
            'form.one.answer' => 'required',
            'form.two.answer' => 'required',
            'form.three.answer' => 'required',
            'form.four.answer' => 'required',
            'correct' => 'required',
        ]);
    }

    public function create()
    {
        $this->validate([
            'question' => 'required',
            'form.one.answer' => 'required',
            'form.two.answer' => 'required',
            'form.three.answer' => 'required',
            'form.four.answer' => 'required',
            'correct' => 'required',
        ]);
        
        $newQuestion = $this->quiz->questions()->create([
            'question' => $this->question
        ]);

        foreach($this->form as $option)
        {
            $newQuestion->answers()->create([
                'answer' => $option['answer'],
                'is_correct' => $option['is_correct'],
            ]);
        }

        return redirect()->route('quiz.show', $this->quiz);
    }

    public function render()
    {
        return view('livewire.question.form');
    }
}
