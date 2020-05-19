@extends('layouts.app')

@section('content')
@livewire('components.navbar')
<div class="grid grid-cols-1 row-gap-4 lg:grid-cols-3 lg:col-gap-8 container mx-auto my-4 px-4">
  <div>
    <h1 class="text-2xl mb-3">Questions</h1>
    <div class="mt-4 border rounded">
      @forelse($quiz->questions as $question)
      <div class="border-t first:border-t-0 p-4 hover:bg-gray-100">
        <div class="flex justify-between items-start">
          <h1 class="mb-3">{{ $question->question }}</h1>
          <div @click.away="open = false" class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="z-0 flex justify-center items-center cursor-pointer h-8 w-8 rounded-full hover:bg-gray-300 focus:outline-none">
              <svg class="bi bi-three-dots-vertical" width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zm0-5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zm0-5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" clip-rule="evenodd" />
              </svg>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="-mt-8 z-25 absolute right-0 w-full origin-top-right rounded-md shadow-lg md:w-40">
              <div class="py-2 bg-white rounded-md shadow">
                {{-- <a class="block px-4 py-2 mt-2 text-sm bg-transparent md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none" href=" {{ route('quiz.edit', $quiz) }}">Edit</a> --}}
                <form method="POST" action="{{ route('question.destroy', ['quiz' => $quiz, 'question' => $question]) }}">
                  @csrf
                  @method('delete')
                  <button type="submit" class="w-full text-left px-4 py-2 mt-2 text-sm bg-transparent md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none">Delete</button>
                </form>
              </div>
            </div>
          </div>

        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
          @foreach($question->answers as $answer)
          <span class="px-2 py-1 border rounded @if($answer->is_correct) border-green-500 bg-green-100 text-green-500 @else border-gray-500 text-gray-800 @endif">{{ $answer->answer }}</span>
          @endforeach
        </div>
      </div>
      @empty
      <p class="px-4 py-2">No quiz</p>
      @endforelse
    </div>
  </div>
  <div class="col-span-2">
    <h1 class="text-2xl">{{ $quiz->name }}</h1>
    @livewire('question.form', ["quiz" => $quiz])
  </div>
</div>
@endsection
