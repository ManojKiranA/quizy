<div class="container mx-auto p-4">
  <div class="flex justify-between items-center">
    <h1 class="text-2xl">{{ $quiz->name }}</h1>
    <h1 class="text-2xl">Pin: {{ $quiz->pin }}</h1>
  </div>
  <p>{{ $quiz->description }}</p>
  <div class="flex justify-between items-centerl mt-4">
    <h1 class="text-2xl">Participants ( {{ count($participants) }} )</h1>
    <button class="px-3 py-1 rounded border bg-blue-500 text-white font-semibold transition duration-300 ease-in-out transform hover:scale-110 hover:shadow-lg focus:outline-none">Start quiz</button>
  </div>
  @foreach($participants as $participant)
  <h1>{{ $participant->username }}</h1>
  @endforeach
</div>
