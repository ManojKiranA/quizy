@extends('layouts.app')

@section('content')
@livewire('components.navbar')

@auth
<div class="flex bg-gray-100 py-24 justify-center">
  <div class="p-12 text-center max-w-2xl">
    <div class="md:text-3xl text-3xl font-bold">Welcome, {{ auth()->user()->name }}</div>
    <div class="text-gray-800 text-xl font-semibold mt-4">
      Create your quiz and host it to play with your friends, students or anyone in the world!
    </div>
    <div class="mt-6 flex justify-center">
      <a href="/quiz" class="py-2 px-4 rounded bg-blue-500 font-semibold text-white text-lg transition duration-500 ease-in-out transform hover:scale-110">Create quiz</a>
    </div>
  </div>
</div>
@else
<div class="flex bg-gray-100 py-24 justify-center">
  <div class="p-12 text-center max-w-2xl">
    <div class="md:text-3xl text-3xl font-bold">Welcome to Quizy</div>
    <div class="text-gray-800 text-xl font-semibold mt-4">
      Create your quiz and host it to play with your friends, students or anyone in the world!
    </div>
    <div class="mt-6 flex justify-center">
      <a href="/join" class="py-2 px-4 rounded bg-blue-500 font-semibold text-white text-lg transition duration-500 ease-in-out transform hover:scale-110">Join quiz</a>
    </div>
  </div>
</div>
@endauth
@endsection
