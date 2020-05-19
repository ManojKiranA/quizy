<div>
  <form wire:submit.prevent="create" class="mt-3">
    <div class="mb-4">
      <label class="block mb-2 font-semibold text-gray-700" for="name">
        Name
      </label>
      <input wire:model="name" class="w-full border @error('name') border-red-500 @enderror rounded bg-gray-100 p-2 focus:bg-white focus:outline-none" id="name" type="text" placeholder="Name" autofocus>
      @error('name')
      <p class="mt-1 text-red-500 text-xs font-semibold">{{ $message }}</p>
      @enderror
    </div>
    <div class="mb-4">
      <label class="block mb-2 font-semibold text-gray-700" for="description">
        Description
      </label>
      <textarea wire:model="description" class="resize-none w-full border @error('description') border-red-500 @enderror rounded bg-gray-100 p-2 focus:bg-white focus:outline-none" rows="4" id="description"></textarea>
      @error('description')
      <p class="mt-1 text-red-500 text-xs font-semibold">{{ $message }}</p>
      @enderror
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
