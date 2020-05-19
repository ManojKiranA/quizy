@extends('layouts.app')

@section('content')
@livewire('components.navbar')

<div class="container mx-auto my-4 px-4 md:px-0">
  <div class="w-full md:w-2/3 xl:w-1/2 mx-auto">
    <div class="flex justify-between items-center">
      <h1 class="text-xl">Your quizzies</h1>
      <a href="{{ route('quiz.create') }}" class="px-4 py-2 rounded bg-blue-500 text-white font-semibold transition duration-300 ease-in-out transform hover:scale-110 hover:shadow-lg focus:outline-none">Create quiz</a>
    </div>
    <div class="mt-4 border rounded">
      @forelse(auth()->user()->quizzies as $quiz)
      <div class="border-t first:border-t-0 p-4 hover:bg-gray-100">
        <div class="flex justify-between items-center">
          <h1 class="text-xl">{{ $quiz->name }}</h1>
          <div @click.away="open = false" class="relative" x-data="{ open: false }">
            <button @click="open = !open" class="z-0 flex justify-center items-center cursor-pointer h-8 w-8 rounded-full hover:bg-gray-300 focus:outline-none">
              <svg class="bi bi-three-dots-vertical" width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zm0-5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zm0-5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" clip-rule="evenodd" />
              </svg>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="-mt-8 z-25 absolute right-0 w-full origin-top-right rounded-md shadow-lg md:w-40">
              <div class="py-2 bg-white rounded-md shadow">
                <a class="block px-4 py-2 mt-2 text-sm bg-transparent md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none" href=" {{ route('quiz.edit', $quiz) }}">Edit</a>
                <form method="POST" action="{{ route('quiz.destroy', $quiz) }}">
                  @csrf
                  @method('delete')
                  <button type="submit" class="w-full text-left px-4 py-2 mt-2 text-sm bg-transparent md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none">Delete</button>
                </form>
              </div>
            </div>
          </div>

        </div>
        <p class="mb-3">{{ $quiz->description }}</p>
        <span class="px-2 py-1 border rounded text-blue-500 font-semibold">{{ count($quiz->questions) }} questions</span>
        <div class="mt-3 flex justify-between items-center text-sm">
          <p class="text-gray-700">{{ $quiz->created_at->diffForHumans() }}</p>
          <a href="#" class="z-0 ml-auto mr-3 px-3 py-1 rounded border text-blue-500 font-semibold transition duration-300 ease-in-out transform hover:scale-110 hover:shadow-lg focus:outline-none">Host</a>
          <a href="{{ route('quiz.show', $quiz) }}" class="z-0 px-3 py-1 rounded border bg-blue-500 text-white font-semibold transition duration-300 ease-in-out transform hover:scale-110 hover:shadow-lg focus:outline-none">View</a>
        </div>
      </div>
      @empty
      <p class="px-4 py-2">No quiz</p>
      @endforelse
    </div>
  </div>
</div>
@endsection
