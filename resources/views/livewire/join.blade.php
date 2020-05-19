<div class="container mx-auto">
  <div class="w-full max-w-xs mx-auto py-8">
    <form wire:submit.prevent="join" class="px-4 py-8 bg-white rounded border">
      @if (session()->has('message'))
      <div class="mb-4 px-4 py-3 rounded bg-red-500 font-semibold text-white text-sm">
        {{ session('message') }}
      </div>
      @endif
      <div class="mb-4">
        <label class="block mb-2 font-semibold text-gray-700" for="username">
          Username
        </label>
        <input wire:model="username" class="w-full border @error('username') border-red-500 @enderror rounded bg-gray-100 p-2 focus:bg-white focus:outline-none" id="username" type="text" placeholder="username" autofocus>
        @error('username')
        <p class="mt-1 text-red-500 text-xs font-semibold">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-4">
        <label class="block mb-2 font-semibold text-gray-700" for="pin">
          pin
        </label>
        <input wire:model="pin" class="w-full border @error('pin') border-red-500 @enderror rounded bg-gray-100 p-2 focus:bg-white focus:outline-none" id="pin" type="number" placeholder="pin">
        @error('pin')
        <p class="mt-1 text-red-500 text-xs font-semibold">{{ $message }}</p>
        @enderror
      </div>
      <div class="flex items-center justify-end">
        <button wire:loading.attr="disabled" wire:target="join" type="submit" class="disabled:opacity-75 disabled:cursor-not-allowed px-4 py-2 rounded bg-blue-500 text-white font-semibold focus:outline-none" @if(empty($username) || empty($pin) || $errors->any()) disabled @endif>
          <span wire:loading wire:target="join">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="background: transparent; display: inline-block; shape-rendering: auto;" width="1.5rem" height="1.5rem" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
              <g transform="rotate(0 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
                  <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate>
                </rect>
              </g>
              <g transform="rotate(30 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
                  <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate>
                </rect>
              </g>
              <g transform="rotate(60 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
                  <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate>
                </rect>
              </g>
              <g transform="rotate(90 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
                  <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate>
                </rect>
              </g>
              <g transform="rotate(120 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
                  <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate>
                </rect>
              </g>
              <g transform="rotate(150 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
                  <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate>
                </rect>
              </g>
              <g transform="rotate(180 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
                  <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate>
                </rect>
              </g>
              <g transform="rotate(210 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
                  <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate>
                </rect>
              </g>
              <g transform="rotate(240 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
                  <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate>
                </rect>
              </g>
              <g transform="rotate(270 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
                  <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate>
                </rect>
              </g>
              <g transform="rotate(300 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
                  <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate>
                </rect>
              </g>
              <g transform="rotate(330 50 50)">
                <rect x="47" y="24" rx="3" ry="6" width="6" height="12" fill="#ffffff">
                  <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate>
                </rect>
              </g>
              <!-- [ldio] generated by https://loading.io/ -->
            </svg>
          </span>
          Join</button>
      </div>
    </form>
  </div>
