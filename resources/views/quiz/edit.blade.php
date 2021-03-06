@extends('layouts.app')

@section('content')
@livewire('components.navbar')

<div class="container mx-auto my-4 px-4 md:px-0">
  <div class="w-full md:w-2/3 xl:w-1/2 mx-auto">
    <h1 class="text-xl">Edit the quiz</h1>
    @livewire('quiz.form', ['quiz' => $quiz])
  </div>

</div>
@endsection
