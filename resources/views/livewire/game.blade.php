<div class="container mx-auto p-4">
  <h1 class="text-2xl">{{ $quiz->name }}</h1>
  <p>{{ $quiz->description }}</p>
  <h1 class="text-center text-2xl mt-4">Welcome, {{ $participant->username }}</h1>
  <p class="text-center mb-4">Wait for the host to start the quiz.</p>
  <h1 class="text-xl mt-4">Participants ( {{ count($quiz->participants) }} )</h1>
  @foreach($quiz->participants as $participant)
  <h1>{{ $participant->username }}</h1>
  @endforeach
</div>
