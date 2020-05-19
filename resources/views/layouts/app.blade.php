<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }

    input[type="radio"]+label span {
      transition: background .2s,
        transform .2s;
    }

    input[type="radio"]+label span:hover,
    input[type="radio"]+label:hover span {
      transform: scale(1.2);
    }

    input[type="radio"]:checked+label span {
      background-color: #3490DC; //bg-blue
      box-shadow: 0px 0px 0px 2px white inset;
    }

    input[type="radio"]:checked+label {
      color: #3490DC; //text-blue
    }

    /* width */
    ::-webkit-scrollbar {
      width: 10px;
      height: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      background: #f1f1f1;
    }

    ::-webkit-scrollbar-track:hover {
      background: rgba(0, 0, 0, .2);
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: #888;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #555;
    }

  </style>
  @livewireStyles
</head>
<body class="h-screen bg-white">
  @include('components.toast')
  @yield('content')
  @livewireScripts
</body>
</html>
