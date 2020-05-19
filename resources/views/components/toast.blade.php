@if ($message = Session::get('success'))
<div x-data="{ open : true }" :class="{ 'hidden' : !open }" class="fixed right-0 flex justify-between items-center rounded shadow mr-8 mt-16 px-4 w-64 h-12 text-green-500 border-l-4 border-green-500 bg-green-400 bg-opacity-25">
  <strong>{{ $message }}</strong>

  <svg @click=" open = false " class="bi bi-x cursor-pointer" width="1.5rem" height="1.5rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z" clip-rule="evenodd" />
    <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z" clip-rule="evenodd" />
  </svg>
</div>
@endif
