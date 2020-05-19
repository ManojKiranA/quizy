<div class="z-50 sticky top-0 w-full border-b bg-white text-gray-700">
  <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
    <div class="py-4 flex flex-row items-center justify-between">
      <a href="/" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded focus:outline-none ">Quizy</a>
      <button class="md:hidden rounded focus:outline-none " @click="open = !open">
        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
          <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </button>
    </div>
    <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
      <a class="px-4 py-2 mt-2 text-sm font-semibold @if(request()->routeIs('quiz.*')) text-gray-900 bg-gray-200 @endif rounded md:mt-0 hover:text-gray-900 focus:outline-none" href="/quiz">Quiz</a>
      <div @click.away="open = false" class="relative" x-data="{ open: false }">
        <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 border text-sm font-semibold text-left bg-transparent rounded md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 hover:bg-gray-200 focus:outline-none">
          <span>{{ auth()->user()->name }}</span>
          <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded shadow-lg md:w-64">
          <div class="bg-white rounded overflow-hidden shadow-lg">
            <div class="text-center p-6  border-b">
              <img class="h-24 w-24 rounded-full mx-auto" src="https://thumbs.dreamstime.com/b/default-avatar-profile-icon-social-media-user-vector-default-avatar-profile-icon-social-media-user-vector-portrait-176194876.jpg" alt="Randy Robertson" />
              <p class="pt-2 text-lg font-semibold">{{ auth()->user()->name }}</p>
              <p class="text-sm text-gray-600">{{ auth()->user()->email }}</p>
              <div class="mt-5">
                <a href="#" class="border rounded-full py-2 px-4 text-xs font-semibold text-gray-700">
                  Manage your Account
                </a>
              </div>
            </div>
            <div class="border-b">
              {{-- <a href="#" class="px-4 py-2 hover:bg-gray-100 flex">
                <div class="text-gray-800">
                  <svg fill="none" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1" viewBox="0 0 24 24" class="w-5 h-5">
                    <path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                  </svg>
                </div>
                <div class="pl-3">
                  <p class="text-sm font-medium text-gray-800 leading-none">Add members</p>
                  <p class="text-xs text-gray-500">Add/manage users &amp; teams</p>
                </div>
              </a>
              <a href="#" class="px-4 py-2 hover:bg-gray-100 flex">
                <div class="text-gray-800">
                  <svg fill="none" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1" viewBox="0 0 24 24" class="w-5 h-5">
                    <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                </div>
                <div class="pl-3">
                  <p class="text-sm font-medium text-gray-800 leading-none">Account settings</p>
                  <p class="text-xs text-gray-500">Usage, billing, branding, teams</p>
                </div>
              </a>
              <a href="#" class="px-4 py-2 hover:bg-gray-100 flex">
                <div class="text-gray-800">
                  <svg fill="none" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1" viewBox="0 0 24 24" class="w-5 h-5">
                    <path d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                </div>
                <div class="pl-3">
                  <p class="text-sm font-medium text-gray-800 leading-none">Personal settings</p>
                  <p class="text-xs text-gray-500">Email, profile, notifications</p>
                </div>
              </a> --}}
              <a href="#" class="px-4 py-2 hover:bg-gray-100 flex">
                <div class="text-green-600">
                  <svg fill="none" stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="1" viewBox="0 0 24 24" class="w-5 h-5">
                    <path d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                  </svg>
                </div>
                <div class="pl-3">
                  <p class="text-sm font-medium text-gray-800 leading-none">
                    Add new quiz
                  </p>
                  <p class="text-xs text-gray-500">Create, host and play</p>
                </div>
              </a>
            </div>

            <div class="">
              <a href="/quiz" class="flex px-4 py-2 text-black text-sm hover:bg-gray-200">
                My Quiz
              </a>
              <a href="/logout" class="flex px-4 py-2 text-black text-sm hover:bg-gray-200">
                Logout
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>
</div>
