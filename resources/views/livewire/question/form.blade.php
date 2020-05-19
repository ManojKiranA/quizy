<div>
  <form wire:submit.prevent="create" class="mt-3">
    <div class="mb-4">
      <label class="block mb-2 font-semibold text-gray-700" for="question">
        Question
      </label>
      <textarea wire:model="question" class="resize-none w-full border text-center text-2xl @error('question') border-red-500 @enderror rounded bg-gray-100 p-2 focus:bg-white focus:outline-none" rows="3" id="question" autofocus></textarea>
      @error('question')
      <p class="mt-1 text-red-500 text-xs font-semibold">{{ $message }}</p>
      @enderror
    </div>
    <div class="grid grid-cols-2 col-gap-8 row-gap-4 mb-4">
      <div class="flex items-center col-span-2 md:col-span-1">
        <input wire:model="form.one.answer" class="w-full border @error('form.one.answer') border-red-500 @enderror rounded bg-gray-100 p-2 focus:bg-white focus:outline-none" id="form.one.answer" type="text">
        <label class="ml-3" for="form.one.is_correct">
          @if(!$form['one']['is_correct'])
          <svg class="bi bi-circle text-gray-700" width="2rem" height="2rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z" clip-rule="evenodd" />
          </svg>
          @else
          <svg class="bi bi-check-circle text-green-500" width="2rem" height="2rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 010 .708l-7 7a.5.5 0 01-.708 0l-3-3a.5.5 0 11.708-.708L8 9.293l6.646-6.647a.5.5 0 01.708 0z" clip-rule="evenodd" />
            <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1013.5 8a.5.5 0 011 0 6.5 6.5 0 11-3.25-5.63.5.5 0 11-.5.865A5.472 5.472 0 008 2.5z" clip-rule="evenodd" />
          </svg>
          @endif
        </label>
        <input wire:model="correct" class="hidden" type="radio" id="form.one.is_correct" name="option" value="one" />
        @error('form.one.answer')
        <p class=" mt-1 text-red-500 text-xs font-semibold">{{ $message }}</p>
        @enderror
      </div>
      <div class="flex items-center col-span-2 md:col-span-1">
        <input wire:model="form.two.answer" class="w-full border @error('form.two.answer') border-red-500 @enderror rounded bg-gray-100 p-2 focus:bg-white focus:outline-none" id="form.two.answer" type="text">
        <label class="ml-3" for="form.two.is_correct">
          @if(!$form['two']['is_correct'])
          <svg class="bi bi-circle text-gray-700" width="2rem" height="2rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z" clip-rule="evenodd" />
          </svg>
          @else
          <svg class="bi bi-check-circle text-green-500" width="2rem" height="2rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 010 .708l-7 7a.5.5 0 01-.708 0l-3-3a.5.5 0 11.708-.708L8 9.293l6.646-6.647a.5.5 0 01.708 0z" clip-rule="evenodd" />
            <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1013.5 8a.5.5 0 011 0 6.5 6.5 0 11-3.25-5.63.5.5 0 11-.5.865A5.472 5.472 0 008 2.5z" clip-rule="evenodd" />
          </svg>
          @endif
        </label>
        <input class="hidden" wire:model="correct" type="radio" id="form.two.is_correct" name="option" value="two" />
        @error('form.two.answer')
        <p class=" mt-1 text-red-500 text-xs font-semibold">{{ $message }}</p>
        @enderror
      </div>
      <div class="flex items-center col-span-2 md:col-span-1">
        <input wire:model="form.three.answer" class="w-full border @error('form.three.answer') border-red-500 @enderror rounded bg-gray-100 p-2 focus:bg-white focus:outline-none" id="form.three.answer" type="text">
        <label class="ml-3" for="form.three.is_correct">
          @if(!$form['three']['is_correct'])
          <svg class="bi bi-circle text-gray-700" width="2rem" height="2rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z" clip-rule="evenodd" />
          </svg>
          @else
          <svg class="bi bi-check-circle text-green-500" width="2rem" height="2rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 010 .708l-7 7a.5.5 0 01-.708 0l-3-3a.5.5 0 11.708-.708L8 9.293l6.646-6.647a.5.5 0 01.708 0z" clip-rule="evenodd" />
            <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1013.5 8a.5.5 0 011 0 6.5 6.5 0 11-3.25-5.63.5.5 0 11-.5.865A5.472 5.472 0 008 2.5z" clip-rule="evenodd" />
          </svg>
          @endif
        </label>
        <input wire:model="correct" class="hidden" type="radio" id="form.three.is_correct" name="option" value="three" />
        @error('form.three.answer')
        <p class=" mt-1 text-red-500 text-xs font-semibold">{{ $message }}</p>
        @enderror
      </div>
      <div class="flex items-center col-span-2 md:col-span-1">
        <input wire:model="form.four.answer" class="w-full border @error('form.four.answer') border-red-500 @enderror rounded bg-gray-100 p-2 focus:bg-white focus:outline-none" id="form.four.answer" type="text">
        <label class="ml-3" for="form.four.is_correct">
          @if(!$form['four']['is_correct'])
          <svg class="bi bi-circle text-gray-700" width="2rem" height="2rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z" clip-rule="evenodd" />
          </svg>
          @else
          <svg class="bi bi-check-circle text-green-500" width="2rem" height="2rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 010 .708l-7 7a.5.5 0 01-.708 0l-3-3a.5.5 0 11.708-.708L8 9.293l6.646-6.647a.5.5 0 01.708 0z" clip-rule="evenodd" />
            <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1013.5 8a.5.5 0 011 0 6.5 6.5 0 11-3.25-5.63.5.5 0 11-.5.865A5.472 5.472 0 008 2.5z" clip-rule="evenodd" />
          </svg>
          @endif
        </label>
        <input wire:model="correct" class="hidden" type="radio" id="form.four.is_correct" name="option" value="four" />
        @error('form.four.answer')
        <p class=" mt-1 text-red-500 text-xs font-semibold">{{ $message }}</p>
        @enderror
      </div>
    </div>
    <div class="mb-4 flex justify-end">
      <a href="{{ route('quiz.index') }}" class="px-4 py-2 shadow-sm rounded border text-blue-500 font-semibold focus:outline-none">Cancel</a>
      @if($editing)
      <button type="submit" class="ml-3 px-4 py-2 rounded bg-blue-500 text-white font-semibold focus:outline-none">Update</button>
      @else
      <button type="submit" class="ml-3 px-4 py-2 rounded bg-blue-500 text-white font-semibold focus:outline-none">Create</button>
      @endif
    </div>
  </form>
</div>
